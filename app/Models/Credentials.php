<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credentials extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'id_users',
        'email',
        'password',
        'no_hp',
        'nama_lengkap',
        'lembaga',
        'jabatan',
        'tempat_tgl_lahir',
        'kecamatan',
        'pend_terakhir',
        'status_kepegawaian',
        'tmt_mengajar',
        'masa_kerja',
        'status_pmms',
        'ket',
        'created_at',
        'updated_at'
    ];
}
