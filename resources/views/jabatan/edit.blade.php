<x-app-layout>
    <x-slot name="header">
      {{ __('Edit Jabatan') }}
    </x-slot>
  
    <div class="p-4 bg-white rounded-lg shadow-xs">
      <h1 class="text-2xl font-semibold text-gray-800">Edit Jabatan</h1>
  
      <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
        <div class="overflow-x-auto w-full">
          <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')
  
            <!-- Nama Jabatan -->
            <div class="mt-4">
              <x-input-label for="nama_jabatan" :value="__('Nama Jabatan')" />
              <x-text-input type="text" id="nama_jabatan" name="nama_jabatan" class="block w-full"
                value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" required />
              <x-input-error :messages="$errors->get('nama_jabatan')" class="mt-2" />
            </div>
  
            <!-- Submit Button -->
            <div class="mt-4">
              <x-primary-button class="float-right">
                {{ __('Simpan Perubahan') }}
              </x-primary-button>
              <a href="{{ route('jabatan.index') }}"
                class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 mr-2">Back</a>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
