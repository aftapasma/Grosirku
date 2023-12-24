<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Produk;

class ProductController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                return view('admin.products-list', ['products' => Product::inRandomOrder()->filter(request(['category', 'search']))->get()]);
            }
        }

        $products1 = Product::orderByDesc('sold')->get();
        $products2 = Product::inRandomOrder()->get();
        
        return view('customer.home', compact('products1', 'products2'));

    }

    

    public function shop()
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole != 'admin') {
                return view('customer.shop', ['products' => Product::inRandomOrder()->filter(request(['category', 'search']))->get()]);
            }
        }
        
        return view('customer.shop', ['products' => Product::inRandomOrder()->filter(request(['category', 'search']))->get()]);
    }

    public function show(Product $product) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                return view('admin.product-detail', ['product' => $product]);
            }
        } 
        
        return view('customer.product-detail', ['product' => $product]);
        
    }

    public function create() {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                return view('admin.add-product');
            }
        }

        // return redirect('/');
    }

    public function store(Request $request) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                $formFields = $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'stock' => 'required',
                    'price' => 'required',
                    'category' => 'required'
                ]);

                $formFields['sold'] = 0;
        
                if ($request->hasFile('image')) {
                    $formFields['image'] = $request->file('image')->store('images', 'public');
                }
        
                Product::create($formFields);
        
                return redirect('/');
            }
        } 

        // return redirect('/');
        
    }

    public function edit(Product $product) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                return view('admin.edit-product', ['product' => $product]);
            }
        }

        // return redirect('/');
    }

    public function update(Request $request, Product $product) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                $formFields = $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'stock' => 'required',
                    'price' => 'required',
                    'category' => 'required'
                ]);
        
                if ($request->hasFile('image')) {
                    $formFields['image'] = $request->file('image')->store('images', 'public');
                }
        
                $product->update($formFields);
        
                return redirect('/products/' . $product->id);
            }
        } 
        
        // return redirect('/');
    }

    public function destroy(Product $product) {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole === 'admin') {
                $product->delete();
                return redirect('/');
            }
        }

        // return redirect('/');
    }
}
