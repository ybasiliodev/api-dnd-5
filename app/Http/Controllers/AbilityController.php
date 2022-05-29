<?php

namespace App\Http\Controllers;

use App\Models\Ability;

class AbilityController extends BaseController
{
    public function __construct()
    {
        $this->target = Ability::class;
    }
}
