<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $products;
    public function home()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        return view('frontend.pages.home', ['products' => $this->products]);
    }

    public function details($id)
    {
        $this->products = Product::find($id);
        return view('frontend.pages.details', ['product' => $this->products]);
    }
}
