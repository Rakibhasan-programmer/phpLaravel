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
}
