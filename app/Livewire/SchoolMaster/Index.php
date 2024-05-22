<?php

namespace App\Livewire\SchoolMaster;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.school-master.index')->layout('layouts.app');
    }
}
