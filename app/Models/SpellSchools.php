<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpellSchools extends Model
{
    public $timestamps = false;

    public function spells(): HasMany
    {
        return $this->hasMany(Spells::class);
    }
}
