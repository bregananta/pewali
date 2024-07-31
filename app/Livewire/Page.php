<?php

namespace App\Livewire;

use App\Models\Home;
use App\Models\Page as ModelsPage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class Page extends Component
{
    public $page;
    public $slug;

    public function mount(ModelsPage $page)
    {
        $this->page = $page->where('slug', $this->slug)->first();
    }

    public function render()
    {
        // dd($this->page->id);
        $home = Home::where('type', 'product_knowledge')
            ->where('page_id', $this->page->id)
            ->get();

        $is_product_knowledge = !$home->isEmpty();
        $product_knowledge = null;

        if ($is_product_knowledge) {
            $product_knowledge = ModelsPage::whereIn('id', Home::where('type', 'product_knowledge')->get('page_id'))
                ->get();
        }

        // dd($is_product_knowledge);

        return view('livewire.page', [
            'is_product_knowledge' => $is_product_knowledge,
            'product_knowledge' => $product_knowledge,
        ]);
    }
}
