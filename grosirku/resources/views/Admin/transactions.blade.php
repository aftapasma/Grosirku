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
            <th>Nama</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Edit status</th>
        </tr>
        @foreach($transactions as $transaction)
        @php
            $product = \App\Models\Product::find($transaction->product_id);
            $user = \App\Models\User::find($transaction->user_id);
            $statusOptions = ['diproses', 'dikirim'];
            $currentStatus = $transaction->status;
        @endphp
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$product->name}}</td>
            <td>{{$transaction->quantity}}</td>
            <td>{{$transaction->status}}</td>
            <td>
                <select name="status" id="status_{{$transaction->id}}" onchange="updateStatus({{$transaction->id}})">
                    @foreach ($statusOptions as $option)
                        @if ($currentStatus !== $option)
                            <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                        @endif
                    @endforeach
                </select>
                <form id="form_{{$transaction->id}}" action="/transactions/{{$transaction->id}}" method="post"
                    style="display: none;">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" id="form_status_{{$transaction->id}}">
                    <button>dikirim</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <script>
        function updateStatus(transactionId) {
            var selectElement = document.getElementById('status_' + transactionId);
            var formElement = document.getElementById('form_' + transactionId);
            var formStatusElement = document.getElementById('form_status_' + transactionId);
    
            formStatusElement.value = selectElement.value;
            formElement.submit();
        }
    </script>
</body>
</html>