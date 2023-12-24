@props(['product'])

<div class="bg-white shadow rounded overflow-hidden group">
    <div class="relative">
        <img src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="{{$product->name}}" height="20px" class="w-full">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
            justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="/products/{{$product->id}}" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="lihat produk">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <div class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition" title="tambahkan ke wishlist">
            <form action="/wishlistStore" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button type="submit"><i class="fa-solid fa-heart"></i></button>
            </form>
                
                
        </div>
        </div>
    </div>
    <div class="pt-4 pb-3 px-4">
        <a href="#">
            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{$product->name}}</h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">Rp {{$product->price}}</p>
        </div>
    </div>
    <a href="#"
        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambahkan
        ke Keranjang</a>
</div>
