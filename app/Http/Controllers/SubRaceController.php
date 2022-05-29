<?php

namespace App\Http\Controllers;

use App\Models\SubRace;

class SubRaceController extends BaseController
{
    public function __construct()
    {
        $this->target = SubRace::class;
    }
}
