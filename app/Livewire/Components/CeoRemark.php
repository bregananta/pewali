<?php

namespace App\Livewire\Components;

use App\Models\Home;
use Livewire\Component;

class CeoRemark extends Component
{
    public $home;
    public $ceo_remark;

    public function mount(Home $home)
    {
        $this->ceo_remark = $home->where('type', 'ceo_remark')->where('is_published', true)->first();
    }

    public function render()
    {
        return view('livewire.components.ceo-remark');
    }
}
