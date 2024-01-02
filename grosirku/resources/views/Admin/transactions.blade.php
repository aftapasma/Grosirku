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
                <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
                <div class="relative">
                  <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                  </div>
                  <input type="search" id="default-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Cari pelanggan" required />
                  <button type="submit" class="absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                </div>
              </form>
              
            {{-- list transaksi --}}
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
                         @foreach($transactions as $transaction)
                           @if (in_array($transaction->status, ['menunggu verifikasi', 'diproses']))
                           <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                              <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Aksi</p>
                           </th>
                              @break
                           @endif
                        @endforeach
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
                         <td class="p-4 border-b border-blue-gray-50">
                           @if (in_array($transaction->status, ['menunggu verifikasi', 'diproses']))
                           <form action="/transactions/{{$transaction->id}}" method="post">
                               @csrf
                               @method('PUT')
                               @if ($transaction->status === 'menunggu verifikasi')
                                   <input type="text" name="status" style="display: none" value="diproses">
                                   <div class="w-max">
                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                       <span class=""><button>diproses</button></span>
                                    </div>
                                    </div>
                               @elseif($transaction->status === 'diproses')
                                   <input type="text" name="status" style="display: none" value="dikirim">
                                   <div class="w-max">
                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                       <span class=""><button>dikirim</button></span>
                                    </div>
                                    </div>
                               @endif
                           </form>
                       @endif
                         </td>
                      </tr>
                      @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>