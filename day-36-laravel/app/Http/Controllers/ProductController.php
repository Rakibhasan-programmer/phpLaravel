<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $categories, $products, $product;
    public function index()
    {
        $this->categories = Category::all();
        return view('product.index', ['categories' => $this->categories]);
    }
    // create / store
    public function store(Request $request)
    {
        Product::newProduct($request);
        return redirect('/product/add')->with('message', 'Product Data Saved Successfully');
    }
    // manage
    public function manage()
    {
        $this->products = Product::all();
        return view('product.manage', ['products' => $this->products]);
    }
    // edit
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }
}
