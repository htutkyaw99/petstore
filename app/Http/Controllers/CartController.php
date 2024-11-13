<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('client.cart');
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        $cart = $request->session()->get('cart');

        if (isset($cart[$productId])) {

            $cart[$productId]['quantity']++;
        } else {

            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'thumbnail' => $product->thumbnail,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        session()->flash('success', 'Product added to cart!');

        return back();
    }
}
