<?php

namespace App\Livewire\Dashboard;

use App\Models\Product;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
       $products=Product::all()->count();
        return view('livewire.dashboard.main',compact('products'));
    }
}
