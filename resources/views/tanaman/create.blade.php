<x-app-layout>
  <x-slot name="header">
    {{ __('Tambah Tanaman') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Tanaman</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('tanaman.store') }}" method="POST" autocomplete="off">
          @csrf

          <!-- Lahan ID -->
          <div class="mt-4">
            <x-input-label for="lahan_id" :value="__('Lahan')" />
            <select name="lahan_id" id="lahan_id"
              class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
              required>
              <option value="" selected disabled>Pilih Lahan</option>
              @foreach ($lahans as $lahan)
                <option value="{{ $lahan->id }}">{{ $lahan->nama_lahan }}</option>
              @endforeach
              <x-input-error :messages="$errors->get('lahan_id')" class="mt-2" />
            </select>
          </div>

          <!-- Nama Tanaman -->
          <div class="mt-4">
            <x-input-label for="nama_tanaman" :value="__('Nama Tanaman')" />
            <x-text-input type="text" id="nama_tanaman" name="nama_tanaman" class="block w-full"
              value="{{ old('nama_tanaman') }}" required />
            <x-input-error :messages="$errors->get('nama_tanaman')" class="mt-2" />
          </div>

          <!-- Tanggal Tanam -->
          <div class="mt-4">
            <x-input-label for="tanggal_tanam" :value="__('Tanggal Tanam')" />
            <x-text-input type="date" id="tanggal_tanam" name="tanggal_tanam" class="block w-full"
              value="{{ old('tanggal_tanam') }}" required />
            <x-input-error :messages="$errors->get('tanggal_tanam')" class="mt-2" />
          </div>

          <!-- Submit Button -->
          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Tambah Tanaman') }}
            </x-primary-button>
            <a href="{{ route('tanaman.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
