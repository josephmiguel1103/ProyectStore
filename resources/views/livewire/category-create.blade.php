<x-modal.card title="Registro producto" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.name" label="Nombre de la categoria" />
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="text" wire:model="form.description" label="Descripcion" />
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
        <div x-data="{ fileName: 'Select a file' }" class="relative w-64 h-12">
            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                   accept="image/*"
                   wire:model="form.url"
                   @change="fileName = $event.target.files.length > 0 ? $event.target.files[0].name : 'Select a file'" />
            <div class="absolute inset-0 flex items-center justify-center bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                <span x-text="fileName" class="text-gray-700"></span>
            </div>
        </div>
        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-between mx-2 mb-6">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <div class="image-wrapper">
                <img id="picture" src="/storage/default.png" alt="">
            </div>
        </div>
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <div class="form-group">
                {{-- {!! Form::label('file','Imagen del post',['class'=>'form-label']) !!}
                {!! Form::file('file', ['class'=>'form-control','accept'=>'image/*']) !!} --}}
                <input name="imagen" id="imagen" type="file" class="" />
            </div>
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
@push('js')


    <script>
        //Cambiar imagen
        document.getElementById("imagen").addEventListener('change',cambiarImagen);
        function cambiarImagen(event){
            var file=event.target.files[0];
            var reader=new FileReader();
            reader.onload=(event)=>{
                document.getElementById("picture").setAttribute('src',event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@endpush
</x-modal.card>
