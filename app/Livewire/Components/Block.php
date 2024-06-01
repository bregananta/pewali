<?php

namespace App\Livewire\Components;

use App\Models\Home;
use Livewire\Component;

class Block extends Component
{
    public $home;
    public $blocks;

    public function mount(Home $home)
    {
        $this->blocks = $home->where('type', 'block')->where('is_published', true)->get();
    }

    public function render()
    {
        return view('livewire.components.block');
    }
}
