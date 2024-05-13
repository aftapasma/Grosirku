<x-customer-layout>
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto  object-cover object-center" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Nama Produk</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
          <div class="flex mb-4">
          </div>
          <h2 class=" mb-2 text-sm title-font text-gray-500 tracking-widest">Deskripsi Produk</h2>
          <p class="leading-relaxed mb-6">{{$product->description}}</p>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">Rp {{$product->price}}</span>
          </div>
          <div class="lg:w-1/2 lg:py-6 mt-6 lg:mt-0">
          <form class="mt-4" action="/tambahKeranjang" method="post">
              @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <button type="submit"class="ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Masukkan Keranjang</button>
          </form>
          <br>
          <form class="" action="/wishlistStore" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button type="submit" class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4"><svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
            </svg></button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-customer-layout>