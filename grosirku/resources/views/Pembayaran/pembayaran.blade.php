<x-customer-layout>
    <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32 py-12">
        <div class="px-4 pt-8">
            <a href="/keranjang">
            <button type="button" class="mb-6 w-full flex items-center justify-center px-5 py-2 text-sm text-gray-200 transition-colors duration-200 bg-blue-500 border rounded-lg gap-x-2 sm:w-auto ">
                <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                Kembali
            </button>
            </a>
            <p class="text-xl font-medium">Order Summary</p>
            <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
            <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                @foreach ($orders as $order)
                    @php
                        $user = \App\Models\User::find($order->user_id);
                        $product = \App\Models\Product::find($order->product_id);
                    @endphp
                    <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="{{$product->image ? asset('storage/' . $product->image) : asset('storage/images/logo_grosirku.png')}}" alt="">
                        <div class="flex w-full flex-col px-4 py-4">
                            <span class="font-semibold">{{ $product->name }}</span>
                            <span class="float-right text-gray-400">{{ $order->quantity }} pcs</span>
                            <p class="text-lg font-bold">Rp{{ $order->quantity * $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
            <p class="text-xl font-medium">Payment Details</p>
            <p class="text-gray-400">Complete your order by providing your payment details.</p>

            <!-- Total -->
            <div class="mt-6 border-t border-b py-2">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Subtotal</p>
                    <p class="font-semibold text-gray-900">Rp{{ $total_price }}</p>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">Rp{{ $total_price }}</p>
            </div>
            <button class="mt-4 mb-8 w-full rounded-md bg-blue-600 px-6 py-3 font-medium text-white" id="pay-button">Bayar sekarang</button>
        </div>

    </div>
</x-customer-layout>
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
