<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('backend/login/register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nomor_telepon' => 'required|string|regex:/^[0-9]+$/|unique:users',
            'password' => 'required|string|min:5',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Anda berhasil melakukan registrasi! Mohon Login!');

        return redirect('/login')->with('success', 'Anda berhasil melakukan registrasi! Mohon Login!');
    }
}
