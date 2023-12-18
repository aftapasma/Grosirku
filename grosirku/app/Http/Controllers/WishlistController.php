<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index() {
        return view('customer.wishlist', ['wishlists' => Wishlist::with('product')->get()]);
    }

    public function store(Request $request) {
        $formFields['user_id'] = auth()->id();
        $formFields['product_id'] = 3;

        Wishlist::create($formFields);

        return redirect('/wishlist');
    }

    public function destroy() {

    }
}
