<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
