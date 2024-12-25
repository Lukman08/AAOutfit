<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    function index()
    {
        return view('guest.index');
    }
    function produk()
    {
        // Paginate the products (20 per page)
        $products = Product::paginate(20);

        // Apply transformation to the items after pagination
        $products->getCollection()->transform(function ($product) {
            $product->harga = (float) $product->harga;  // Convert 'harga' to float
            return $product;
        });
        return view('guest.produk', compact('products'));
    }
    function detailproduk()
    {
        return view('guest.detailproduk');
    }
}
