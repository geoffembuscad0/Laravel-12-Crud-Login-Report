<?php
namespace App\Livewire\Machines;
use Livewire\Component;
use App\Models\Machine;

class MachineShow extends Component
{
    public Machine $machine;

    public function mount(Machine $machine)
    {
        $this->machine = $machine;
    }

    public function render()
    {
        return view('livewire.machines.machine-show')->layout('layouts.app');
    }
}
