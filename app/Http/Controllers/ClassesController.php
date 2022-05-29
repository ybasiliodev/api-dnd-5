<?php

namespace App\Http\Controllers;

use App\Models\Classes;

class ClassesController extends BaseController
{
    public function __construct()
    {
        $this->target = Classes::class;
    }
}
