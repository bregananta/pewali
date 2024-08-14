<?php

namespace App\Livewire\Components;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        $products = ModelsProduct::where('is_published', true)
            ->where('is_featured', true)->get();

        return view('livewire.components.product')->with('products', $products);
    }
}
