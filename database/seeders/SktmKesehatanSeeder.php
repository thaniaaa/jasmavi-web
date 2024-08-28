<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SktmKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sktm_kesehatans')->insert([
            [
                'nama_lengkap' => 'Sabrina Aska Amalina',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => '1999-05-21',
                'status' => 'Belum Menikah',
                'alamat' => 'Jalan Kelinci Raya',
                'pekerjaan' => 'Mahasiswa',
                'nik' => '1234567891011123',
                'nama_suami_istri' => 'Belum Punya',
                'keperluan' => 'Tes Kesehatan',
                'status_surat' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
