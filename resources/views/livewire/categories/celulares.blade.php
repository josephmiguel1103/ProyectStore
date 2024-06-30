<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CondoTechLife</title>
    <link rel="icon" type="image/png" href="{{ asset('img/llamargb.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Additional scripts and styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Livewire styles and scripts -->
    @livewireStyles
    @livewireScripts
</head>
<body class="antialiased">
    <div class="sticky top-0 z-50">
        <nav class="bg-gradient-to-br from-yellow-800 via-purple-700 to-yellow-500">
            <div class="container mx-auto px-4 py-2 flex items-center justify-between">
              <div class="flex items-center space-x-4">
                <a href="#" class="text-2xl font-bold text-white dark:text-white" onclick="location.reload();">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="150" height="150">
                </a>
                {{-- @livewire('category-livewire') --}}
                <div class="relative">
                    <input type="text" placeholder="Buscar..." class="rounded-full pl-4 pr-10 py-2 bg-zinc-100 dark:bg-zinc-700 text-white dark:text-white focus:outline-none">
                    <button class="absolute right-0 top-0 mt-2 mr-2 bg-purple-600 text-white rounded-full p-2">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z" />
                        </svg>
                    </button>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                  @if (Route::has('login'))

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

                                  @endif

                {{-- <a href="/login" class="flex items-center text-white dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                  <span class="ml-1">Entrar</span>
                </a> --}}
                <a href="#" class="flex items-center text-white dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                  <span class="ml-1">Favoritos</span>
                </a>
                <a href="{{url('carrito')}}" class="flex items-center text-yellow-300 dark:text-white hover:scale-110 transition duration-300 ease-in-out">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:stroke-white hover:stroke-width-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                  </svg>

                  <span class="ml-1">0</span>
                </a>
              </div>
            </div>
            <div class="bg-gradient-to-br from-gray-900 to-gray-500">
              <div class="container mx-auto px-4 py-2 flex space-x-4 text-white dark:text-white">
                <a href="{{url('/')}}" class="relative inline-block hover:text-yellow-300 ">
                  Comprar todo
                </a>
                <a href="{{url('computadoras')}}" class="relative inline-block hover:text-yellow-300">Computadoras</a>
                <a href="{{url('tabletas')}}" class="relative inline-block hover:text-yellow-300 ">Tabletas</a>
                <a href="{{url('drones_camaras')}}" class="relative inline-block hover:text-yellow-300 ">Drones y cámaras</a>
                <a href="{{url('audio')}}" class="relative inline-block hover:text-yellow-300">Audio</a>
                <a href="{{url('celulares')}}" class="relative inline-block text-yellow-400 "><b>Celulares</b>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-white transform translate-y-2"></div></a>
                <a href="{{url('tvcine')}}" class="relative inline-block hover:text-yellow-300 ">T.V. y cine en casa</a>
                <a href="{{url('portatiles')}}" class="relative inline-block hover:text-yellow-300 ">Tecnología portátil</a>
                <a href="{{ url('audifonos') }}" class="relative inline-block hover:text-yellow-300  ">Audifonos</a>
            <a href="{{ url('accesorios') }}" class="relative inline-block hover:text-yellow-300  ">Accesorios</a>
                <a href="{{url('ofertas')}}" class="relative inline-block hover:text-yellow-300 ">Oferta</a>
              </div>
            </div>
          </nav>
    </div>

    <div class="p-6 text-white bg-zinc-800">
        <h2 class="text-2xl font-bold text-center mb-6 dark:text-white">Computadoras</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
            <div class="border rounded-lg p-4 bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/1.jpg" alt="Fitboot fitness con seguimiento del ritmo cardíaco" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">Fitboot fitness con seguimiento del ritmo cardíaco</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4 bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/2.jpg" alt="JP Laptop para juegos de 15.6'' de 256GB" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">JP Laptop para juegos de 15.6'' de 256GB</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4 bg-purple-100">
                <img src="img/3.jpg" alt="HKI Tech drone cuadricóptero con cámara y mando 360" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">HKI Tech drone cuadricóptero con cámara y mando 360</p>
                <p class="text-purple-500">$999.00</p>
            </div>
            <div class="border rounded-lg p-4 bg-purple-100">
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                <img src="img/4.jpg" alt="Smartphone Z Pixel Max 128GB desbloqueado" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">Smartphone Z Pixel Max 128GB desbloqueado</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4 bg-purple-100">
                <img src="img/5.jpg" alt="Audífonos inalámbricos con cancelación del ruido" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">Audífonos inalámbricos con cancelación del ruido</p>
                <p class="text-red-500 line-through">$999.00</p>
                <p class="text-purple-500">$984.00</p>
            </div>
            <div class="border rounded-lg p-4 bg-purple-100">
                <img src="img/5.jpg" alt="Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles" class="w-full h-48 object-contain my-4">
                <p class="text-zinc-700 dark:text-zinc-300">Gafas de realidad virtual Safay GEN 2 de 256 GB con mandos táctiles</p>
                <p class="text-purple-500">$999.00</p>
            </div>
        </div>
        <div class="text-center mt-6">
            <button class="bg-purple-500 text-white hover:text-yellow-400 py-2 px-4 rounded-full">Ver todo</button>
        </div>
    </div>


    @stack('modals')
    @include('livewire.footer')
</body>
</html>
