<x-app-layout>
  <x-slot name="header">
    {{ __('Tambah Bagian') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Bagian</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('bagian.store') }}" method="POST" autocomplete="off">
          @csrf

          <!-- Nama Bagian -->
          <div class="mt-4">
            <x-input-label for="nama_bagian" :value="__('Nama Bagian')" />
            <x-text-input type="text" id="nama_bagian" name="nama_bagian" class="block w-full"
              value="{{ old('nama_bagian') }}" required />
            <x-input-error :messages="$errors->get('nama_bagian')" class="mt-2" />
          </div>

          <!-- Submit Button -->
          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Tambah Bagian') }}
            </x-primary-button>
            <a href="{{ route('bagian.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
