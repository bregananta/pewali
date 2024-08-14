<?php

namespace App\Livewire;

use App\Models\Home;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class Products extends Component
{
    public $products;
    public $featured_products;
    public $sku;

    public function mount(Product $products)
    {
        if (is_null($this->sku)) {
            $this->products = $products
                ->where('is_featured', false)
                ->where('is_published', true)
                ->get();
            $this->featured_products = $products
                ->where('is_featured', true)
                ->where('is_published', true)
                ->get();
        } else {
            $this->products = $products
                ->where('sku', $this->sku)
                ->where('is_published', true)
                ->get();
            $this->featured_products = [];
        }
    }

    public function render()
    {
        if (is_null($this->sku)) {
            return view('livewire.products')->with([
                'products' => $this->products,
                'featured_products' => $this->featured_products,
            ]);
        } else {
            return view('livewire.product');
        }
    }
}
