<div>
    {{-- @can('machine.create') --}}
    <a href="/machines/create" class="btn">Create Machine</a>
    {{-- @endcan --}}
    <table>
        <tr>
            <th>Name</th>
            <th>Serial</th>
            <th>Location</th>
            <th>Action</th>
        </tr>

        @foreach($machines as $machine)
            <tr>
                <td>{{ $machine->name }}</td>
                <td>{{ $machine->serial_number }}</td>
                <td>{{ $machine->location }}</td>
                <td>
                    <a href="/machines/{{ $machine->id }}">View</a>
                    <a href="/machines/{{ $machine->id }}/edit">Edit</a>
                    {{-- @can('machine.delete') --}}
                    <button wire:click="delete({{ $machine->id }})">
                        Delete
                    </button>
                    {{-- @endcan --}}
                </td>
            </tr>
        @endforeach
    </table>
</div>
