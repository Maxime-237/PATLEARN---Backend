<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mot extends Model
{
    protected $fillable = [
        'cours_id',
        'mot',
        'traduction',
        'ordre',
        'audio_url',
    ];

    public function cours(): BelongsTo
    {
        return $this->belongsTo(Cours::class);
    }
}
