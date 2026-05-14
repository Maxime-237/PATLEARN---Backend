<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $fillable = [
        'exercise_id',
        'question',
        'type',
        'reponse_correcte',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function exercise(): BelongsTo {
        return $this->belongsTo(Exercise::class);
    }

    public function reponses() : HasMany {
        return $this->hasMany(Reponse::class);
    }
}
