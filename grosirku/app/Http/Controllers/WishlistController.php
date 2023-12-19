<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index() {

        if (auth()->check()) {
            $userRole = auth()->user()->role;
            $userId = auth()->user()->id;

            if ($userRole === 'customer') {
                $wishlists = Wishlist::where('user_id', $userId)->get();
                $wishlists->load('product');

                return view('customer.wishlists', ['wishlists' => $wishlists]);
            }
        }
       
    }

    public function store(Request $request) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;
            $userId = auth()->user()->id;

            if ($userRole === 'customer') {
                $formFields['user_id'] = $userId;
                $formFields['product_id'] = $request->input('product_id');

                Wishlist::create($formFields);

                return redirect()->back();
            }
        }
    }

    public function destroy(Wishlist $wishlist) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'customer') {
                $wishlist->delete();
                return redirect('/');
            }
        }
    }
}
