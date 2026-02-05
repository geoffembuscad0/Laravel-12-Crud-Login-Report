<div>
    <h1>{{ $machine->name }}</h1>

    <p>Serial: {{ $machine->serial_number }}</p>
    <p>Location: {{ $machine->location }}</p>
    <p>Status: {{ $machine->is_active ? 'Active' : 'Inactive' }}</p>
</div>
