<x-modal.card title="Registro producto" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.name" label="Nombre del producto" />
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="text" wire:model="form.description" label="descripcion" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.price" label="precio" />
    </div>
    <div class="grid  gap-2">
        <x-native-select label="Selecciona la talla" wire:model.live="form.size_id">
            <option>Seleccione opción</option>
            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
            @endforeach
        </x-native-select>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.stock" label="cantidad" />
    </div>
    {{-- <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="Cargo" placeholder="Seleccione una opción"
            :options="['Jugador','Comando técnico','Staff']"
            wire:model="form.type"
        />
    </div> --}}

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="Selecciona la categoria" wire:model.live="form.category_id">
            <option>Seleccione opción</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </x-native-select>
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
