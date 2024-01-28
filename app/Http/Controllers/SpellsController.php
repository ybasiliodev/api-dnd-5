<?php

namespace App\Http\Controllers;

use App\Models\Spell;

class SpellsController extends BaseController
{
    public function __construct() {
        $this->target = Spell::class;
    }
}
