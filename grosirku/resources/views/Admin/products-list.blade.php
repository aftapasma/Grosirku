<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-600 text-slate-500">
  <x-sidenav />
  <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
      <form class="p-4">
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Your Email</label>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100  " type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Beras</button>
                </li>
                
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 
                border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Produk" required>
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Cari</span>
                </button>
            </div>
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
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$product->price}}</td>
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
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
