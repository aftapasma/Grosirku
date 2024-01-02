<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    <style>
        .wishlist-image {
            height: 5px; /* Adjust the height as needed */
        }
    </style>
</head>

<body>
    <!-- component -->
    <div class="mx-auto container px-4 md:px-6 2xl:px-0 py-12 flex justify-center items-center">
        <div class="flex flex-col justify-start items-start">
            <div>
                <a href="/">
                    <button type="button"
                        class="mb-6 w-full flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-200 transition-colors duration-200 bg-blue-500 border rounded-lg gap-x-2 sm:w-auto ">
                        <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        Beranda
                    </button>
                </a>
            </div>
            <div class="mt-3">
                <h1 class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800">
                    Wishlist</h1>
            </div>
            <div class="mt-10 lg:mt-12 grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-10 lg:gap-y-0">
                @foreach ($wishlists as $wishlist)
                    @php
                        $product = \App\Models\Product::find($wishlist->product_id);
                    @endphp
                    <div class="flex flex-col border border-gray-300 p-4 rounded-md">
                        <div class="relative mb-4">
                            <img class="w-80 h-80" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="{{$product->name}}">

                            <form action="/wishlists/{{ $wishlist->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button aria-label="close"
                                    class="top-2 right-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 absolute p-1.5 bg-gray-800 dark:bg-white dark:text-gray-800 text-white hover:text-gray-400">
                                    <svg class="fil-current" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1L1 13" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M1 1L13 13" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <h1 class="text-lg font-semibold leading-6 text-gray-800 mb-2">{{ $product->name }}</h1>
                                <p class="text-sm font-semibold leading-6 text-gray-800">{{ $product->description }}</p>
                            </div>
                            <div class="mt-4">
                                <form action="/products/{{$wishlist->product_id}}">
                                    <button class="focus:outline-none focus:ring-gray-800 focus:ring-offset-2 focus:ring-2 text-white px-4 py-2 text-lg leading-4 hover:bg-black bg-gray-800 border border-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-black">Lihat produk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
