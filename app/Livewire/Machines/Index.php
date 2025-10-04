<?php

namespace App\Livewire\Machines;

use App\Models\Machine;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $machines = Machine::paginate();

        return view('livewire.machine.index', compact('machines'))
            ->with('i', $this->getPage() * $machines->perPage());
    }

    public function delete(Machine $machine)
    {
        $machine->delete();

        return $this->redirectRoute('machines.index', navigate: true);
    }
}
