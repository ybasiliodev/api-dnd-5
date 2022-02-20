<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AbilitiesXClassesResist extends Model
{
    public $timestamps = false;

    public function ability(): HasMany
    {
        return $this->hasMany(Abilities::class);
    }

    public function class(): HasMany
    {
        return $this->hasMany(Classes::class);
    }
}
