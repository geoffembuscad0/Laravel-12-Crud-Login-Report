<?php

namespace App\Livewire\Machines;

use App\Models\Machine;
use Livewire\Component;

class EditMachine extends Component
{
    public Machine $machine;

    protected function rules()
    {
        return [
            'machine.code' => 'required|unique:machines,code,' . $this->machine->id,
            'machine.title' => 'nullable|string',
            'machine.description' => 'nullable|string',
            'machine.address' => 'nullable|string',
            'machine.location_prefix' => 'nullable|string',
            'machine.under_maintenance' => 'boolean',
            'machine.active' => 'boolean',
        ];
    }

    public function save()
    {
        $this->validate();
        $this->machine->save();

        return redirect()->route('machines.index');
    }
    public function render()
    {
        return view('livewire.machines.edit-machine');
    }
}
