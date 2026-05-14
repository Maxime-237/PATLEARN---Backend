<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exercise extends Model
{
    protected $fillable = [
        'lecon_id',
        'titre',
        'description',
        'ordre',
    ];

    public function lecon() : BelongsTo {
        return $this->belongsTo(Lecon::class);
    }

    public function questions() : HasMany {
        return $this->hasMany(Question::class);
    }
}
