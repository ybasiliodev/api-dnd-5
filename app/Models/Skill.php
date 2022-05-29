<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $table = 'skill';
    public $timestamps = false;

    public function ability(): BelongsTo
    {
        return $this->belongsTo(Ability::class);
    }
}
