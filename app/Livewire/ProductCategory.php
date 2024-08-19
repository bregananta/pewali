<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductCategory as ModelsProductCategory;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class ProductCategory extends Component
{
    public $category_id;
    public $category;
    public $products;
    public $sub_products;
    public $all_products;

    public function mount(string $category_id)
    {
        $this->category_id = $category_id;
        $this->category = ModelsProductCategory::find($category_id);
        $sub_categories = $this->category->childrenRecursive->pluck('id');

        $this->products = Product::where('product_category_id', $category_id)
            ->where('is_published', true)->get();
        $this->sub_products = Product::whereIn('product_category_id', $sub_categories)
            ->where('is_published', true)->get();
        $this->all_products = $this->products->merge($this->sub_products);
    }

    public function render()
    {
        $categories = ModelsProductCategory::where('parent_id', -1)->get();

        // dd($this->all_products);

        return view('livewire.product-category', [
            'all_products' => $this->all_products,
            'categories' => $categories,
            'category' => $this->category,
        ]);
    }
}
