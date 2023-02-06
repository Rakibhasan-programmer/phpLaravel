<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $fruits, $single_product;

    public function home()
    {
        $this->fruits = Fruit::where('status', '=', 1)->get();
        return view('front.home.home', ['fruits' => $this->fruits]);
    }
    public function details($id)
    {
        $this->single_product = Fruit::find($id);
        return view('front.single-product.details-page', ['product' => $this->single_product]);
    }
}
