<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuratPengantarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_pengantars')->insert([
            [
                'nama_lengkap' => 'Sabrina Aska Amalina',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => '1999-05-21',
                'agama' => 'Islam',
                'kewarganegaraan' => 'Indonesia',
                'pekerjaan' => 'Programmer',
                'status_perkawinan' => 'Belum Menikah',
                'alamat' => 'Jalan Kelinci Raya',
                'surat_bukti' => '0123456789123456',
                'masa_berlaku' => '2024-12-30',
                'keperluan' => 'Melanjutkan Pendidikan',
                'keterangan' => 'Tidak ada keterangan',
                'status_surat' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
