<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    /**
     * Menampilkan seluruh riwayat pengajuan milik user yang sedang login.
     */
 public function index(Request $request)
{
    $products = $request->user()
        ->products()
        ->latest('created_at')
        ->get();

    return view('riwayat-pengajuan', compact('products'));
}
    /**
     * Menampilkan detail satu pengajuan.
     */
    public function show(Request $request, Product $product)
    {
        // Pastikan pengajuan hanya bisa dilihat oleh pemiliknya.
        abort_unless(
            $product->user_id === $request->user()->id,
            403
        );

        $product->load([
            'documents',
            'statusHistories.changedBy',
        ]);

        return view('monitoring.show', compact('product'));
    }
}