<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductPublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // requieren login
    }

    public function index()
    {
        $products = Product::orderBy('created_at','desc')->paginate(12);
        return view('productos.index', compact('products'));
    }
}
