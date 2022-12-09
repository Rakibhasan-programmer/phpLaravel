<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $fruits;

    public function home()
    {
        $this->fruits = Fruit::orderBy('id', 'DESC')->get();
        return view('front.home.home', ['fruits' => $this->fruits]);
    }
}
