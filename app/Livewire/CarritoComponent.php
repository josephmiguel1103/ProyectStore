<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class CarritoComponent extends Component
{
    public $cartItems = [];

    protected $listeners = ['addToCart'];

    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if ($product) {
            $this->cartItems[] = [
                'id' => $product->id,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->image->url,
                'quantity' => 1
            ];
        }
    }

    public function render()
    {
        return view('carrito', ['cartItems' => $this->cartItems]);
    }
}
