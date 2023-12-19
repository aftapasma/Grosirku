<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$product->name}}</h1>
    <img src="{{$product->image ? asset('storage/' . $product->image) : 'https://picsum.photos/200/100'}}" alt="">
    <p>{{$product->description}}</p>
    <p>{{$product->price}}</p>

    <form action="/wishlistStore" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type="submit">masukkan wishlist</button>
    </form>
</body>
</html>