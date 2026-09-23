<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Pastikan TIDAK ADA logika seperti ini:
        // if (auth()->check()) { return redirect()->route('monitoring.index'); }

        // Kembalikan view dashboard publik secara langsung
        $products = collect(); 

        return view('dashboard', compact('products'));
    }
}
?>