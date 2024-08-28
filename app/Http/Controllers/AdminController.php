<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SktmPendidikan;
use App\Models\SktmKesehatan;

class UserController extends Controller
{
    public function viewSktm()
    {
        return view('backend/user/sktm');
    }

    //kesehatan

    public function viewSktmKesehatan()
    {
        return view('backend/user/sktmkesehatan');
    }

    //pendidikan

    public function viewSktmPendidikan()
    {
        return view('backend/user/sktmpendidikan');
    }

    public function createSktmPendidikan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'status' => 'required|string',
            'alamat' => 'required|string',
            'nama_kk_bapak' => 'required',
            'keperluan' => 'required',
        ]);
        $sktmPendidikan = new SktmPendidikan();
        $sktmPendidikan->fill($validatedData);
        $sktmPendidikan->status_surat = 0;
        $sktmPendidikan->save();
        return redirect()->route('sktmPendidikan')->with('success', 'Data SKTM Pendidikan berhasil ditambahkan.');
    }

    public function createSktmKesehatan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'status' => 'required|string',
            'alamat' => 'required|string',
            'pekerjaan' => 'required|string',
            'nik' => 'required|string|max:16',
            'nama_suami' => 'required|string',
            'keperluan' => 'required',
        ]);
        $sktmKesehatan = new SktmKesehatan();
        $sktmKesehatan->fill($validatedData);
        $sktmKesehatan->status_surat = 0;
        $sktmKesehatan->save();
        return redirect()->route('sktmKesehatan')->with('success', 'Data SKTM Kesehatan berhasil ditambahkan.');
    }
}
