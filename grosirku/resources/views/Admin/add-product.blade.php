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
    <form action="/productStore" method="post" enctype="multipart/form-data">
        @csrf
        nama barang
        <br>
        <input type="text" name="name" id="">
        <br>
        deskripsi
        <br>
        <input type="text" name="description" id="">
        <br>
        stok
        <br>
        <input type="number" name="stock" id="">
        <br>
        harga
        <br>
        <input type="number" name="price" id="">
        <br>
        kategori
        <br>
        <input type="number" name="category" id="">
        <br>
        upload gambar
        <br>
        <input type="file" name="image" id="">
        <br>
        <button type="submit">submit</button>
    </form>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>