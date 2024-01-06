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
                     <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-slate-900 text-slate-300 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
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
                  <table class="min-w-full divide-y divide-gray-200 table-fixed">
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
                       </th>
                        </tr>
                     </thead>
                     <tbody class="bg-white divide-y divide-gray-200">
                       @foreach ($products as $index => $product)
                           @if ($index < 5)
                        <tr class="hover:bg-gray-100">  
                             <td class="p-4 w-4">
                                 <div class="flex items-center">
                                 <img class=" max-w-lg rounded-lg relative inline-block h-12 w-12" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="barang">
                                 </div>
                           </td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{$product->name}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap">{{$product->category}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">Rp {{$product->price}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{$product->stock}}</td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{$product->sold}}</td>
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
