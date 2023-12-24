<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
            <tr>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Status</th>
                @foreach($transactions as $transaction)
                    @if (in_array($transaction->status, ['menunggu verifikasi', 'dikirim']))
                        <th>Aksi</th>
                        @break
                    @endif
                @endforeach
            </tr>
            @foreach($transactions as $transaction)
            @php
                $product = \App\Models\Product::find($transaction->product_id);
            @endphp
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$transaction->quantity}}</td>
                    <th>{{$transaction->total_price}}</th>
                    <td>{{$transaction->status}}</td>
                    <td>
                        @if (in_array($transaction->status, ['menunggu verifikasi', 'dikirim']))
                            <form action="/transactions/{{$transaction->id}}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($transaction->status === 'menunggu verifikasi')
                                    <input type="text" name="status" style="display: none" value="dibatalkan">
                                    <button>batalkan</button>
                                @elseif($transaction->status === 'dikirim')
                                    <input type="text" name="status" style="display: none" value="selesai">
                                    <button>selesai</button>
                                @endif
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
    </table>
</body>
</html>