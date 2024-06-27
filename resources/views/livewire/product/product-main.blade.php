<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex products-center justify-between gap-4 mb-2">
            <div class="flex gap-2">
                <x-input icon="search"  class="px-25" placeholder="Buscar registro" wire:model.live="search" />
                <x-native-select  wire:model.live="b_cat">
                    <option value="">seleccione una opcion</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-native-select>
                {{$b_cat}}
            </div>
            <x-button wire:click="create()" spinner="create" icon="plus" primary label="Nuevo"/>
                @if($isOpen)
                    @include('livewire.product.product-create')
                @endif

        </div>


        <!--Tabla lista de products   -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-indigo-500 text-white">
                <tr class="text-left text-xs font-bold  uppercase">
                  <td scope="col" class="px-6 py-3">ID</td>
                  <td scope="col" class="px-6 py-3">name</td>
                  <td scope="col" class="px-6 py-3">description</td>
                  <td scope="col" class="px-6 py-3">price</td>
                  <td scope="col" class="px-6 py-3">Stock</td>
                  <td scope="col" class="px-6 py-3">Categoria</td>
                  <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                @foreach($products as $product)

                <tr class="text-sm font-medium text-gray-900">
                  <td class="px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                      {{$product->id}}
                    </span>
                  </td>
                  <td class="px-6 py-4">{{$product->name}}</td>
                  <td class="px-6 py-4">{{$product->description}}</td>
                  <td class="px-6 py-4">{{$product->price}}</td>
                  <td class="px-6 py-4">{{$product->stock}}</td>
                  <td class="px-6 py-4">{{$product->category ? $product->category->name : 'Sin categoría'}}</td>
                  <td class="px-6 py-4 text-right">
                    <x-button.circle wire:click="edit({{$product}})" primary icon="pencil" />
                    <x-button.circle negative icon="x" x-on:confirm="{
                        title: 'Seguro que deseas eliminar?',
                        icon: 'error',
                        method: 'destroy',
                        params: {{$product}}
                    }"
                    />
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
        </div>
        @if(!$products->count())
            <p class="dark:text-gray-200">No existe ningun registro conincidente</p>
        @endif
        @if($products->hasPages())
        <div class="px-6 py-3">
            {{$products->links()}}
        </div>
        @endif

        </div>
      </div>
</div>
