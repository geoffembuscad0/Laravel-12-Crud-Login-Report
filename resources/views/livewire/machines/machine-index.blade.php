<div>
    {{-- @can('machine.create') --}}
    
    <div class="flex items-center gap-2">
        <a href="{{ route('machines.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md shadow-sm">
          + New Machine
        </a>
    </div>
    {{-- @endcan --}}
    <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Serial</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
            @forelse($machines as $machine)
            <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                <div class="font-medium text-gray-800">{{ $machine->name }}</div>
                <div class="text-xs text-gray-500">{{ $machine->model ?? '' }}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $machine->serial_number ?? '-' }}</td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $machine->location ?? '—' }}</td>

              <td class="px-6 py-4 whitespace-nowrap">
                @if($machine->trashed())
                  <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Soft-deleted</span>
                @else
                  <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                @endif
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="{{ route('machines.show', $machine) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm rounded-md">
                  View
                </a>

                <a href="{{ route('machines.edit', $machine) }}" class="inline-flex items-center px-3 py-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded-md">
                  Edit
                </a>

                
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">
                No machines found.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
</div>
