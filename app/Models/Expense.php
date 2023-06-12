<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }

    public static function check()
    {
        $expenses = Self::where('stat', true)->get();
        foreach($expenses as $expense)
        {
            $year = date('Y');
            if($expense->period_id == 2)
            {
                $month = date('m');
                $credit = BanqueCredit::where('banque_id', $expense->banque_id)
                                    ->where('expense_id', $expense->id)
                                    ->whereYear('date', $year)
                                    ->whereMonth('date', $month)
                                    ->first();
                if(!$credit)
                {
                    BanqueCredit::addCredits([$expense], $expense->name.' du mois '.Carbon::now()->translatedFormat('F'));
                }
            }
            elseif($expense->period_id == 3)
            {
                $credit = BanqueCredit::where('banque_id', $expense->banque_id)
                                    ->where('expense_id', $expense->id)
                                    ->whereYear('date', $year)
                                    ->first();

                if(!$credit)
                {
                    BanqueCredit::addCredits([$expense], $expense->name.' '.Carbon::now()->translatedFormat('Y'));
                }

            }
            elseif($expense->period_id == 1)
            {
                $credit = BanqueCredit::where('banque_id', $expense->banque_id)
                                    ->where('expense_id', $expense->id)
                                    ->first();

                if(!$credit)
                {
                    BanqueCredit::addCredits([$expense]);
                }
            }
        }
    }
}
