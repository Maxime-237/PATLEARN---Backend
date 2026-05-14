<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Cours extends Model
{
    protected $fillable = [
        'nom',
        'description',
    ];

    public function lecons() : HasMany {
        return $this->hasMany(Lecon::class);
    }

    public function inscriptions() : HasMany {
        return $this->hasMany(Inscription::class);
    }

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class, 'inscriptions');
    }
}
