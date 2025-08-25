<?php

namespace App\Models;

use App\Enums\Agama;
use App\Enums\JenisKelamin;
use App\Enums\StatusPerkawinan;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'penduduk';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'alamat',
        'no_hp',
        'status_perkawinan',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'nik' => 'string',
    ];
}
