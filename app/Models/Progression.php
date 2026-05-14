<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progression extends Model
{
    protected $fillable = [
        'user_id',
        'lecon_id',
        'score',
        'statut',
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function lecon() : BelongsTo {
        return $this->belongsTo(Lecon::class);
    }
}
