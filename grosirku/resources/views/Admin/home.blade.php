<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grosirku-Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-600 text-slate-500">
    <x-sidenav />
    {{-- isian --}}
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="flex items-center justify-center h-24 rounded bg-blue-100 border-2 border-black">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
             </p>
          </div>
          
          <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center p-2 text-gray-50 text-xl">
            <span class="ms-3">Pesanan terbaru</span>
       </div>
       
       <!-- component -->
      <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white">
         <div class="inline-block min-w-full align-middle">
            <table class="w-full min-w-max table-auto text-left">
               <thead>
               <tr>
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">ID</p>
                  </th>
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Pelanggan</p>
                  </th>
                  <!-- <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Date</p>
                  </th> -->
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Status</p>
                  </th>
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                    <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Jumlah Produk</p>
                 </th>
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Total Harga</p>
                  </th>
                  <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                     <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70"></p>
                  </th>
               </tr>
               </thead>
               <tbody>
                 @foreach($transactions as $transaction)
                    @php
                       $product = \App\Models\Product::find($transaction->product_id);
                       $user = \App\Models\User::find($transaction->user_id);
                    @endphp
               <tr>
                  <td class="p-4 border-b border-blue-gray-50">
                     <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$user->id}}</p>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                     <div class="flex items-center gap-3">
                     <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">{{$user->name}}</p>
                     </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                     <div class="w-max">
                     <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                        <span class="">{{$transaction->status}}</span>
                     </div>
                     </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$transaction->quantity}}</p>
                 </td>
                  <td class="p-4 border-b border-blue-gray-50">
                     <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Rp {{$transaction->total_price}}</p>
                  </td>
               </tr>
               @endforeach
               </tbody>
            </table>
         </div>
      </div>

      <div class="flex items-center p-2 text-gray-50 text-xl">
         <span class="ms-3">Produk terlaris</span>
      </div>
      {{-- produk terlaris --}}
      <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
               <div class="overflow-hidden ">
                  <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                     <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 FOTO
                           </th>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 Nama Produk
                           </th>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 Kategori
                           </th>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 Harga
                           </th>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 Stok
                           </th>
                           <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                 Terjual
                           </th>
                       </th>
                        </tr>
                     </thead>
                     <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                       @foreach ($products as $index => $product)
                           @if ($index < 5)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">  
                             <td class="p-4 w-4">
                                 <div class="flex items-center">
                                 <img class=" max-w-lg rounded-lg relative inline-block h-12 w-12" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="barang">
                                 </div>
                           </td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$product->name}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$product->category}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$product->price}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$product->stock}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$product->sold}}</td>
                     </tr>
                        @endif
                     @endforeach
                     </tbody>
               </table>
               </div>
            </div>
      </div>
   </div>
</div>
       
 {{-- isian --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
