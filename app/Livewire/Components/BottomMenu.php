<?php

namespace App\Livewire\Components;

use App\Models\Menu;
use Livewire\Component;

class BottomMenu extends Component
{
    public function render()
    {
        $menus = Menu::where('parent_id', -1)->orderBy('order', 'asc')->get();

        return view('livewire.components.bottom-menu')->with([
            'menus' => $menus,
        ]);
    }
}
