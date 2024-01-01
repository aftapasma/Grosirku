<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('app.client_key')}}"></script>
    <title>Detail pesanan</title>
</head>

<body>
    @foreach ($orders as $order)
    @php
        $user = \App\Models\User::find($order->user_id);
        $product = \App\Models\Product::find($order->product_id);
    @endphp
    <p>{{ $product->name }}</p>
    <p>{{ $order->quantity }}</p>
    @endforeach
    <p>{{ $total_price }}</p>
    <button id="pay-button">Bayar sekarang</button>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              redirectToDashboard();
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
        function redirectToDashboard() {
        // Replace '/dashboard' with the actual URL of your dashboard
        window.location.href = '/sukses';
    }
    </script>
</body>

</html>
