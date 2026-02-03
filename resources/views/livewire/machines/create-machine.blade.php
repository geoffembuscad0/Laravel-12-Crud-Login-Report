<div class="max-w-xl">
    <h1 class="text-xl font-bold mb-4">Create Machine</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <input wire:model="code" type="text" placeholder="Code" class="input w-full">
        <input wire:model="title" type="text" placeholder="Title" class="input w-full">
        <textarea wire:model="description" placeholder="Description" class="textarea w-full"></textarea>
        <input wire:model="address" type="text" placeholder="Address" class="input w-full">
        <input wire:model="location_prefix" type="text" placeholder="Location Prefix" class="input w-full">

        <label>
            <input type="checkbox" wire:model="under_maintenance">
            Under Maintenance
        </label>

        <label>
            <input type="checkbox" wire:model="active">
            Active
        </label>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
