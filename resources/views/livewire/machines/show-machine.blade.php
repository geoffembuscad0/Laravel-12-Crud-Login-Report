<div class="max-w-xl space-y-2">
    <h1 class="text-xl font-bold">{{ $machine->title }}</h1>

    <p><strong>Code:</strong> {{ $machine->code }}</p>
    <p><strong>Description:</strong> {{ $machine->description }}</p>
    <p><strong>Address:</strong> {{ $machine->address }}</p>
    <p><strong>Location Prefix:</strong> {{ $machine->location_prefix }}</p>
    <p><strong>Status:</strong> {{ $machine->active ? 'Active' : 'Inactive' }}</p>
    <p><strong>Maintenance:</strong> {{ $machine->under_maintenance ? 'Yes' : 'No' }}</p>

    <a href="{{ route('machines.edit', $machine) }}" class="btn btn-secondary">Edit</a>
</div>
