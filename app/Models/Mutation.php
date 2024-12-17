<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mutation extends Model
{
    protected $fillable = [
        "user_id",
        "invitation_id",
        "credit",
        "debit",
        "amount_before",
        "amount_after",
        "description"
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function invitation() : BelongsTo {
        return $this->belongsTo(Invitation::class, 'invitation_id', 'id');
    }
}
