<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
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
        $product = ModelsProduct::where('sku', $this->sku)
            ->where('is_published', true)
            ->first();

        return view('livewire.product')->with([
            'product' => $product,
        ]);
    }
}
