<?php

namespace App\Livewire;

use App\Models\Home;
use App\Models\Blog as ModelsBlog;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

#[Layout('livewire.layout.app')]
#[Title('CV PEWALI - Jumbo Bag (FIBC) Supplier')]

class Blog extends Component
{
    public $blog;
    public $slug;

    public function mount(ModelsBlog $blog)
    {
        $this->blog = $blog->where('slug', $this->slug)->first();
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
