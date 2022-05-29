<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubRace extends Model
{
    protected $table = 'sub_race';
    public $timestamps = false;

    public function subRaces(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }

    public function abilities(): BelongsToMany
    {
        return $this->BelongsToMany(SubRace::class, "sub_race_bonus", "sub_race_id", "ability_id");
    }
}
