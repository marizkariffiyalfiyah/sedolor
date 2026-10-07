<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiProduk extends Model
{
    protected $table = 'informasi_produks';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'prioritas',
        'jenis_layanan',
        'tanggal_permintaan',
        'nomor_antrean',
        'estimasi_jam',
        'status',
    ];

    protected $casts = [
        'tanggal_permintaan' => 'date',
    ];

// Tambahkan di dalam class User (app/Models/User.php)
public function informasiProduks()
{
    return $this->hasMany(InformasiProduk::class, 'user_id');
}}