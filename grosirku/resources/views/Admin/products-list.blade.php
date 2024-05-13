<x-admin-layout>
  <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
      <form action="/productList/" class="p-4">
            <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
              </div>
              <input type="search" id="default-search" name="search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Cari nama atau kategori produk" required />
              <button type="submit" class="absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
            </div>
          </form>

      
    {{-- list produk --}}
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
      <div class="inline-block min-w-full align-middle">
         <div class="overflow-hidden ">
            <table class="min-w-full divide-y divide-gray-200 table-fixe">
                  <thead class="bg-gray-100">
                     <tr>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              FOTO
                        </th>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              Nama Produk
                        </th>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              Kategori
                        </th>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              Harga
                        </th>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              Stok
                        </th>
                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                              Terjual
                        </th>
                        <th scope="col" class="p-4">
                              <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="p-4">
                          <span class="sr-only">Hapus</span>
                    </th>
                     </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-20">
                    @foreach ($products as $product)
                     <tr class="hover:bg-gray-100">  
                          <td class="p-4 w-4">
                              <div class="flex items-center">
                              <img class=" max-w-lg rounded-lg relative inline-block h-12 w-12" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="barang">
                              </div>
                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$product->name}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">{{$product->category}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">Rp {{$product->price}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$product->stock}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$product->sold}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                              <a href="/products/{{$product->id}}/edit" class="text-blue-600 hover:underline">Edit</a>
                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                          <form action="/products/{{$product->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                    
                  </tr>
                  @endforeach
                  </tbody>
            </table>
         </div>
      </div>
    </div>
  </div>
</div>
</x-admin-layout>
