<?php

namespace App\Http\Controllers;

use App\Models\Race;

class RaceController extends BaseController
{
    public function __construct()
    {
        $this->target = Race::class;
    }
}
