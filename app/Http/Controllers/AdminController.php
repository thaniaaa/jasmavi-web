<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SktmPendidikan;
use App\Models\SktmKesehatan;
use App\Models\SuratPengantar;

class AdminController extends Controller
{
    //permintaan surat
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

    //surat selesai
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

    public function pdfController($id, $table_source)
    {
        $model = null;
        $bulanIndonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];

        switch ($table_source) {
            case 'sktm_kesehatans':
                $model = SktmKesehatan::find($id);
                $tgl_lahir_obj = new \DateTime($model->tgl_lahir);
                $tgl_lahir = $tgl_lahir_obj->format('d') . ' ' . $bulanIndonesia[$tgl_lahir_obj->format('F')] . ' ' . $tgl_lahir_obj->format('Y');
                $data = [
                    'nama_lengkap' => $model->nama_lengkap,
                    'jenis_kelamin' => $model->jenis_kelamin,
                    'tempat_lahir' => $model->tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'status' => $model->status,
                    'alamat' => $model->alamat,
                    'pekerjaan' => $model->pekerjaan,
                    'nik' => $model->nik,
                    'nama_suami' => $model->nama_suami,
                    'keperluan' => $model->keperluan,
                    'jenis_surat' => $table_source == 'surat_pengantars' ? 'Surat Pengantar' :
                         ($table_source == 'sktm_pendidikans' ? 'SKTM Pendidikan' :
                         ($table_source == 'sktm_kesehatans' ? 'SKTM Kesehatan' : 'Unknown')),
                ];
                break;
            case 'sktm_pendidikans':
                $model = SktmPendidikan::find($id);
                $tgl_lahir_obj = new \DateTime($model->tgl_lahir);
                $tgl_lahir = $tgl_lahir_obj->format('d') . ' ' . $bulanIndonesia[$tgl_lahir_obj->format('F')] . ' ' . $tgl_lahir_obj->format('Y');
                $data = [
                    'nama_lengkap' => $model->nama_lengkap,
                    'jenis_kelamin' => $model->jenis_kelamin,
                    'tempat_lahir' => $model->tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'status' => $model->status,
                    'alamat' => $model->alamat,
                    'nama_kk_bapak' => $model->nama_kk_bapak,
                    'keperluan' => $model->keperluan,
                    'jenis_surat' => $table_source == 'surat_pengantars' ? 'Surat Pengantar' :
                         ($table_source == 'sktm_pendidikans' ? 'SKTM Pendidikan' :
                         ($table_source == 'sktm_kesehatans' ? 'SKTM Kesehatan' : 'Unknown')),
                ];
                break;
            case 'surat_pengantars':
                $model = SuratPengantar::find($id);
                $tgl_lahir_obj = new \DateTime($model->tgl_lahir);
                $tgl_lahir = $tgl_lahir_obj->format('d') . ' ' . $bulanIndonesia[$tgl_lahir_obj->format('F')] . ' ' . $tgl_lahir_obj->format('Y');
                $data = [
                    'nama_lengkap' => $model->nama_lengkap,
                    'jenis_kelamin' => $model->jenis_kelamin,
                    'tempat_lahir' => $model->tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'agama' => $model->agama,
                    'kewarganegaraan' => $model->kewarganegaraan,
                    'pekerjaan' => $model->pekerjaan,
                    'status_perkawinan' => $model->status_perkawinan,
                    'alamat' => $model->alamat,
                    'surat_bukti' => $model->surat_bukti,
                    'masa_berlaku' => $model->masa_berlaku,
                    'keperluan' => $model->keperluan,
                    'keterangan' => $model->keterangan,
                    'jenis_surat' => $table_source == 'surat_pengantars' ? 'Surat Pengantar' :
                         ($table_source == 'sktm_pendidikans' ? 'SKTM Pendidikan' :
                         ($table_source == 'sktm_kesehatans' ? 'SKTM Kesehatan' : 'Unknown')),
                ];
                break;
        }

        if (!$model) {
            return redirect()->back()->with('error', 'Data not found!');
        }

        // $data = [
        //     'name' => $model->nama_lengkap,
        //     'nik' => $model->nik,
        //     'jenis_surat' => $table_source == 'surat_pengantars' ? 'Surat Pengantar' :
        //          ($table_source == 'sktm_pendidikans' ? 'SKTM Pendidikan' :
        //          ($table_source == 'sktm_kesehatans' ? 'SKTM Kesehatan' : 'Unknown')),

        // ];

        $html = view('backend/pdf/template', $data)->render();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('document.pdf', 'I');
    }
}
