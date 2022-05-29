<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spell extends Model
{
    protected $table = 'spell';
    public $timestamps = false;

    public function spellSchool(): BelongsTo
    {
        return $this->belongsTo(SpellSchool::class);
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }
}
