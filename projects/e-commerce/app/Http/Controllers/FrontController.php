<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $fruits;

    public function home()
    {
        $this->fruits = Fruit::where('status', '=', 1)->get();
        return view('front.home.home', ['fruits' => $this->fruits]);
    }
}
