<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','keperluan','tempat_tujuan','rencana_kembali','waktu_keluar','lokasi_keluar','waktu_kembali','lokasi_kembali'
    ];
}
