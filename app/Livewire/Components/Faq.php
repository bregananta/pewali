<?php

namespace App\Livewire\Components;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $faqs = ModelsFaq::where('is_published', true)->get();

        return view('livewire.components.faq')->with([
            'faqs' => $faqs,
        ]);
    }
}
