<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
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

    public function user_contributions()
    {
        return $this->hasMany(UserContribution::class, 'contribution_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(user::class, 'user_contributions', 'contribution_id', 'user_id');
    }

    public function scopeActive($query, $stat)
    {
        return $query->where('stat', $stat);
    }

    public static function check()
    {
        $contributions = Self::where('stat', true)->get();
        foreach($contributions as $contribution)
        {
            $year = date('Y');
            if($contribution->period_id == 2)
            {
                $month = date('m');
                foreach($contribution->user_contributions as $uc)
                {
                    $credit = Credit::where('user_id', $uc->user_id)
                                        ->where('contribution_id', $uc->contribution_id)
                                        ->whereYear('date', $year)
                                        ->whereMonth('date', $month)
                                        ->first();
                    if(!$credit)
                    {
                        Credit::addCredits([$uc], $contribution->name.' du mois '.Carbon::now()->translatedFormat('F'));
                    }
                }
            }
            elseif($contribution->period_id == 3)
            {
                foreach($contribution->user_contributions as $uc)
                {
                    $credit = Credit::where('user_id', $uc->user_id)
                                        ->where('contribution_id', $uc->contribution_id)
                                        ->whereYear('date', $year)
                                        ->first();

                    if(!$credit)
                    {
                        Credit::addCredits([$uc], $contribution->name.' '.Carbon::now()->translatedFormat('Y'));
                    }
                }
            }
            elseif($contribution->period_id == 1)
            {
                foreach($contribution->user_contributions as $uc)
                {
                    $credit = Credit::where('user_id', $uc->user_id)
                                        ->where('contribution_id', $uc->contribution_id)
                                        ->first();

                    if(!$credit)
                    {
                        Credit::addCredits([$uc]);
                    }
                }
            }
        }
    }

    public static function boot() {
        parent::boot();

        static::created(function($obj) {
            foreach(User::all() as $user)
            {
                $obj->users()->attach($user->id, ['amount' => $obj->amount]);
            }
        });
    }
}
