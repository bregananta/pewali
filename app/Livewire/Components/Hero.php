<?php

namespace App\Livewire\Components;

use App\Models\Home;
use Livewire\Component;

class Hero extends Component
{
    public $home;
    public $hero;

    public function mount(Home $home)
    {
        $this->hero = $home->where('type', 'hero')->where('is_published', true)->first();
    }

    public function render()
    {
        return view('livewire.components.hero');
    }
}
