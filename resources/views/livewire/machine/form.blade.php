<div class="space-y-6">
    
    <div>
        <flux:input wire:model="form.code" :label="__('Code')" type="text"  autocomplete="form.code" placeholder="Code"/>
    </div>
    <div>
        <flux:input wire:model="form.title" :label="__('Title')" type="text"  autocomplete="form.title" placeholder="Title"/>
    </div>
    <div>
        <flux:input wire:model="form.description" :label="__('Description')" type="text"  autocomplete="form.description" placeholder="Description"/>
    </div>
    <div>
        <flux:input wire:model="form.address" :label="__('Address')" type="text"  autocomplete="form.address" placeholder="Address"/>
    </div>
    <div>
        <flux:input wire:model="form.location_prefix" :label="__('Location Prefix')" type="text"  autocomplete="form.location_prefix" placeholder="Location Prefix"/>
    </div>
    <div>
        <flux:input wire:model="form.under_maintenance" :label="__('Under Maintenance')" type="text"  autocomplete="form.under_maintenance" placeholder="Under Maintenance"/>
    </div>
    <div>
        <flux:input wire:model="form.active" :label="__('Active')" type="text"  autocomplete="form.active" placeholder="Active"/>
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>