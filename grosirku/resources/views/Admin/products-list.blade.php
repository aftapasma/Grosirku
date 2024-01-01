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
<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="mt-10 grid grid-cols-2 gap-6 sm:grid-cols-4 sm:gap-4 lg:mt-16">
        @foreach ($products as $product)
        <article class="relative flex flex-col overflow-hidden rounded-lg border">
          <div class="aspect-square overflow-hidden">
            <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125" src="{{$product->image ? asset('storage/' . $product->image) : 'https://picsum.photos/200/100'}}" alt="">
          </div>
          <div class="my-4 mx-auto flex w-10/12 flex-col items-start justify-between">
            <div class="mb-2 flex">
              <p class="mr-3 text-sm font-semibold">{{$product->price}}</p>
            </div>
            <h3 class="mb-2 text-sm text-gray-400">{{$product->name}}</h3>
          </div>
          {{-- <button class="group mx-auto mb-2 flex h-10 w-10/12 items-stretch overflow-hidden rounded-md text-gray-600">
            <div class="flex w-full items-center justify-center bg-gray-100 text-xs uppercase transition group-hover:bg-emerald-600 group-hover:text-white">Add</div>
            {{-- <div class="flex items-center justify-center bg-gray-200 px-5 transition group-hover:bg-emerald-500 group-hover:text-white">+</div> --}}
          {{-- </button> --}}
        </article>
        {{-- <x-product-card :product="$product" /> --}}
    <a href="/products/{{$product->id}}/edit">edit</a>

        <form action="/products/{{$product->id}}" method="post">
          @csrf
          @method('DELETE')
          <button>delete</button>
      </form>
    @endforeach
    </div>
  </div>

  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
