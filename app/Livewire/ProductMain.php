<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ProductMain extends Component{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    public $cayegory_id;
    public ?Product $product;
    public ProductForm $form;
    public $search,$b_cat;

    public function render(){
   // $integrantes=Product::where('fullname','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
         $products=Product::where('name','LIKE','%'.$this->search.'%')
         ->Categoria($this->b_cat)
         ->latest('id')->paginate(10);
         $categories=Category::all();


        return view('livewire.product.Product-main',compact('categories','products'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['product']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Product $Product){
        //dd($vehicle);
        $this->product=$Product;
        $this->form->fill($Product);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->product->id)){
            Product::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->product->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Product $product){
        $product->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
