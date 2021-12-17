<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('product', [
            'title' => "Product By Category : $category->name",
            'products' => $category->product->load('category', 'user'),
            'categories' => $category->name
        ]);
    }
}
