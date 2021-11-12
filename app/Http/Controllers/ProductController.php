<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'title' => 'All Products',
            'products' => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        $reviews = $product->review()->with('user')->get();
        // $reviews = Review::whereBelongsTo($product)->get();

        return view('product', [
            'title' => 'Detail Product',
            'product' => $product,
            'reviews' => $reviews
        ]);
    }
    public function addreview(Request $request)
    {
        if (Auth::check()) {
            $user_id =  Auth::user()->id;
        } else {
            $user_id = rand(1, 10);
        }
        $review = [
            'isi' => $request->isi,
            'user_id' => $user_id,
            'product_id' =>  $request->product_id
        ];
        Review::create($review);

        return redirect()->route('product', ['slug' => $request->url])->with('success', 'your review was sended!');
    }
    public function search($key)
    {
    }
}
