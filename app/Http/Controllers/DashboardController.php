<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $products = $request->user()->products()->latest()->get();

        return view('dashboard', compact('products'));
    }
}
