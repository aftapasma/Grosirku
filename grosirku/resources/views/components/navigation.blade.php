<div class="">
    <header class="py-4 shadow-sm bg-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('storage/images/logo_grosirku.png')}}" class="h-12 lg:h-24 ml-6" alt="Grosirku Logo" />
            </a>
            <div class="overflow-hidden z-0 rounded-full relative p-3">
                <form action="/products/" role="form" class="relative flex z-50 ">
                    <input type="text" name="search" placeholder="enter your search here" class="rounded-full flex-1 px-6 py-4 text-gray-700 focus:outline-none" />
                    <button class="bg-indigo-500 text-white rounded-full font-semibold px-8 py-4 hover:bg-indigo-400 focus:bg-indigo-600 focus:outline-none">Search</button>
                </form>
                <div class="glow glow-1 z-10 animate-glow1 bg-pink-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute"></div>
                <div class="glow glow-2 z-20 animate-glow2 bg-purple-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute"></div>
                <div class="glow glow-3 z-30 animate-glow3 bg-yellow-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute"></div>
                <div class="glow glow-4 z-40 animate-glow4 bg-blue-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute"></div>
            </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                <a href="/wishlists" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wishlist</div>
                </a>
                </li>
                <li>
                <a href="/keranjang" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="text-xs leading-3">Keranjang</div>
                </a>
                </li>
                <a href="/transactions" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-book-bookmark"></i>
                    </div>
                    <div class="text-xs leading-3">History belanja</div>
                </a>
                <li>
                @auth
            </a>
            <li>
            <a href="#" class="text-center text-gray-700">
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown width="48">
                        <x-slot name="trigger">
                            <button class="px-3 py-2 inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 mr-6">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
            </a>
            </li>
            @else
                <a href="/login" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="mr-6">
                        <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Masuk</div>
                    </div>
                    
                </a>
                @endauth
                </ul>
            </div>
        </div>
    </header> 

    <nav class="bg-blue-800 shadow-xl">
        <div class="container flex">
            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="/" class="text-gray-200 hover:text-white transition">Beranda</a>
                    <a href="/products" class="text-gray-200 hover:text-white transition">Belanja</a>
                </div>
            </div>
        </div>
    </nav>
</div>