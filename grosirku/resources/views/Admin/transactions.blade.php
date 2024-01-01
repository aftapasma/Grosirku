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
    <x-sidenav />
    <table>
        <tr>
            <th>Nama</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Status</th>
            @foreach($transactions as $transaction)
                @if (in_array($transaction->status, ['menunggu verifikasi', 'diproses']))
                    <th>Edit status</th>
                    @break
                @endif
            @endforeach
        </tr>
        @foreach($transactions as $transaction)
            @php
                $product = \App\Models\Product::find($transaction->product_id);
                $user = \App\Models\User::find($transaction->user_id);
            @endphp
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$product->name}}</td>
                <td>{{$transaction->quantity}}</td>
                <td>{{$transaction->status}}</td>
                <td>
                    @if (in_array($transaction->status, ['menunggu verifikasi', 'diproses']))
                        <form action="/transactions/{{$transaction->id}}" method="post">
                            @csrf
                            @method('PUT')
                            @if ($transaction->status === 'menunggu verifikasi')
                                <input type="text" name="status" style="display: none" value="diproses">
                                <button>diproses</button>
                            @elseif($transaction->status === 'diproses')
                                <input type="text" name="status" style="display: none" value="dikirim">
                                <button>dikirim</button>
                            @endif
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>