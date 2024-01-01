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
                        $product = Product::where('id', $productId)->first();
                        $isProductOnStock = $product && $product->stock === 0;

                        if (!$isProductInCart && !$isProductOnStock) {
                            $formFields['user_id'] = $userId;
                            $formFields['product_id'] = $productId;
                            $formFields['quantity'] = 1;

                            Cart::create($formFields);
                            $product->stock -= 1;
                            $product->save();

                            return redirect()->back();
                        } else {
                            $message = "Maaf produk yang anda pilih sudah habis, silahkan pilih produk lain :)";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            return redirect()->back();
                        }
                }
        }
    }

    public function increaseQuantity($id)
    {
        $carts = Cart::findOrFail($id);
        $product = Product::find($carts->product_id);
        if ($product->stock >= $carts->quantity) {
            $carts->quantity += 1;
            $carts->save();
            $product->stock -= 1;
            $product->save();
        } else {
            $message = "Maaf permintaan sudah melebihi stok kami.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        return redirect()->back();
    }

    public function decreaseQuantity($id)
    {
        $carts = Cart::findOrFail($id);
        $product = Product::find($carts->product_id);

        if ($carts->quantity > 1) {
            $carts->quantity -= 1;
            $carts->save();
            $product->stock += 1;
            $product->save();
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
        $product = Product::find($carts->product_id);

        if ($userRole === 'customer') {
            $product->stock += $carts->quantity;
            $product->save();
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
