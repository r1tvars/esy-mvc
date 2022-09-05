<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('user.index')->with('products', $products);
    }
    public function apiIndex()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return $products;
    }
}
