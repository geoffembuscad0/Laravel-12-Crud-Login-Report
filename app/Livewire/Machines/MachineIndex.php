<?php
namespace App\Livewire\Machines;

use Livewire\Component;
use App\Models\Machine;

class MachineIndex extends Component
{
    public function delete($id)
    {
        Machine::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.machines.machine-index', [
            'machines' => Machine::latest()->get()
        ])->layout('layouts.app');
    }
}
