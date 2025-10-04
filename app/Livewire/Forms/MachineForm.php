<?php

namespace App\Livewire\Forms;

use App\Models\Machine;
use Livewire\Form;

class MachineForm extends Form
{
    public ?Machine $machineModel;
    
    public $code = '';
    public $title = '';
    public $description = '';
    public $address = '';
    public $location_prefix = '';
    public $under_maintenance = '';
    public $active = '';

    public function rules(): array
    {
        return [
			'code' => 'required|string',
			'title' => 'string',
			'description' => 'string',
			'address' => 'string',
			'location_prefix' => 'string',
			'active' => 'required',
        ];
    }

    public function setMachineModel(Machine $machineModel): void
    {
        $this->machineModel = $machineModel;
        
        $this->code = $this->machineModel->code;
        $this->title = $this->machineModel->title;
        $this->description = $this->machineModel->description;
        $this->address = $this->machineModel->address;
        $this->location_prefix = $this->machineModel->location_prefix;
        $this->under_maintenance = $this->machineModel->under_maintenance;
        $this->active = $this->machineModel->active;
    }

    public function store(): void
    {
        $this->machineModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->machineModel->update($this->validate());

        $this->reset();
    }
}
