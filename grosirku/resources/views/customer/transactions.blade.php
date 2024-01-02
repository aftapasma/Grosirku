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
<body>
    <x-navigation />
    <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white m-6">
        <div class="inline-block min-w-full align-middle">
    <table class="w-full min-w-max table-auto text-left">
        <thead>
        <tr>
           <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
              <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Produk</p>
           </th>
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
                    @if (in_array($transaction->status, ['menunggu verifikasi', 'dikirim']))
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
            @endphp
        <tr>
           <td class="p-4 border-b border-blue-gray-50">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$product->name}}</p>
           </td>
           <td class="p-4 border-b border-blue-gray-50">
              <div class="w-max">
              <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                 <span class="">{{$transaction->status}}</span>
              </div>
              </div>
           </td>
           <td class="p-4 border-b border-blue-gray-50">
              <div class="flex items-center gap-3">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">{{$transaction->quantity}}</p>
              </div>
           </td>
           <td class="p-4 border-b border-blue-gray-50">
              <div class="flex items-center gap-3">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Rp {{$transaction->total_price}}</p>
              </div>
           </td>
           <td class="p-4 border-b border-blue-gray-50">
            @if (in_array($transaction->status, ['menunggu verifikasi', 'dikirim']))
                            <form action="/transactions/{{$transaction->id}}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($transaction->status === 'menunggu verifikasi')
                                    <input type="text" name="status" style="display: none" value="dibatalkan">
                                    <div class="w-max">
                                        <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                           <span class=""><button>BATALKAN</button></span>
                                        </div>
                                    </div>
                                @elseif($transaction->status === 'dikirim')
                                    <input type="text" name="status" style="display: none" value="selesai">
                                    <div class="w-max">
                                        <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                           <span class=""><button>SELESAI</button></span>
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

    <x-footer />

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>