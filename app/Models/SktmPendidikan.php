<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SktmPendidikan extends Model
{
    public $timestamps = true;
    protected $table = 'sktm_pendidikans';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'status',
        'alamat',
        'nama_kk_bapak',
        'keperluan',
        'status_surat',
    ];
}
