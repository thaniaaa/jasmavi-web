<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('frontend/master');
    }

    public function suratpengantar()
    {
        return view('backend/suratpengantar');
    }
}
