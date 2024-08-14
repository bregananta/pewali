<?php

namespace App\Livewire\Components;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public function render()
    {
        $clients = Client::where('is_published', true)->get();

        return view('livewire.components.clients')->with([
            'clients' => $clients,
        ]);
    }
}
