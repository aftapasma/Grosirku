<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(Request $request) {
        $userId = auth()->user()->id;
        $orders = Cart::where('user_id', $userId)->get();
        $orders->load('product');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function checkout(Request $request)
    {
        $user = auth()->user();
        $userId = $user->id;
        $product = \App\Models\Product::get();
        $carts = Cart::where('user_id', $userId)->get();
        $carts->load('product');
        $total_price = 0;
        foreach ($carts as $cart) {
            $product = \App\Models\Product::find($cart->product_id);
            $total_price += $cart->quantity * $product->price;

            Transaction::create([
                'user_id'     => $userId,
                'product_id'  => $product->id,
                'quantity'    => $cart->quantity,
                'total_price' => $total_price,
                'status'      => 'menunggu verifikasi',
            ]);
        }

        $orders = Cart::where('user_id', $userId)->get();
        $orders->load('product');
        $transactions = Transaction::where('user_id', $userId)->get();
        $transactions->load('product');

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('app.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id'      => $cart->id,
                'gross_amount'  => $total_price,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'email' => $user->email,
                'phone' => $user->telp,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('Pembayaran.pembayaran', compact('snapToken', 'orders', 'transactions', 'carts', 'params', 'total_price'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $pembayaran)
    {
        //
    }
}
