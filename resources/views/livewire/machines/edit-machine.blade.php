<div class="max-w-xl">
    <h1 class="text-xl font-bold mb-4">Edit Machine</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <input wire:model="machine.code" class="input w-full">
        <input wire:model="machine.title" class="input w-full">
        <textarea wire:model="machine.description" class="textarea w-full"></textarea>
        <input wire:model="machine.address" class="input w-full">
        <input wire:model="machine.location_prefix" class="input w-full">

        <label>
            <input type="checkbox" wire:model="machine.under_maintenance">
            Under Maintenance
        </label>

        <label>
            <input type="checkbox" wire:model="machine.active">
            Active
        </label>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
