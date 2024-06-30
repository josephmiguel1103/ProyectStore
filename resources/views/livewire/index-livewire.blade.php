<x-index-layout>
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
                    <img src="img/car1.jpg" class="block w-full h-full object-cover" alt="...">
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
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nextButton = document.querySelector('[data-carousel-next]');

            function clickNextButton() {
                nextButton.click();
            }

            setInterval(clickNextButton, 4000);
        });
    </script>

    {{-- Fin Carrousel --}}

    {{-- Publicidad --}}
    <div
        class="flex flex-col md:flex-row items-center bg-zinc-900 dark:bg-zinc-900 p-6 shadow-xl shadow-purple-500 shadow-opacity-75">
        <div class="md:w-1/2 text-center md:text-left">
            <div class="bg-red-500 text-white inline-block px-3 py-1 rounded-full text-sm mb-4">Mejores precios</div>
            <h1 class="text-3xl md:text-4xl font-bold text-white dark:text-white mb-4">Súper precios en tus artículos
                favoritos</h1>
            <p class="text-zinc-100 dark:text-zinc-300 mb-6">Gana más por tu dinero</p>
            <button class="bg-purple-600 text-white px-6 py-3 rounded-full text-lg">Comprar ahora</button>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0 ">
            <video src="vid/vid1.mp4" class="rounded-lg shadow-lg" autoplay muted loop></video>
            <!-- <img src="img/car1.jpg" alt="Promotional Image" class="rounded-lg shadow-lg"> -->
        </div>
    </div>



    <div class="p-6 text-white">
        <h2 class="text-2xl font-bold text-center mb-6 dark:text-white">Productos recientes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
            @foreach ($products as $product)
                <div class="border rounded-lg p-4  bg-purple-100 shadow-xl shadow-purple-300 shadow-opacity-75">
                    <span class="bg-red-500 text-white px-2 py-1 text-xs font-bold">OFERTA</span>
                    <img src="{{ Storage::url($product->image->url) }}" alt=""
                    class="w-full h-48 object-contain my-4">
                    <p class="text-zinc-700 dark:text-zinc-300">{{ $product->description }}</p>
                    <p class="text-red-500 line-through">{{ $product->price }}</p>
                    <p class="text-purple-500">$984.00</p>
                    <button wire:click="$emit('addToCart', {{ $product->id }})" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 px-8 py-3 text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">Agregar al Carrito</button>
                </div>
            @endforeach

        </div>
        <div class="text-center mt-6">
            <a href="{{ url('vermas') }}">
                <button class="bg-purple-500 text-white hover:text-yellow-400 py-2 px-4 rounded-full">Ver Más</button>
            </a>
        </div>
    </div>



    {{-- Categorias --}}
    <div class="container mx-auto py-8 text-white">
        <h2 class="text-2xl font-bold text-center mb-6 dark:text-white">Elije tu Categoria</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="flex flex-col items-center">
                <a href="{{ url('computadoras') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/2.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Computadoras</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('celulares') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Celulares</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('drones_camaras') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Drones y Camaras</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('ofertas') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Oferta</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('tabletas') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Tabletas</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('tvcine') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">T.V. y cine en casa</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('portatiles') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Tecnología Portatil</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('audio') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Bocinas</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('audifonos') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/6.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Audifonos</p>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('accesorios') }}" class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full bg-zinc-200 flex items-center justify-center border-4 border-transparent hover:border-yellow-500">
                        <img src="img/4.jpg" alt="T.V. y cine en casa" class="rounded-full transition-opacity duration-100 hover:opacity-85" />
                    </div>
                    <p class="mt-2 text-center text-white hover:text-yellow-500">Accesorios</p>
                </a>
            </div>
        </div>
    </div>

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
            <img src="img/tecnologia.jpg" alt="Help Center Image" class="w-full h-auto object-cover" />
        </div>
    </div>


</x-index-layout>
