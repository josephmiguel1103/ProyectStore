<div class="fixed top-0 right-0 w-1/4 h-full bg-gray-800 text-white shadow-lg p-4">
    <h2 class="text-xl font-bold text-white mb-4">Carrito de Compras</h2>
    <ul class="text-white">
        @foreach($cartItems as $item)
            <li class="mb-4 flex items-center">
                <img src="{{ Storage::url($item['image']) }}" alt="" class="w-12 h-12 object-cover mr-4">
                <div>
                    <span>{{ $item['description'] }}</span>
                    <span class="text-red-500 ml-2">{{ $item['price'] }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</div>
