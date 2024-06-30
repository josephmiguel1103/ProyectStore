<?php

namespace App\Livewire\Dashboard;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Main extends Component
{

    public $productsByCategory;

    public function mount()
    {

    }

    public function render()
    {
       $products=Product::all()->count();

    $categories = Category::all();
    $productCounts = [];

    foreach ($categories as $category) {
        $productCounts[] = [
            'category' => $category->name,
            'count' => $category->products()->count()
        ];
    }
        return view('livewire.dashboard.main',compact('products','productCounts'));
    }
}
