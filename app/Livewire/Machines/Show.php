<?php

namespace App\Livewire\Machines;

use App\Livewire\Forms\MachineForm;
use App\Models\Machine;
use Livewire\Component;

class Show extends Component
{
    public MachineForm $form;

    public function mount(Machine $machine)
    {
        $this->form->setMachineModel($machine);
    }

    public function render()
    {
        return view('livewire.machine.show', ['machine' => $this->form->machineModel]);
    }
}
