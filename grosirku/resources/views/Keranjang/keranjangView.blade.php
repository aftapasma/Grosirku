<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @layer utilities {

            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="h-screen bg-gray-100 pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                    @php
                    $total_price = 0;
                    @endphp
                    @foreach ($carts as $cart)
                        @php
                        $product = \App\Models\Product::find($cart->product_id);
                        $total_price += $cart->quantity * $product->price;
                        @endphp
                        <div class="mt-5 sm:mt-0">
                            <h2 class="text-lg font-bold text-gray-900">{{ $product->name }}</h2>
                            <p class="mt-1 text-xs text-gray-700">{{ $product->description }}</p>
                        </div>
                        <div class="mt-4 flex justify-between im sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <form action="{{ route('increase', ['id' => $cart->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">+</button>
                                </form>
                                {{-- <input class="h-8 w-8 border bg-white text-center text-xs outline-none"
                                    type="number" value="{{ $cart->quantity }}" min="1" /> --}}
                                    {{ $cart->quantity }}
                                <form action="{{ route('decrease', ['id' => $cart->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">-</button>
                                </form>
                                <form action="{{ route('hapusKeranjang', ['id' => $cart->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                                    <button type="submit">delete</button>
                                </form>
                            </div>
                            <div class="flex items-center space-x-4">
                                <p class="text-sm">{{$cart->quantity * $product->price}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Sub total -->
        <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
            <div class="mb-2 flex justify-between">
                <p class="text-gray-700">Subtotal</p>
                <p class="text-gray-700">{{$total_price}}</p>
            </div>
            <hr class="my-4" />
            <div class="flex justify-between">
                <p class="text-lg font-bold">Total</p>
                <div class="">
                    <p class="mb-1 text-lg font-bold">{{$total_price}}</p>
                </div>
            </div>
            <!-- Main checkout form -->
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
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600" type="submit">Check out</button>
            </form>
        </div>
    </div>
</body>
</html>
