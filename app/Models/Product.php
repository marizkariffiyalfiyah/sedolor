<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'tanggal_pengajuan' => 'datetime',
            'tanggal_disetujui' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function businessActor()
    {
        return $this->belongsTo(BusinessActor::class);
    }

    public function documents()
    {
        return $this->hasMany(ProductDocument::class);
    }

    public function statusHistories()
    {
        return $this->hasMany(StatusHistory::class);
    }
}