<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function whoami()
    {
        return 'CCS06 Developer';
    }

    public function whoareyou()
    {
        return view('whoareyou');
    }

    public function handleWhoami(Request $request)
    {
        return $request->input('complete_name');
    }
}
