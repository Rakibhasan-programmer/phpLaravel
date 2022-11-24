<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brands, $brand;

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
    // edit
    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('brand.edit', ['brand' => $this->brand]);
    }
    // update
    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('message', 'Data Updated Successfully');
    }
    // delete
    public  function delete($id)
    {
        Brand::deleted($id);
        return redirect('/brand/manage')->with('message', 'Data Deleted Successfully');
    }

}
