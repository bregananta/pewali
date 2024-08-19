<?php

namespace App\Livewire;

use App\Models\Home;
use App\Models\Menu;
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
        $home = Home::where('type', 'product_knowledge')
            ->where('page_id', $this->page->id)
            ->get();

        $is_product_knowledge = !$home->isEmpty();
        $product_knowledge = null;

        if ($is_product_knowledge) {
            $product_knowledge = ModelsPage::whereIn('id', Home::where('type', 'product_knowledge')->get('page_id'))
                ->get();
        }

        $parent_menu = $this->page->menus()->pluck('parent_id');
        $related_menus = Menu::whereIn('parent_id', $parent_menu)->where('parent_id', '>', 0)->orderBy('parent_id')->get();

        return view('livewire.page', [
            'is_product_knowledge' => $is_product_knowledge,
            'product_knowledge' => $product_knowledge,
            'related_menus' => $related_menus,
        ]);
    }
}
