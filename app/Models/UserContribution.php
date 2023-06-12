<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contribution_id',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contribution()
    {
        return $this->belongsTo(Contribution::class);
    }
}
