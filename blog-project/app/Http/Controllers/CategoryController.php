<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $allCategory, $category;
    public function addCategory()
    {
        return view('admin.category.add-category');
    }
    // create category
    public function newCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('message', 'Category Created Successfully');
    }
    // read data
    public function manageCategory()
    {
        // Category::get(['id', 'name', 'status'])
        // $this->allCategory = Category::all();
        $this->allCategory = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.manage-category', ['categories' => $this->allCategory]);
    }
    // edit - category
    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit-category', ['category' => $this->category]);
    }
    // update category
    public function updateCategory(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category Updated Successfully');
    }
    // delete category
    public function deleteCategory($id)
    {
        Category::removeCategory($id);
        return redirect('/manage-category')->with('message', 'Category Deleted Successfully');
    }

}
