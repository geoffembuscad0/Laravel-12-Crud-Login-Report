<form wire:submit.prevent="save">

    <input type="text" wire:model="name" placeholder="Name">
    <input type="text" wire:model="serial_number" placeholder="Serial Number">
    <input type="text" wire:model="location" placeholder="Location">

    <label>
        <input type="checkbox" wire:model="is_active">
        Active
    </label>

    <button type="submit">Save</button>

</form>
