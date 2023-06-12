<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanqueCredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'banque_id',
        'expense_id',
        'name',
        'date',
        'amount',
        'paid',
        'rest',
    ];

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }

    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class, 'payment_credits', 'payment_id', 'credit_id');
    }

    public static function addCredits($expenses, $label = "")
    {
        foreach($expenses as $expense)
        {
            $data = [
                'banque_id' => $expense->banque_id,
                'expense_id' => $expense->id,
                'name' => ($label != "")? $label:$expense->name,
                'date' => date('Y-m-d'),
                'amount' => $expense->amount,
                'paid' => 0,
                'rest' => $expense->amount,
            ];

            Self::create($data);
        }
    }

    public static function boot() {
        parent::boot();

        static::created(function($obj) {
            $obj->banque->updateSoldeVirt();
        });

        static::updated(function($obj) {
            $obj->banque->updateSoldeVirt();
        });

        static::deleted(function($obj) {
            $obj->banque->updateSoldeVirt();
        });
    }
}
