<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Forms\ImageForm;
use App\Models\Category;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CategoryMain extends Component

{
    use WithFileUploads;
    use WithPagination;
    use Actions;
    public $isOpen=false;
    public ?Category $Category;
    public CategoryForm $form;
    public $search;
    public ?Image $Image;
    public ImageForm $formImg;

    public function render()
    {
        $categorias=Category::where('name','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);

       return view('livewire.Category-main',compact('categorias'));
    }


    public function create(){
        $this->isOpen=true;
        $this->form->reset();
       $this->formImg->reset();
        $this->reset(['Category','Image']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Category $Category , Image $Image){
        //dd($vehicle);
        $this->Category=$Category;
        $this->form->fill($Category);
        $this->Image=$Image;
        $this->formImg->fill($Image);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->Category->id)){
            Category::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->Category->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->validate();
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = time() . '.' . $this->image->getClientOriginalExtension();
        $path = $this->image->storeAs('public/categories', $filename);

        $this->category->images()->create([
            'url' => 'categories/' . $filename,
            'imageable_id'=>$this->Category->id ,
            'imageable_type'=> Category::class,
        ]);




        $this->reset(['isOpen', 'image']);
        $this->form->reset();
    }

    public function destroy(Category $Category){
        $Category->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
