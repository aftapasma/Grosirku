@props(['product'])

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
    <button class="group mx-auto mb-2 flex h-10 w-10/12 items-stretch overflow-hidden rounded-md text-gray-600">
      <div class="flex w-full items-center justify-center bg-gray-100 text-xs uppercase transition group-hover:bg-emerald-600 group-hover:text-white">Add</div>
      <div class="flex items-center justify-center bg-gray-200 px-5 transition group-hover:bg-emerald-500 group-hover:text-white">+</div>
    </button>
  </article>