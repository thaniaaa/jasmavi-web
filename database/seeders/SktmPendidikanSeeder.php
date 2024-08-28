<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SktmPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sktm_pendidikans')->insert([
            [
                'nama_lengkap' => 'Sabrina Aska Amalina',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => '1999-05-21',
                'status' => 'Belum Menikah',
                'alamat' => 'Jalan Kelinci Raya',
                'nama_kk_bapak' => 'Budi Santoso',
                'keperluan' => 'Melanjutkan Pendidikan',
                'status_surat' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
