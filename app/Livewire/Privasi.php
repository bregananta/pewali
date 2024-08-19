<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class Privasi extends Component
{
    public function render()
    {
        return view('livewire.privasi');
    }
}
