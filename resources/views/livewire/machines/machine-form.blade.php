<form wire:submit.prevent="save">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- Name --}}
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input id="name" wire:model="name" name="name" value="{{ old('name', $machine->name ?? '') }}" type="text" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        {{-- Serial Number --}}
        <div>
          <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
          <input id="serial_number" wire:model="serial_number" name="serial_number" value="{{ old('serial_number', $machine->serial_number ?? '') }}" type="text"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @error('serial_number')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- Location --}}
        <div>
          <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
          <input id="location" wire:model="location" name="location" value="{{ old('location', $machine->location ?? '') }}" type="text"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          @error('location')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        {{-- Status / Type (example select) --}}
        <div>
          <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
          <select id="type" wire:model="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select type</option>
            <option value="type_a" {{ old('type', $machine->type ?? '') == 'type_a' ? 'selected' : '' }}>Type A</option>
            <option value="type_b" {{ old('type', $machine->type ?? '') == 'type_b' ? 'selected' : '' }}>Type B</option>
          </select>
          @error('type')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      {{-- Description --}}
      <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" wire:model="description" name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description', $machine->description ?? '') }}</textarea>
        @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100">
        <a href="{{ route('machines.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
          Cancel
        </a>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md">
          Save
        </button>
      </div>

</form>
