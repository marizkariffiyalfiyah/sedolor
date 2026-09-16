<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Cek apakah pengguna sudah login
        if (auth()->check()) {
            // Ambil produk milik pengguna yang sedang login
            $products = auth()->user()->products()->get();
        } else {
            // Jika belum login, set $products sebagai koleksi kosong (atau ambil data publik)
            $products = collect(); 
        }

        return view('dashboard', compact('products'));
    }
}