<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('frontend/master');
    }

    public function dashboardadmin()
    {
        return view('backend/admin/dashboardadmin');
    }

    public function permintaansurat()
    {
        return view('backend/admin/permintaansurat');
    }

    public function suratselesai()
    {
        return view('backend/admin/suratselesai');
    }

    public function login()
    {
        return view('backend/login/login');
    }

    public function register()
    {
        return view('backend/login/register');
    }

    public function dashboarduser()
    {
        return view('backend/user/dashboarduser');
    }

    public function sktm()
    {
        return view('backend/user/sktm');
    }

    public function sktmkesehatan()
    {
        return view('backend/user/sktmkesehatan');
    }

    public function sktmpendidikan()
    {
        return view('backend/user/sktmpendidikan');
    }

    public function suratpengantar()
    {
        return view('backend/user/suratpengantar');
    }
}
