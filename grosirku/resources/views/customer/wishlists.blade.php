<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($wishlists as $wishlist)
    @php
        $product = \App\Models\Product::find($wishlist->product_id);
    @endphp

    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>

    <form action="/wishlists/{{ $wishlist->id }}" method="post">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
@endforeach

    
</body>
</html>