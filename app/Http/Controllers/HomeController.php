<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;

class HomeController extends Controller{
    public function renderHome(){
        return view('home');
        $categories = Category::all();
        $products = Product::all();
        return view('home',compact('categories','products'));
    }
}