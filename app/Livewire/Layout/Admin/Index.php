<?php

namespace App\Livewire\Layout\Admin;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.layout.admin.index')->layout('layouts.app');
    }
}
