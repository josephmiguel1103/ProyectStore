<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
<<<<<<< HEAD
    <div class="bg-gradient-to-br from-gray-500 to-purple-700">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
</head>

<body>
    <nav class="bg-purple-700 shadow-md">
        <div class="container mx-auto px-4 py-2 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="#" class="text-2xl font-bold text-white">Azcuña Technologies</a>
                {{-- @livewire('category-livewire') --}}
                <div class="relative">
                    <input type="text" placeholder="Buscar..."
                        class="rounded-full pl-4 pr-10 py-2 bg-zinc-100 text-white focus:outline-none">
                    <button class="absolute right-0 top-0 mt-2 mr-2 bg-purple-600 text-white rounded-full p-2">
                        <svg xmlns="#" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif


                {{-- <a href="/login" class="flex items-center text-white">
=======
    <div class="bg-gradient-to-br from-yellow-800 via-purple-600 to-yellow-500">
  </head>
  <body>
    <nav class="bg-gradient-to-br from-yellow-800 via-purple-700 to-yellow-500">
  <div class="container mx-auto px-4 py-2 flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <a href="#" class="text-2xl font-bold text-white dark:text-white">CONDO Technologies</a>
      {{-- @livewire('category-livewire') --}}
      <div class="relative">
        <input type="text" placeholder="Buscar..." class="rounded-full pl-4 pr-10 py-2 bg-zinc-100 dark:bg-zinc-700 text-white dark:text-white focus:outline-none">
        <button class="absolute right-0 top-0 mt-2 mr-2 bg-purple-600 text-white rounded-full p-2">
          <svg xmlns="#" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="flex items-center space-x-4">
        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-yellow-400 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-yellow-400 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        <b>Login</b>
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-yellow-400 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            <b>Register</b>
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
      {{-- <a href="/login" class="flex items-center text-white dark:text-white">
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
        <span class="ml-1">Entrar</span>
      </a> --}}
                <a href="#" class="flex items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <span class="ml-1">Favoritos</span>
                </a>
                <a href="#" class="flex items-center text-yellow-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>

<<<<<<< HEAD
                    <span class="ml-1">0</span>
                </a>
=======
        <span class="ml-1">0</span>
      </a>
    </div>
  </div>
  <div class="bg-gradient-to-br from-gray-900 to-gray-500">
    <div class="container mx-auto px-4 py-2 flex space-x-4 text-white dark:text-white">
      <a href="#" class="relative inline-block text-yellow-400 hover:text-white hover:underline">
        <b>Comprar todo</b>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-white transform translate-y-2"></div>
      </a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Computadoras</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Tabletas</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Drones y cámaras</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Audio</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Celulares</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">T.V. y cine en casa</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Tecnología portátil</a>
      <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Oferta</a>
    </div>
  </div>


</nav>

{{-- Carrousel --}}
<div class="w-full mx-auto">
    <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative w-full h-80 sm:h-96 xl:h-[30rem] 2xl:h-[40rem] rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/car2.jpeg" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/car3.jpg" class="block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/car2.jpeg" class="block w-full h-full object-cover" alt="...">
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
            </div>
        </div>
        <div class="bg-gradient-to-br from-gray-600 to-gray-500">
            <div class="container mx-auto px-4 py-2 flex space-x-4 text-white">
                <a href="#" class="relative inline-block text-yellow-400 hover:text-white hover:underline">
                    <b>Comprar todo</b>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-white transform translate-y-2"></div>
                </a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Computadoras</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Tabletas</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Drones y
                    cámaras</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Audio</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Celulares</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">T.V. y cine en
                    casa</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Tecnología
                    portátil</a>
                <a href="#" class="relative inline-block hover:text-yellow-300 hover:underline">Oferta</a>
            </div>
        </div>
<<<<<<< HEAD


    </nav>

    {{-- Carrousel --}}
    <div class="w-full mx-auto">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative w-full h-80 sm:h-96 xl:h-[30rem] 2xl:h-[40rem] rounded-lg">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    {{-- <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl">First Slide</span> --}}
                    <img src="img/car2.jpeg" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/car3.jpg" class="block w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/car2.jpeg" class="block w-full h-full object-cover" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>

    </div>
    {{-- Fin Carrousel --}}

    {{-- Publicidad --}}
    <div class="flex flex-col md:flex-row items-center bg-white p-6 shadow-lg">
        <div class="md:w-1/2 text-center md:text-left">
            <div class="bg-red-500 text-white inline-block px-3 py-1 rounded-full text-sm mb-4">Mejores precios</div>
            <h1 class="text-3xl md:text-4xl font-bold text-zinc-900 mb-4">Súper precios en tus artículos favoritos</h1>
            <p class="text-zinc-600 mb-6">Gana más por tu dinero</p>
            <button class="bg-purple-600 text-white px-6 py-3 rounded-full text-lg">Comprar ahora</button>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0 ">
            <video src="vid/vid1.mp4" class="rounded-lg shadow-lg" autoplay muted loop></video>
            <!-- <img src="img/car1.jpg" alt="Promotional Image" class="rounded-lg shadow-lg"> -->
        </div>
=======
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const nextButton = document.querySelector('[data-carousel-next]');

    function clickNextButton() {
        nextButton.click();
    }

    setInterval(clickNextButton, 4000);
});
</script>

{{-- Fin Carrousel --}}

{{-- Publicidad --}}
      <div class="flex flex-col md:flex-row items-center bg-zinc-900 dark:bg-zinc-900 p-6 shadow-lg">
    <div class="md:w-1/2 text-center md:text-left">
      <div class="bg-red-500 text-white inline-block px-3 py-1 rounded-full text-sm mb-4">Mejores precios</div>
      <h1 class="text-3xl md:text-4xl font-bold text-white dark:text-white mb-4">Súper precios en tus artículos favoritos</h1>
      <p class="text-zinc-100 dark:text-zinc-300 mb-6">Gana más por tu dinero</p>
      <button class="bg-purple-600 text-white px-6 py-3 rounded-full text-lg">Comprar ahora</button>
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
    </div>



<<<<<<< HEAD
    <div class="bg-zinc-900 p-6 text-white">
        <h2 class="text-2xl font-bold text-center mb-6">Más vendidos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
            <div class="border rounded-lg p-4  bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/1.jpg" alt="Fitboot fitness con seguimiento del ritmo cardíaco"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">Fitboot fitness con seguimiento del ritmo cardíaco</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4  bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/2.jpg" alt="JP Laptop para juegos de 15.6'' de 256GB"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">JP Laptop para juegos de 15.6'' de 256GB</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4  bg-purple-100">
                <img src="img/3.jpg" alt="HKI Tech drone cuadricóptero con cámara y mando 360"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">HKI Tech drone cuadricóptero con cámara y mando 360</p>
                <p class="text-purple-500">$999.00</p>
            </div>
            <div class="border rounded-lg p-4  bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/4.jpg" alt="Smartphone Z Pixel Max 128GB desbloqueado"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">Smartphone Z Pixel Max 128GB desbloqueado</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4  bg-purple-100">
                <img src="img/5.jpg" alt="Audífonos inalámbricos con cancelación del ruido"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">Audífonos inalámbricos con cancelación del ruido</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4  bg-purple-100">
                <img src="img/5.jpg" alt="Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles"
                    class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700">Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles</p>
                <p class="text-purple-500">$999.00</p>
            </div>
        </div>
        <div class="text-center mt-6">
            <button class="bg-purple-500 text-white py-2 px-4 rounded-full">Ver todo</button>
        </div>
    </div>
=======
    <div class="p-6 text-white">
  <h2 class="text-2xl font-bold text-center mb-6 dark:text-white">Más vendidos</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
    <div class="border rounded-lg p-4  bg-purple-100">
      <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
      <img src="img/1.jpg" alt="Fitboot fitness con seguimiento del ritmo cardíaco" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">Fitboot fitness con seguimiento del ritmo cardíaco</p>
      <p class="text-red-500 line-through">$999.00</p>
      <p class="text-purple-500">$984.00</p>
    </div>
    <div class="border rounded-lg p-4  bg-purple-100">
      <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
      <img src="img/2.jpg" alt="JP Laptop para juegos de 15.6'' de 256GB" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">JP Laptop para juegos de 15.6'' de 256GB</p>
      <p class="text-red-500 line-through">$999.00</p>
      <p class="text-purple-500">$984.00</p>
    </div>
    <div class="border rounded-lg p-4  bg-purple-100">
      <img src="img/3.jpg" alt="HKI Tech drone cuadricóptero con cámara y mando 360" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">HKI Tech drone cuadricóptero con cámara y mando 360</p>
      <p class="text-purple-500">$999.00</p>
    </div>
    <div class="border rounded-lg p-4  bg-purple-100">
      <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
      <img src="img/4.jpg" alt="Smartphone Z Pixel Max 128GB desbloqueado" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">Smartphone Z Pixel Max 128GB desbloqueado</p>
      <p class="text-red-500 line-through">$999.00</p>
      <p class="text-purple-500">$984.00</p>
    </div>
    <div class="border rounded-lg p-4  bg-purple-100">
      <img src="img/5.jpg" alt="Audífonos inalámbricos con cancelación del ruido" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">Audífonos inalámbricos con cancelación del ruido</p>
      <p class="text-red-500 line-through">$999.00</p>
      <p class="text-purple-500">$984.00</p>
    </div>
    <div class="border rounded-lg p-4  bg-purple-100">
      <img src="img/5.jpg" alt="Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles" class="w-full h-48 object-contain my-4">
      <p class="text-zinc-700 dark:text-zinc-300">Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles</p>
      <p class="text-purple-500">$999.00</p>
    </div>
  </div>
  <div class="text-center mt-6">
    <button class="bg-purple-500 text-white hover:text-yellow-400 py-2 px-4 rounded-full">Ver todo</button>
  </div>
</div>
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140



    {{-- Categorias --}}
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/2.jpg" alt="Computadoras" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Computadoras</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/4.jpg" alt="Celulares" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Celulares</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/3.jpg" alt="Drones y cámaras" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Drones y cámaras</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-purple-500 flex items-center justify-center">
                    <img src="img/1.jpg" alt="Oferta" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Oferta</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/4.jpg" alt="Tabletas" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Tabletas</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-black flex items-center justify-center">
                    <img src="img/5.jpg" alt="Más vendidos" class="rounded-full" />
                </div>
                <p class="mt-2 text-center text-white">Más vendidos</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">T.V. y cine en casa</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/2.jpg" alt="Tecnología portátil" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Tecnología portátil</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/5.jpg" alt="Bocinas" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Bocinas</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
                    <img src="img/6.jpg" alt="Audífonos" class="rounded-full" />
                </div>
                <p class="mt-2 text-center">Audífonos</p>
            </div>
        </div>
<<<<<<< HEAD
=======
        <p class="mt-2 text-center text-white">Computadoras</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/4.jpg" alt="Celulares" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Celulares</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/3.jpg" alt="Drones y cámaras" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Drones y cámaras</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-purple-500 flex items-center justify-center">
          <img src="img/1.jpg" alt="Oferta" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Oferta</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/4.jpg" alt="Tabletas" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Tabletas</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-black flex items-center justify-center">
        <img src="img/5.jpg" alt="Más vendidos" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Más vendidos</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">T.V. y cine en casa</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/2.jpg" alt="Tecnología portátil" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Tecnología portátil</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/5.jpg" alt="Bocinas" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Bocinas</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center">
          <img src="img/6.jpg" alt="Audífonos" class="rounded-full" />
        </div>
        <p class="mt-2 text-center text-white">Audífonos</p>
      </div>
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
    </div>

<<<<<<< HEAD
    {{-- Mesa d ayuda --}}
    <div class="flex flex-col md:flex-row items-center bg-zinc-900 text-white">
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold mb-4">¿Buscas ayuda? Ve a la página de Ayuda</h2>
            <p class="mb-6">
                Párrafo. Haz clic aquí para agregar tu texto y editar. Permite que tus usuarios te conozcan.
            </p>
            <a href="#" class="bg-purple-600 text-white py-2 px-4 rounded-full">Ir al Centro de ayuda</a>
        </div>
        <div class="md:w-1/2">
            <img src="img/tecnologia.jpg" alt="Help Center Image" class="w-full h-auto object-cover" />
=======
{{-- Mesaz de ayuda --}}
<div class="flex flex-col md:flex-row items-center bg-zinc-900 text-white">
    <div class="p-8 md:w-1/2">
      <h2 class="text-2xl font-bold mb-4">¿Buscas ayuda? Ve a la página de Ayuda</h2>
      <p class="mb-6">
        Párrafo. Haz clic aquí para agregar tu texto y editar. Permite que tus usuarios te conozcan.
      </p>
      <a href="#" class="bg-purple-600 text-white py-2 px-4 rounded-full">Ir al Centro de ayuda</a>
    </div>
    <div class="md:w-1/2">
      <img
        src="img/tecnologia.jpg"
        alt="Help Center Image"
        class="w-full h-auto object-cover"
      />
    </div>
  </div>

  {{-- Footer --}}
  <div class="bg-zinc-100 dark:bg-zinc-800 text-white dark:text-zinc-300 p-8 bg-gradient-to-br from-purple-900 to-purple-800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <h3 class="font-semibold mb-4">Ubicación de tienda</h3>
        <p>Av. Fray A. Alcalde 10<br />44100, Guada., Jal., México</p>
        <p>info@mistio.com<br />+52-1-33-12345678</p>
        <div class="flex space-x-4 mt-4">
          <a href="#"><img src="https://placehold.co/20x20" alt="Facebook" /></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="Instagram" /></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="Twitter" /></a>
          <a href="#"><img src="https://placehold.co/20x20" alt="YouTube" /></a>
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
        </div>
    </div>

    {{-- Footer --}}
    <div class="bg-zinc-100 text-white p-8 bg-gradient-to-br from-purple-900 to-purple-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold mb-4">Ubicación de tienda</h3>
                <p>Av. Fray A. Alcalde 10<br />44100, Guada., Jal., México</p>
                <p>info@mistio.com<br />+52-1-33-12345678</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#"><img src="https://placehold.co/20x20" alt="Facebook" /></a>
                    <a href="#"><img src="https://placehold.co/20x20" alt="Instagram" /></a>
                    <a href="#"><img src="https://placehold.co/20x20" alt="Twitter" /></a>
                    <a href="#"><img src="https://placehold.co/20x20" alt="YouTube" /></a>
                </div>
            </div>
            <div>
                <h3 class="font-semibold mb-4">Tienda</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Comprar todo</a></li>
                    <li><a href="#" class="hover:underline">Computadoras</a></li>
                    <li><a href="#" class="hover:underline">Tabletas</a></li>
                    <li><a href="#" class="hover:underline">Drones y cámaras</a></li>
                    <li><a href="#" class="hover:underline">Audio</a></li>
                    <li><a href="#" class="hover:underline">Celulares</a></li>
                    <li><a href="#" class="hover:underline">T.V. y cine en casa</a></li>
                    <li><a href="#" class="hover:underline">Tecnología portátil</a></li>
                    <li><a href="#" class="hover:underline">Oferta</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-4">Atención al cliente</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Contáctanos</a></li>
                    <li><a href="#" class="hover:underline">Asistencia</a></li>
                    <li><a href="#" class="hover:underline">Acerca de</a></li>
                    <li><a href="#" class="hover:underline">Empleos</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-4">Política</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Envío y devoluciones</a></li>
                    <li><a href="#" class="hover:underline">Términos y condiciones</a></li>
                    <li><a href="#" class="hover:underline">Métodos de pago</a></li>
                    <li><a href="#" class="hover:underline">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-zinc-300 mt-8 pt-8 text-center">
            <p class="mb-4">Aceptamos los siguientes métodos de pago</p>
            <div class="flex justify-center space-x-4 mb-4">
                <img src="https://placehold.co/40x20" alt="Visa" />
                <img src="https://placehold.co/40x20" alt="Mastercard" />
                <img src="https://placehold.co/40x20" alt="American Express" />
                <img src="https://placehold.co/40x20" alt="Discover" />
                <img src="https://placehold.co/40x20" alt="PayPal" />
            </div>
            <p class="text-sm">
                &copy; 2035 Creado por NovoTec con
                <a href="https://wix.com" class="hover:underline">Wix.com</a>
            </p>
        </div>
    </div>


</body>

</html>
