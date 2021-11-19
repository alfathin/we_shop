<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $userId = auth()->user()->id;
        $cartItems = \Cart::session($userId)->getContent();
        return view('cart', compact('cartItems'), [
            'title' => 'Category',
        ]);
    }


    public function addToCart(Request $request)
    {
        $userId = auth()->user()->id;
        if (\Cart::session($userId)->get($request->id)) {
            return redirect()->back()->with('notice', 'This item is already in your basket, check your cart');
        }
        $product = Product::find($request->id);
        \Cart::session($userId)->add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->excerpt,
            'quantity' => $request->quantity,
            'associatedModel' => $product
        ));
        session()->flash('success', 'Item Cart is Added Successfully !');
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
