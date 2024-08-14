<?php

namespace App\Livewire\Components;

use App\Models\BlogCategory;
use App\Models\Menu;
use App\Models\ProductCategory;
use Livewire\Component;

class TopMenu extends Component
{
    public function render()
    {
        $menus = Menu::where('parent_id', -1)->orderBy('order', 'asc')->get();
        $productCategories = ProductCategory::where('parent_id', -1)->orderBy('order', 'asc')->get();
        $blogCategories = BlogCategory::where('parent_id', -1)->orderBy('order', 'asc')->get();

        return view('livewire.components.top-menu')->with([
            'menus' => $menus,
            'productCategories' => $productCategories,
            'blogCategories' => $blogCategories,
        ]);
    }
}
