<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pendaftaran',
        'tgl_daftar',
        'th_ajaran',
        'jurusan',
        'nm_peserta',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'agama',
        'almt_peserta',
    ];

    protected $table = 'tb_pendaftaran';

    protected $primaryKey = 'id_pendaftaran';

    protected $keyType = 'string';
}
