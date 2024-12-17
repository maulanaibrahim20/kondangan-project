<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    protected $fillable = [
        "user_id",
        "title",
        "contact",
        "schedule_at",
        "amount",
        "image",
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
