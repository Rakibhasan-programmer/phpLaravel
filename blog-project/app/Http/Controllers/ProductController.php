<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $categories, $brands, $products, $product;
    public function addProduct()
    {
        $this->categories = Category::where('status', 1)->get();
        $this->brands = Brand::where('status', 1)->get();
        return view('admin.product.add', [
            'categories' => $this->categories,
            'brands' => $this->brands
        ]);
    }
    // create product
    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('message', 'Product Created Successfully');
    }
    // Read product
    public function manageProduct()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.manage', ['products' => $this->products]);
    }
    // edit
    public function editProduct($id)
    {
        $this->categories = Category::where('status', 1)->get();
        $this->brands = Brand::where('status', 1)->get();
        $this->product = Product::find($id);
        return view('admin.product.edit', [
            'categories' => $this->categories,
            'brands' => $this->brands,
            'product' => $this->product
        ]);
    }
    // update product
    public function updateProduct(Request $request, $id)
    {
        Product::productUpdate($request, $id);
        return redirect('/manage-product')->with('message', 'Product data updated successfully');
    }

    // delete
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
