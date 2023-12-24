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
                <th>Status</th>
            </tr>
            @foreach($transactions as $transaction)
            @php
                $product = \App\Models\Product::find($transaction->product_id);
            @endphp
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$transaction->quantity}}</td>
                    <td>{{$transaction->status}}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>