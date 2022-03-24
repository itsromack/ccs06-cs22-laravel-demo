<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}
