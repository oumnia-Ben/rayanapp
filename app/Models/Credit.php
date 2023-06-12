<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contribution_id',
        'banque_id',
        'name',
        'date',
        'amount',
        'paid',
        'rest',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contribution()
    {
        return $this->belongsTo(Contribution::class);
    }

    public function banque()
    {
        return $this->belongsTo(Banque::class, 'banque_id', 'id');
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class, 'payment_credits', 'payment_id', 'credit_id');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifable');
    }

    public static function addCredits($user_contributions, $label = "")
    {
        foreach($user_contributions as $uc)
        {
            if($uc->amount > 0)
            {
                $data = [
                    'user_id' => $uc->user_id,
                    'contribution_id' => $uc->contribution_id,
                    'banque_id' => $uc->contribution->banque_id,
                    'name' => ($label != "")? $label:$uc->contribution->name,
                    'date' => date('Y-m-d'),
                    'amount' => $uc->amount,
                    'paid' => 0,
                    'rest' => $uc->amount,
                ];

                $credit = Self::create($data);
                $credit->getPaid();
            }
        }
    }

    public function payCredit($amount)
    {
        if($this->rest >= $amount)
        {
            $this->rest -= $amount;
            $this->paid += $amount;
            $amount = 0;
        }
        else
        {
            $amount -= $this->rest;
            $this->rest = 0;
            $this->paid = $this->amount;
        }

        $this->save();

        return $amount;
    }

    public function getPaid()
    {
        if($this->banque)
        {
            $user_banque = $this->banque->wallets()->where('user_id', $this->user_id)->first();
            if($user_banque->solde > 0)
            {
                if($user_banque->solde >= $this->rest)
                {
                    $amount = $this->rest;
                }
                else
                {
                    $amount = $user_banque->solde;
                }

                $this->rest -= $amount;
                $this->paid += $amount;
                $this->save();

                $user_banque->solde -= $amount;
                $user_banque->save();
            }
        }
    }

    public function getUnPaid()
    {
        if($this->banque)
        {
            $user_banque = $this->banque->wallets()->where('user_id', $this->user_id)->first();
            if($user_banque->solde < 0)
            {
                if(abs($user_banque->solde) >= $this->paid)
                {
                    $amount = $this->paid;
                }
                else
                {
                    $amount = abs($user_banque->solde);
                }

                $this->rest += $amount;
                $this->paid -= $amount;
                $this->save();

                $user_banque->solde += $amount;
                $user_banque->save();
            }
        }

    }

    public static function notify()
    {
        $credits = Self::where('rest', ">", 0)->get();

        foreach($credits as $credit)
        {
            if($credit->user->pushSubscriptions->count() > 0)
            {


                $notifications = $credit->notifications()
                                        ->where(function($query){
                                            $query->where('is_send', false)
                                                ->orWhere(function($query) {
                                                    $query->where('is_send', true);
                                                    $query->whereRaw('DATEDIFF(now(), date_send) < 1');
                                                });
                                        })
                                        ->get();

                if($notifications->count() == 0)
                    $credit->notifications()->create([
                        'user_id' => $credit->user_id,
                        'title' => 'Syndic Rayan',
                        'body' => 'Rappelle de paiement : '.$credit->name,
                        'date_send' => Carbon::now(),
                    ]);
            }
        }
    }
}
