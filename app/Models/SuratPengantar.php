<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
    public $timestamps = true;
    protected $table = 'surat_pengantars';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'kewarganegaraan',
        'pekerjaan',
        'status_perkawinan',
        'alamat',
        'surat_bukti',
        'masa_berlaku',
        'keperluan',
        'keterangan',
        'status_surat',
    ];
}
