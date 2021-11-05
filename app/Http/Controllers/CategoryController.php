<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('products', [
            'title' => "Product By Category : $category->name",
            'products' => $category->product->load('category', 'user'),
            'categories' => $category->name
        ]);
    }
}
