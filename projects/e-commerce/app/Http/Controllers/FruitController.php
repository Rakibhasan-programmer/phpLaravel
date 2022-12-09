<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public $fruit, $fruits, $category;

    public function addFruit()
    {
        $this->category = Category::all();
        return view('admin.fruit.add', ['categories' => $this->category]);
    }
    // create
    public function newFruit(Request $request)
    {
        Fruit::createFruit($request);
        return redirect()->back()->with('message', 'New Fruit create successfully');
    }
    // manage
    public function manageFruit()
    {
        $this->fruits = Fruit::orderby('id', 'DESC')->get();
        return view('admin.fruit.manage', ['fruits' => $this->fruits]);
    }
}
