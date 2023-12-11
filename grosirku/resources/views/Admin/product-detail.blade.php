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
    <a href="/products/{{$product->id}}/edit"></a>
</body>
</html>