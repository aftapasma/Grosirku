<x-customer-layout>
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="/" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Belanja</p>
    </div>
    <!-- ./breadcrumb -->
    
    <div class="container pb-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                    <x-product-item :product="$product" />
            @endforeach
        </div>
    </div>
</x-customer-layout>