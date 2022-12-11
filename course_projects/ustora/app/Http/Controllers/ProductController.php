<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products, $product;
    public function addProduct()
    {
        return view('backend.pages.add-product');
    }

    // create product
    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('message', 'Product Created Successfully');
    }
    // manage product
    public function manageProduct()
    {
        $this->products = Product::all();
        return view('backend.pages.manage', ['products' => $this->products]);
    }
    // edit product
    public function editProduct($id)
    {
        $this->product = Product::find($id);
        return view('backend.pages.edit', ['product' => $this->product]);
    }
    // update
    public function updateProduct(Request $request ,$id)
    {
        Product::productUpdate($request, $id);
        return redirect('/manage-product')->with('message', 'Update product successfully');
    }
    // delete product
    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        if(file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message', 'Product deleted Successfully');
    }
}
