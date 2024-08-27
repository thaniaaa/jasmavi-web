<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'kewarganegaraan',
        'agama',
        'alamat',
        'surat_bukti',
        'keperluan',
        'masa_berlaku',
        'keterangan'
    ];
}
