<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquePayment extends Model
{
    use HasFactory;

    public function banque_credit()
    {
        return $this->belongsTo(BanqueCredit::class);
    }

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }

    public static function boot() {
        parent::boot();

        static::created(function($obj) {
            $obj->banque->updateSolde();

            $credit = $obj->banque_credit;
            $credit->paid += $obj->amount;
            $credit->rest -= $obj->amount;
            $credit->save();
        });

        static::updated(function($obj) {
            $obj->banque->updateSolde();

            $credit = $obj->banque_credit;
            $credit->paid -= $obj->getOriginal('amount');
            $credit->rest += $obj->getOriginal('amount');

            $credit->paid += $obj->amount;
            $credit->rest -= $obj->amount;

            $credit->save();
        });

        static::deleted(function($obj) {
            $obj->banque->updateSolde();

            $credit = $obj->banque_credit;
            $credit->paid -= $obj->amount;
            $credit->rest += $obj->amount;
            $credit->save();
        });
    }
}
