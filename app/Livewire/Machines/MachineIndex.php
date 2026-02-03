<?php

namespace App\Livewire\Machines;

use App\Models\Machine;
use Livewire\Component;
use Livewire\WithPagination;

class MachineIndex extends Component {
    use WithPagination;

    protected $queryString = ['page'];

    public function delete($id)
    {
        Machine::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.machines.machine-index', [
            'machines' => Machine::latest()->paginate(10),
        ]);
    }
}
