<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        nama barang
        <br>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        deskripsi
        <br>
        <input type="text" name="description" value="{{$product->description}}">
        <br>
        stok
        <br>
        <input type="number" name="stock" value="{{$product->stock}}">
        <br>
        harga
        <br>
        <input type="number" name="price" value="{{$product->price}}">
        <br>
        kategori
        <br>
        <input type="number" name="category" value="{{$product->category}}">
        <br>
        upload gambar
        <br>
        <input type="file" name="image">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>