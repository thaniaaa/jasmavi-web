<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SktmPendidikan;
use App\Models\SktmKesehatan;
use App\Models\SuratPengantar;

class AdminController extends Controller
{
    public function viewPermintaanSurat(Request $request)
    {
        $sktmKesehatan = DB::table('sktm_kesehatans')
                            ->select('id', 'nik', 'nama_lengkap', DB::raw('"SKTM" as jenis_surat'), DB::raw('"sktm_kesehatans" as table_source'), 'status_surat')
                            ->where('status_surat', 0)
                            ->get();

        $sktmPendidikan = DB::table('sktm_pendidikans')
                            ->select('id', 'nama_kk_bapak as nik', 'nama_lengkap', DB::raw('"SKTM" as jenis_surat'), DB::raw('"sktm_pendidikans" as table_source'), 'status_surat')
                            ->where('status_surat', 0)
                            ->get();

        $suratPengantar = DB::table('surat_pengantars')
                            ->select('id', 'surat_bukti as nik', 'nama_lengkap', DB::raw('"Surat Pengantar" as jenis_surat'), DB::raw('"surat_pengantars" as table_source'), 'status_surat')
                            ->where('status_surat', 0)
                            ->get();

        $requests = $sktmKesehatan->merge($sktmPendidikan)->merge($suratPengantar);

        if ($request->has('search')) {
            $search = $request->input('search');
            $requests = $requests->filter(function ($item) use ($search) {
                return stripos($item->nik, $search) !== false || 
                       stripos($item->nama_lengkap, $search) !== false || 
                       stripos($item->jenis_surat, $search) !== false;
            });
        }
        return view('backend/admin/permintaansurat', ['requests' => $requests]);
    }

    public function updateStatus($id, $table_source)
    {
        $model = null;

        switch ($table_source) {
            case 'sktm_kesehatans':
                $model = SktmKesehatan::find($id);
                break;
            case 'sktm_pendidikans':
                $model = SktmPendidikan::find($id);
                break;
            case 'surat_pengantars':
                $model = SuratPengantar::find($id);
                break;
        }

        if ($model) {
            $model->status_surat = 1;
            $model->save();
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function viewSuratSelesai(Request $request)
    {
        $sktmKesehatan = DB::table('sktm_kesehatans')
                            ->select('id', 'nik', 'nama_lengkap', DB::raw('"SKTM" as jenis_surat'), DB::raw('"sktm_kesehatans" as table_source'), 'status_surat')
                            ->where('status_surat', 1)
                            ->get();

        $sktmPendidikan = DB::table('sktm_pendidikans')
                            ->select('id', 'nama_kk_bapak as nik', 'nama_lengkap', DB::raw('"SKTM" as jenis_surat'), DB::raw('"sktm_pendidikans" as table_source'), 'status_surat')
                            ->where('status_surat', 1)
                            ->get();

        $suratPengantar = DB::table('surat_pengantars')
                            ->select('id', 'surat_bukti as nik', 'nama_lengkap', DB::raw('"Surat Pengantar" as jenis_surat'), DB::raw('"surat_pengantars" as table_source'), 'status_surat')
                            ->where('status_surat', 1)
                            ->get();

        $requests = $sktmKesehatan->merge($sktmPendidikan)->merge($suratPengantar);

        if ($request->has('search')) {
            $search = $request->input('search');
            $requests = $requests->filter(function ($item) use ($search) {
                return stripos($item->nik, $search) !== false || 
                       stripos($item->nama_lengkap, $search) !== false || 
                       stripos($item->jenis_surat, $search) !== false;
            });
        }
        return view('backend/admin/suratselesai', ['requests' => $requests]);
    }

}
