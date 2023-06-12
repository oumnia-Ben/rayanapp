<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    use HasFactory;

    public function wallets()
    {
        return $this->hasMany(UserBanque::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function banque_credits()
    {
        return $this->hasMany(BanqueCredit::class);
    }

    public function paid_banque_credits()
    {
        return $this->hasMany(BanqueCredit::class)->where('rest', 0);
    }

    public function unpaid_banque_credits()
    {
        return $this->hasMany(BanqueCredit::class)->where('rest', '>', 0);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function banque_payments()
    {
        return $this->hasMany(BanquePayment::class);
    }

    public function updateSolde()
    {
        $this->solde = $this->payments()->where('is_confirmed', true)->sum('amount') - $this->banque_payments()->where('is_confirmed', true)->sum('amount') + $this->solde_init;
        $this->saveQuietly();
    }

    public function updateSoldeVirt()
    {
        $this->solde_virt = $this->credits()->sum('amount') - $this->banque_credits()->sum('amount') + $this->solde_init;
        $this->saveQuietly();
    }

    public function saveQuietly(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }

    public static function boot() {
        parent::boot();

        static::created(function($obj) {

            foreach(User::all() as $user)
            {
                $user_banque = new UserBanque();
                $user_banque->user_id = $user->id;
                $user_banque->banque_id = $obj->id;
                $user_banque->solde = 0;
                $user_banque->save();
            }

            $obj->updateSolde();
        });

        static::updated(function($obj) {
            $obj->updateSolde();
        });

        static::deleted(function($obj) {
            $obj->wallets()->delete();
        });
    }
}
