<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skills extends Model
{
    public $timestamps = false;

    public function ability(): BelongsTo
    {
        return $this->belongsTo(Abilities::class);
    }
}
