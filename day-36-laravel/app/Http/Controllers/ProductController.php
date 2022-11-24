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
        $this->categories = Category::all();
        return view('product.edit', ['product' => $this->product, 'categories' => $this->categories]);
    }

    // update
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'Data Updated Successfully');
    }

    // delete
    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message', 'Data Deleted Successfully');
    }
}
