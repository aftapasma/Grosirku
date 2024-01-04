<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Grosirku</title>
    
</head>
<body>
    <x-navigation />

    <!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('assets/images/banner-bg.jpg');">
        <div class="container">
            <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                Pilihan Terbaik Untuk <br> Kebutuhan Sehari Hari
            </h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                accusantium perspiciatis, sapiente
                magni eos dolorum ex quos dolores odio</p>
            <div class="mt-12">
                <a href="/products" class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary">Shop Now</a>
            </div>
        </div>
    </div>
    <!-- ./banner -->
    
    <!-- categories -->
    <div class="container py-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Kategori</h2>
        <div class="grid grid-cols-3 gap-3">
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/Pemanis_Rendah_Kalori_Sebagai_Pengganti_Gula_Pasir,_Amankah-halodoc.jpg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=gula"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Gula</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/055464900_1570621563-Mengungkap-Manfaat-Minyak-Goreng-untuk-Kesehatan-Tubuh-By-Tim-UR-Shutterstock.jpg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=minyak goreng"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Minyak Goreng</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/3293a392fdf51b7899a755ee85d95131.jpg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=tepung"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Tepung
                </a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/beras_1697301613.jpg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=beras"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Beras</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/mi-instan-1_169.jpeg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=mi instan"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Mi Instan</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{asset('storage/images/peanut-butter-no-bake-cookies-1.jpg')}}" alt="category 1" class="w-full">
                <a href="/products/?category=snack"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Snack</a>
            </div>
        </div>
    </div>
    <!-- ./categories -->

    <!-- Terlaris -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Terlaris</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products1 as $index => $product)
                @if ($index < 4)
                    <x-product-item :product="$product" />
                @endif
            @endforeach
        </div>
    </div>
    <!-- Terlaris -->

    <!-- rekomendasi -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Rekomendasi</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products2 as $index => $product)
                @if ($index < 4)
                    <x-product-item :product="$product" />
                @endif
            @endforeach
        </div>
    </div>
    <!-- rekomendasi -->

    <!-- features -->
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
            <div class="bg-sky-100 rounded-[20px] px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{asset('storage/images/box-tick.png')}}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Gratis Pengiriman</h4>
                </div>
            </div>
            <div class="bg-sky-100 rounded-[20px] px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{asset('storage/images/crown.png')}}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Kualitas Produk Terjamin</h4>
                </div>
            </div>
            <div class="bg-sky-100 rounded-[20px] px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{asset('storage/images/shield-security.png')}}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Terpecaya</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- ./features -->

    <!-- footer -->
    <x-footer />
    <!-- ./footer -->
</body>
</html>