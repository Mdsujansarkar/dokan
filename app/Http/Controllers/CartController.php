<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    public function productAddCart(Request $request)
    {
        $product = Product::find($request->id);
        // array format
        Cart::add([
            'id'          => $request->id, // inique row ID
            'name'        => $product->product_name,
            'qty'         => $request->qty,
            'price'       => $product->product_price,
            'weight'      => 1,
            'options'     => [
                'image'   => $product->product_image
            ]

        ]);
        return redirect('/product/add/cart')->with("message","cart add successfully");

    }
    public function productAddShow()
    {
        $cartCollections = Cart::content();
        return view('fontend.cart.cart',['cartCollections'=> $cartCollections]);
    }

    public function cartUpdateShow(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        return redirect('/product/add/cart');
    }

    public function productDelete($id)
    {
        Cart::remove($id);
        return redirect('/product/add/cart');
    }
}
