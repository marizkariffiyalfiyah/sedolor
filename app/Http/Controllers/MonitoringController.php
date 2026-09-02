<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index(Request $request)
    {
        $products = $request->user()->products()
            ->whereNot('status', 'draft')
            ->latest()
            ->get();

        return view('monitoring.index', compact('products'));
    }

    public function show(Request $request, Product $product)
    {
        abort_unless($product->user_id === $request->user()->id, 403);
        $product->load('statusHistories.changedBy');

        return view('monitoring.show', compact('product'));
    }
}
