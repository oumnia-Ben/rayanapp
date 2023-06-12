<?php

namespace App\Models;

use App\Notifications\Syndicate;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'date_send',
        'is_send'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notifable()
    {
        return $this->morphTo();
    }

    public static function add($user_id, $title, $body)
    {
        $notif = new Self;
        $notif->user_id = $user_id;
        $notif->title = $title;
        $notif->body = $body;
        $notif->save();
    }

    public static function send()
    {
        $notifs = Self::where('is_send', false)->get();

        foreach($notifs as $notif)
        {
            $message = [
                'title' => $notif->title,
                'Body' => $notif->body
            ];

            $notif->user->notify(new Syndicate($message));

            $notif->is_send = true;
            $notif->save();
        }
    }
}
