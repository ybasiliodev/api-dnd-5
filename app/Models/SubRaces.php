<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubRaces extends Model
{
    public $timestamps = false;

    public function subRaces(): BelongsTo
    {
        return $this->belongsTo(Races::class);
    }

    public function abilities(): BelongsToMany
    {
        return $this->BelongsToMany(SubRaces::class, "sub_race_bonus", "sub_race_id", "ability_id");
    }
}
