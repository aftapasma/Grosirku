<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page - Ecommerce Tailwind</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    {{-- navbar --}}
    <x-navigation /> 
    {{-- navbar --}}
    
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Belanja</p>
    </div>
    <!-- ./breadcrumb -->

    <!-- shop wrapper -->
    <div class="container grid md:grid-cols-4 grid-cols-2 gap-6 pt-4 pb-16 items-start">
        <!-- sidebar -->
        <!-- drawer init and toggle -->
        <div class="text-center md:hidden" >
            <button
                class="text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block md:hidden"
                type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                aria-controls="drawer-example">
                <ion-icon name="grid-outline"></ion-icon>
            </button>
        </div>

  <!-- drawer component -->
<div id="drawer-example" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">
    <h5 id="drawer-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>Info</h5>
    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
       <span class="sr-only">Close menu</span>
    </button>
    <div class="divide-y divide-gray-200 space-y-5">
        <div>
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Kategori</h3>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input type="checkbox" name="cat-1" id="cat-1"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-1" class="text-gray-600 ml-3 cusror-pointer">Semua</label>
                    <div class="ml-auto text-gray-600 text-sm">(15)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-2" id="cat-2"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-2" class="text-gray-600 ml-3 cusror-pointer">Beras</label>
                    <div class="ml-auto text-gray-600 text-sm">(9)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-3" id="cat-3"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-3" class="text-gray-600 ml-3 cusror-pointer">Gula</label>
                    <div class="ml-auto text-gray-600 text-sm">(21)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-4" id="cat-4"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-4" class="text-gray-600 ml-3 cusror-pointer">Tepung</label>
                    <div class="ml-auto text-gray-600 text-sm">(10)</div>
                </div>
            </div>
        </div>

        <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Ukuran</h3>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input type="checkbox" name="brand-1" id="brand-1"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="brand-1" class="text-gray-600 ml-3 cusror-pointer">1kg/1lt</label>
                    <div class="ml-auto text-gray-600 text-sm">(15)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="brand-2" id="brand-2"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="brand-2" class="text-gray-600 ml-3 cusror-pointer">2kg/2lt</label>
                    <div class="ml-auto text-gray-600 text-sm">(9)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="brand-3" id="brand-3"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="brand-3" class="text-gray-600 ml-3 cusror-pointer">5kg/5lt</label>
                    <div class="ml-auto text-gray-600 text-sm">(21)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="brand-4" id="brand-4"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="brand-4" class="text-gray-600 ml-3 cusror-pointer">Dus</label>
                    <div class="ml-auto text-gray-600 text-sm">(10)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="brand-5" id="brand-5"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="brand-5" class="text-gray-600 ml-3 cusror-pointer">Pcs</label>
                    <div class="ml-auto text-gray-600 text-sm">(10)</div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
       <a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn more</a>
       <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get access <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
    </div>
 </div>

        <!-- ./sidebar -->
        <div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hiddenb hidden md:block">
          <div>
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Kategori</h3>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input type="checkbox" name="cat-1" id="cat-1"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-1" class="text-gray-600 ml-3 cusror-pointer">Semua</label>
                    <div class="ml-auto text-gray-600 text-sm">(15)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-2" id="cat-2"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-2" class="text-gray-600 ml-3 cusror-pointer">Beras</label>
                    <div class="ml-auto text-gray-600 text-sm">(9)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-3" id="cat-3"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-3" class="text-gray-600 ml-3 cusror-pointer">Gula</label>
                    <div class="ml-auto text-gray-600 text-sm">(21)</div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="cat-4" id="cat-4"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-4" class="text-gray-600 ml-3 cusror-pointer">Tepung</label>
                    <div class="ml-auto text-gray-600 text-sm">(10)</div>
                </div>
            </div>
          </div>

          <div class="pt-4">
              <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Ukuran</h3>
              <div class="space-y-2">
                  <div class="flex items-center">
                      <input type="checkbox" name="brand-1" id="brand-1"
                          class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                      <label for="brand-1" class="text-gray-600 ml-3 cusror-pointer">1kg/1lt</label>
                      <div class="ml-auto text-gray-600 text-sm">(15)</div>
                  </div>
                  <div class="flex items-center">
                      <input type="checkbox" name="brand-2" id="brand-2"
                          class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                      <label for="brand-2" class="text-gray-600 ml-3 cusror-pointer">2kg/2lt</label>
                      <div class="ml-auto text-gray-600 text-sm">(9)</div>
                  </div>
                  <div class="flex items-center">
                      <input type="checkbox" name="brand-3" id="brand-3"
                          class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                      <label for="brand-3" class="text-gray-600 ml-3 cusror-pointer">5kg/5lt</label>
                      <div class="ml-auto text-gray-600 text-sm">(21)</div>
                  </div>
                  <div class="flex items-center">
                      <input type="checkbox" name="brand-4" id="brand-4"
                          class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                      <label for="brand-4" class="text-gray-600 ml-3 cusror-pointer">Dus</label>
                      <div class="ml-auto text-gray-600 text-sm">(10)</div>
                  </div>
                  <div class="flex items-center">
                      <input type="checkbox" name="brand-5" id="brand-5"
                          class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                      <label for="brand-5" class="text-gray-600 ml-3 cusror-pointer">Pcs</label>
                      <div class="ml-auto text-gray-600 text-sm">(10)</div>
                  </div>
              </div>
          </div>
        </div>
        <!-- products -->
        <div class="col-span-3">
            <div class="flex items-center mb-4">
                <select name="sort" id="sort"
                    class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option value="">Default sorting</option>
                    <option value="price-low-to-high">Harga besar ke rendah</option>
                    <option value="price-high-to-low">Harga rendah ke besar</option>
                    <option value="latest">Produk Terbaru</option>
                </select>
            </div>

            <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>

                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>

                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>

                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>

                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>

                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="lihat produk">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                title="tambah ke wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Minyak Bimoli 2 Liter</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">Rp35.000</p>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Tambah ke keranjang</a>
                </div>
            </div>
        </div>

        <!-- ./products -->
    </div>
    <!-- ./shop wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>