<?php

namespace App\Livewire\Machines;

use App\Livewire\Forms\MachineForm;
use App\Models\Machine;
use Livewire\Component;

class Edit extends Component
{
    public MachineForm $form;

    public function mount(Machine $machine)
    {
        $this->form->setMachineModel($machine);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('machines.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.machine.edit');
    }
}
