<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use NotificationChannels\WebPush\HasPushSubscriptions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPushSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function validations()
    {
        return $this->hasMany(Contribution::class);
    }

    public function contributions()
    {
        return $this->belongsToMany(Contribution::class, 'user_contributions', 'contribution_id', 'user_id');
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function banques()
    {
        return $this->hasMany(UserBanque::class);
    }

    public static function listUsers()
    {
        $users = [];
        foreach(Self::all() as $user)
        {
            $users[$user->id] = $user->name." (".$user->stage." - ".$user->apartment.")";
        }

        return $users;
    }


}
