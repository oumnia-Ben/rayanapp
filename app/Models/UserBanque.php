<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBanque extends Model
{
    use HasFactory;

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function credits()
    {
        return $this->banque->credits;
    }

    public function paid_credits()
    {
        return $this->banque->credits()->where('user_id', $this->user_id)->where('rest', 0)->get();
    }

    public function unpaid_credits()
    {
        return $this->banque->credits()->where('user_id', $this->user_id)->where('rest', '>', 0)->get();
    }

    public function fund($amount)
    {
        $this->solde += $amount;
        $this->save();
    }

    public function withdraw($amount)
    {
        $this->solde -= $amount;
        $this->save();
    }

    public function resolve()
    {
        if($this->solde > 0)
        {
            foreach($this->unpaid_credits() as $credit)
            {
                $credit->getPaid();
            }
        }
        elseif($this->solde < 0)
        {
            foreach($this->paid_credits() as $credit)
            {
                $credit->getUnPaid();
            }
        }
    }

    public function correctSolde()
    {
        $this->solde = $this->payments()->where('is_confirmed', true)->sum('amount') - $this->credits()->sum('amount');
        $this->save();
    }

    public static function boot() {
        parent::boot();

        static::updated(function($obj) {
            $obj->banque->updateSolde();
            $obj->banque->updateSoldeVirt();
        });
    }
}
