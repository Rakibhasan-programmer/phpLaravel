<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories, $category;
    public function index()
    {
        return view('category.index');
    }
    public function store(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category/add')->with('message', 'Category Info Saved Successfully');
    }
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

}
