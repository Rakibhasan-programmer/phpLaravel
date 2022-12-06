<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $allBrand;

    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }
    // create brand
    public function newBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('message', 'Brand Created Successfully');
    }
    // read data
    public function manageBrand()
    {
        $this->allBrand = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.manage-brand', ['brands' => $this->allBrand]);
    }
    // edit brand
    public function editBrand($id)
    {
        $this->allBrand = Brand::find($id);
        return view('admin.brand.edit-brand', ['brand' => $this->allBrand]);
    }
    // update brand
    public function updateBrand(Request $request, $id)
    {
        Brand::brandUpdate($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand Updated Successfully');
    }
    // delete brand
    public function deleteBrand($id)
    {
        $this->allBrand = Brand::find($id);
        $this->allBrand->delete();
        return redirect('/manage-brand')->with('message', 'Brand Deleted Successfully');
    }


}
