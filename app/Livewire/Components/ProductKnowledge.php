<?php

namespace App\Livewire\Components;

use App\Models\Home;
use Livewire\Component;

class ProductKnowledge extends Component
{
    public $home;
    public $product_knowledge;

    public function mount(Home $home)
    {
        $this->product_knowledge = $home->where('type', 'product_knowledge')->where('is_published', true)->get();
    }

    public function render()
    {
        return view('livewire.components.product-knowledge');
    }
}
