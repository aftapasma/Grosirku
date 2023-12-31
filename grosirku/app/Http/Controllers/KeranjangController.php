<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;
            $userId = auth()->user()->id;

            if ($userRole === 'customer') {
                $carts = Cart::where('user_id', $userId)->get();
                $carts->load('product');

                return view('keranjang.keranjangView', ['carts' => $carts]);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addToCart(Request $request)
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;
            $userId = auth()->user()->id;



            if ($userRole === 'customer') {
                        $productId = $request->input('product_id');

                        $isProductInCart = Cart::where('user_id', $userId)
                            ->where('product_id', $productId)
                            ->exists();

                        if (!$isProductInCart) {
                            $formFields['user_id'] = $userId;
                            $formFields['product_id'] = $productId;
                            $formFields['quantity'] = 1;

                            Cart::create($formFields);

                            return redirect()->back();
                        } else {
                            return redirect()->back();
                        }
                }
        }
    }

    public function increaseQuantity($id)
    {
        $carts = Cart::findOrFail($id);
        $carts->quantity += 1;
        $carts->save();

        return redirect()->back();
    }

    public function decreaseQuantity($id)
    {
        $carts = Cart::findOrFail($id);

        if ($carts->quantity > 1) {
            $carts->quantity -= 1;
            $carts->save();
        } else {
            $carts->delete();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove($id) {
    if (auth()->check()) {
        $userRole = auth()->user()->role;
        $carts = Cart::findOrFail($id);

        if ($userRole === 'customer') {
            $carts->delete();
            return redirect()->back();
        }
    }
}

    public function clearCart() {
        $userId = auth()->user()->id;
        Cart::where('user_id', $userId)->delete();

        return redirect('/');
    }
}
