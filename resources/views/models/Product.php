<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'business_actor_id', 'nomor_pengajuan', 'nomor_registrasi',
        'nama_produk', 'kategori_produk', 'jenis_pengajuan', 'komposisi',
        'kemasan', 'netto', 'negara_asal', 'status', 'catatan_revisi',
        'tanggal_pengajuan', 'tanggal_disetujui',
    ];

    protected $casts = [
        'tanggal_pengajuan' => 'datetime',
        'tanggal_disetujui' => 'datetime',
    ];

    const WAJIB_DOKUMEN = ['izin_usaha', 'hasil_uji_lab', 'label_kemasan'];

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
        return $this->hasMany(ProductStatusHistory::class)->latest();
    }

    public function isDataProdukLengkap(): bool
    {
        return $this->business_actor_id
            && $this->nama_produk
            && $this->kategori_produk
            && $this->komposisi
            && $this->kemasan
            && $this->netto;
    }

    public function isDokumenLengkap(): bool
    {
        $terupload = $this->documents()->pluck('jenis_dokumen')->toArray();
        return count(array_diff(self::WAJIB_DOKUMEN, $terupload)) === 0;
    }

    public function isSiapKirim(): bool
    {
        return $this->isDataProdukLengkap() && $this->isDokumenLengkap();
    }

    public function statusLabel(): string
    {
        return match ($this->status) {
            'draft' => 'Draft',
            'diajukan' => 'Diajukan',
            'diproses' => 'Sedang Diproses / Menunggu Verifikasi BPOM',
            'perlu_revisi' => 'Perlu Revisi',
            'disetujui' => 'Disetujui - Produk Terdaftar',
            'ditolak' => 'Ditolak',
            default => ucfirst($this->status),
        };
    }
}
