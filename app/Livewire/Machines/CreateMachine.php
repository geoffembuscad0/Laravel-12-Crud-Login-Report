<?php

namespace App\Livewire\Machines;

use App\Models\Machine;
use Livewire\Component;

class CreateMachine extends Component
{
    public $code;
    public $title;
    public $description;
    public $address;
    public $location_prefix;
    public $under_maintenance = false;
    public $active = true;

    protected $rules = [
        'code' => 'required|unique:machines,code',
        'title' => 'nullable|string',
        'description' => 'nullable|string',
        'address' => 'nullable|string',
        'location_prefix' => 'nullable|string',
        'under_maintenance' => 'boolean',
        'active' => 'boolean',
    ];

    public function save()
    {
        $this->validate();

        Machine::create($this->all());

        return redirect()->route('machines.index');
    }
    public function render()
    {
        return view('livewire.machines.create-machine');
    }
}
