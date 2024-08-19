<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class Product extends Component
{
    public $sku;

    public function render()
    {
        $categories = ProductCategory::where('parent_id', -1)->get();

        $product = ModelsProduct::where('sku', $this->sku)
            ->where('is_published', true)
            ->first();

        return view('livewire.product')->with([
            'product' => $product,
            'categories' => $categories,
        ]);
    }
}
