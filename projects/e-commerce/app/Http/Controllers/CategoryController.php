<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories;

    public function addCategory()
    {
        return view('admin.category.add');
    }
    // new category
    public function newCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('message', 'Product Create Successfully');
    }
    // read data
    public function manageCategory()
    {
        $this->categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }
    // edit category
    public function editCategory($id)
    {
        $this->categories = Category::find($id);
        return view('admin.category.edit', ['category' => $this->categories]);
    }
    // update
    public function updateCategory(Request $request,$id)
    {
        $this->categories = Category::categoryUpdate($request, $id);
        return redirect('/manage-category')->with('message', 'Category updated successfully');
    }
    // delete
    public function deleteCategory($id)
    {
        $this->categories = Category::find($id);
        $this->categories->delete();
        return redirect()->back()->with('message', 'Category delete successfully');
    }
}
