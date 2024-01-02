<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <style>
        #summary {
            background-color: #f6f6f6;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Keranjang</h1>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Detail</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Harga</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                @php
                $total_price = 0;
                @endphp
                @foreach ($carts as $cart)
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5"> <!-- product -->
                        @php
                        $product = \App\Models\Product::find($cart->product_id);
                        $total_price += $cart->quantity * $product->price;
                        @endphp
                        <div class="w-20">
                            <img height="20px" class="w-full" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="">
                        </div>

                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">{{ $product->name }}</span>
                            <span class="text-red-500 text-xs">{{ $product->description }}</span>
                            <form action="{{ route('hapusKeranjang', ['id' => $cart->id]) }}" method="post" class="font-semibold hover:text-red-500 text-gray-500 text-xs">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                                <button type="submit">delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <form action="{{ route('increase', ['id' => $cart->id]) }}" method="post" class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            @csrf
                            @method('PUT')
                            <button type="submit">+</button>
                        </form>

                        <p class="mx-2 border text-center w-8">{{ $cart->quantity }}</p>

                        <form action="{{ route('decrease', ['id' => $cart->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">-</button>
                        </form>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">{{ $cart->quantity * $product->price }}</span>
                    <span class="text-center w-1/5 font-semibold text-sm">{{ $cart->quantity * $product->price }}</span>
                </div>
                @endforeach
            </div>

            <div id="summary" class="w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Ringkasan pesanan</h1>

                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total harga</span>
                        <span>{{$total_price}}</span>
                    </div>
                    <form action="{{ route('pembayaran') }}" method="POST">
                        @csrf
                        @foreach ($carts as $cart)
                        @php
                        $product = \App\Models\Product::find($cart->product_id);
                        @endphp
                        <input type="hidden" name="products[{{ $cart->id }}][id]" value="{{ $product->id }}">
                        <input type="hidden" name="products[{{ $cart->id }}][name]" value="{{ $product->name }}">
                        <input type="hidden" name="products[{{ $cart->id }}][quantity]" value="{{ $cart->quantity }}">
                        <input type="hidden" name="products[{{ $cart->id }}][price]" value="{{ $product->price }}">
                        @endforeach

                        <!-- Checkout Button -->
                        <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full" type="submit">Check out</button>
                    </form>
                </div>
                <a href="/" class="flex font-semibold text-indigo-600 text-sm mt-10">

                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                    Continue Shopping
                  </a>
            </div>
        </div>
    </div>
</body>

</html>
