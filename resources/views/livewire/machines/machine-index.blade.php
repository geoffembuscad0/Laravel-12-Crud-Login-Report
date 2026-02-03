<div>
    <div class="flex justify-between mb-4">
        <h1 class="text-xl font-bold">Machines</h1>
        <a href="{{ route('machines.create') }}" class="btn btn-primary">Create Machine</a>
    </div>

    <table class="table w-full">
        <thead>
            <tr>
                <th>Code</th>
                <th>Title</th>
                <th>Status</th>
                <th class="w-48">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
                <tr>
                    <td>{{ $machine->code }}</td>
                    <td>{{ $machine->title }}</td>
                    <td>
                        {{ $machine->active ? 'Active' : 'Inactive' }}
                        @if($machine->under_maintenance)
                            <span class="text-red-500">(Maintenance)</span>
                        @endif
                    </td>
                    <td class="space-x-2">
                        <a href="{{ route('machines.show', $machine) }}">View</a>
                        <a href="{{ route('machines.edit', $machine) }}">Edit</a>
                        <button wire:click="delete({{ $machine->id }})"
                                wire:confirm="Are you sure?"
                                class="text-red-600">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $machines->links() }}
    </div>
</div>
