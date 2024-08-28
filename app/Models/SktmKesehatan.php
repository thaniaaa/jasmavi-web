<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SktmKesehatan extends Model
{
    public $timestamps = true;
    protected $table = 'sktm_kesehatans';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'status',
        'alamat',
        'pekerjaan',
        'nik',
        'nama_suami_istri',
        'keperluan',
        'status_surat',
    ];
}
