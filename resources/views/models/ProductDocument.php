<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDocument extends Model
{
    protected $fillable = ['product_id', 'jenis_dokumen', 'nama_file', 'path_file'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
