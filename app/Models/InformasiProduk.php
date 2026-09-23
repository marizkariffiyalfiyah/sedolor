<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'prioritas',
        'jenis_layanan',
        'tanggal_permintaan',
        'no_whatsapp',
        'nomor_antrean',
        'estimasi_jam',
    ];
}