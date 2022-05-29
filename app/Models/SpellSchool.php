<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpellSchool extends Model
{
    protected $table = 'spell_school';
    public $timestamps = false;

    public function spells(): HasMany
    {
        return $this->hasMany(Spell::class);
    }
}
