<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        // dd($products->toArray());

        $request->session()->put('name', 'ye htut kyaw');

        return view(
            'client.index',
            [
                'products' => $products
            ]
        );
    }
}
