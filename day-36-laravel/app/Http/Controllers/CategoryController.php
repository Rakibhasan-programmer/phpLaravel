<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories, $category;
    public function index()
    {
        return view('category.index');
    }
    // store
    public function store(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category/add')->with('message', 'Category Data Saved Successfully');
    }
    // manage
    public function manage()
    {
        $this->categories = Category::all();
        return view('category.manage', ['categories' => $this->categories]);
    }
    // edit
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('category.edit', ['category' => $this->category]);
    }
    // update
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category Data Updated Successfully');
    }
    // delete
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category Data Deleted Successfully');
    }
}
