<?php

namespace App\Livewire\Machines;

use Livewire\Component;
use App\Models\Machine;

class ShowMachine extends Component
{
    public Machine $machine;

    public function render()
    {
        return view('livewire.machines.show-machine');
    }
}
