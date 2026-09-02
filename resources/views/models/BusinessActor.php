<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessActor extends Model
{
    protected $fillable = [
        'user_id', 'nama_usaha', 'jenis_usaha', 'nomor_induk_berusaha',
        'npwp', 'alamat', 'provinsi', 'kota', 'no_telepon', 'email_usaha',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
