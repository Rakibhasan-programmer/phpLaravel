<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories, $blogs, $blog;

    public function index()
    {
        $this->categories = Category::all();
        return view('blog.index', ['categories' => $this->categories]);
    }

    public function store(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'Blog Info Saved Successfully');
    }

    public function manage()
    {
        $this->blogs = Blog::all();
        return view('blog.manage', ['blogs' => $this->blogs]);
    }

    public function edit($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('blog.edit', ['blog' => $this->blog, 'categories' => $this->categories]);
    }

}
