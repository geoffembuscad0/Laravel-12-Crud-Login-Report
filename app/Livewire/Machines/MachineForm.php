<?php
namespace App\Livewire\Machines;
use Livewire\Component;
use App\Models\Machine;

class MachineForm extends Component
{
    public ?Machine $machine = null;

    public $name;
    public $serial_number;
    public $location;
    public $is_active = true;

    public function mount(?Machine $machine = null)
    {
        if ($machine) {
            $this->machine = $machine;
            $this->fill($machine->toArray());
        }
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'serial_number' => 'required|unique:machines,serial_number,' . optional($this->machine)->id,
            'location' => 'nullable',
            'is_active' => 'boolean',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Machine::updateOrCreate(
            ['id' => optional($this->machine)->id],
            $data
        );

        return redirect('/machines');
    }

    public function render()
    {
        return view('livewire.machines.machine-form')->layout('layouts.app');;
    }
}
