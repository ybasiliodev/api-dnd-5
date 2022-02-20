<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spells extends Model
{
    public $timestamps = false;

    public function spellSchool(): BelongsTo
    {
        return $this->belongsTo(SpellSchools::class);
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }
}
