<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brands;

    public function index()
    {
        return view('brand.index');
    }
    public function store(Request $request)
    {
        Brand::newBrand($request);
        return redirect('/brand/add')->with('message', 'Brand Created Successfully');
    }
    public function manage()
    {
        $this->brands = Brand::all();
        return view('brand.manage', ['brands' => $this->brands]);
    }

}
