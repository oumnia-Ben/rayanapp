<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }

    public function credits()
    {
        return $this->belongsToMany(Credit::class, 'payment_credits', 'credit_id', 'payment_id');
    }

    public function payment_credits()
    {
        return $this->hasMany(PaymentCredit::class, 'credit_id', 'payment_id');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifable');
    }

    public static function boot() {
        parent::boot();

        static::created(function($obj) {
            $user_banque = $obj->user->banques()->where('banque_id', $obj->banque_id)->first();

            if($user_banque)
            {
                if($obj->is_confirmed)
                {
                    $user_banque->fund($obj->amount);

                    $user_banque->refresh();
                    $user_banque->resolve();
                }
            }

            if($obj->is_confirmed)
            {
                $obj->notify('validate');
                Notification::send();
            }
        });

        static::updated(function($obj) {
            $user_banque = $obj->user->banques()->where('banque_id', $obj->banque_id)->first();

            if($user_banque)
            {
                if($obj->is_confirmed)
                    $user_banque->fund($obj->amount);

                if($obj->getOriginal('is_confirmed'))
                    $user_banque->withdraw($obj->getOriginal('amount'));

                $user_banque->refresh();
                $user_banque->resolve();
            }

            if(!$obj->getOriginal('is_confirmed') && $obj->is_confirmed)
            {
                $obj->notify('validate');
                Notification::send();
            }

            if($obj->getOriginal('is_confirmed') && !$obj->is_confirmed)
            {
                $obj->notify('cancel');
                Notification::send();
            }
        });

        static::deleted(function($obj) {
            $user_banque = $obj->user->banques()->where('banque_id', $obj->banque_id)->first();
            if($user_banque)
            {
                if($obj->is_confirmed)
                {
                    $user_banque->withdraw($obj->amount);

                    $user_banque->refresh();
                    $user_banque->resolve();

                    $obj->notify('cancel');
                    Notification::send();
                }
            }
        });
    }

    public function notify($type)
    {
        if($type == "cancel")
            $message = 'Votre paiement est annulé';
        else
            $message = 'Votre paiement est validé';

        $this->notifications()->create([
            'user_id' => $this->user_id,
            'title' => 'Syndic Rayan',
            'body' => $message.' - '.$this->banque->name.' | Montant : '.$this->amount,
            'date_send' => Carbon::now(),
        ]);
    }
}
