<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('img/llamargb.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <div class="bg-gradient-to-br from-yellow-800 via-purple-600 to-yellow-500">

        <title>CondoTechLife</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @wireUiScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <!-- Meta tags, estilos y otros scripts -->
    @livewireStyles
    <style>
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1000;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .overlay {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .overlay.active, .sidebar.active {
            display: block;
        }

        .sidebar.active {
            width: 250px;
        }
    </style>

    </head>
    <body class="antialiased">
        <div class="sticky top-0 z-50">
            @livewire('navigation')
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            <div class="shadow-black  overflow-x-hidden overflow-y-auto bg-zinc-800">
                {{-- <div class="max-w-7xl mx-auto p-6 lg:p-8"> --}}
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @include('livewire.footer')
        @stack('modals')
        @livewireScripts

        <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Incluir el contenido del carrito -->
        @include('carrito')
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="closeNav()"></div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").classList.add("active");
            document.getElementById("overlay").classList.add("active");
        }

        function closeNav() {
            document.getElementById("mySidebar").classList.remove("active");
            document.getElementById("overlay").classList.remove("active");
        }
    </script>

    </body>
</html>
