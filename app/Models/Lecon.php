<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecon extends Model
{
    protected $fillable = [
        'cours_id',
        'titre',
        'description',
        'ordre',
        'statut',
    ];

    public function cours() : BelongsTo {
        return $this->belongsTo(Cours::class);
    }

    public function exercises() : HasMany {
        return $this->hasMany(Exercise::class);
    }

    public function progressions() : HasMany {
        return $this->hasMany(Progression::class);
    }
}
