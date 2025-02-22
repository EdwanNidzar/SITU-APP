<x-app-layout>
  <x-slot name="header">
    {{ __('Edit Lahan') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Edit Lahan</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('lahan.update', $lahan->id) }}" method="POST" autocomplete="off">
          @csrf
          @method('PUT')

          <!-- Nama Lahan -->
          <div class="mt-4">
            <x-input-label for="nama_lahan" :value="__('Nama Lahan')" />
            <x-text-input type="text" id="nama_lahan" name="nama_lahan" class="block w-full"
              value="{{ old('nama_lahan', $lahan->nama_lahan) }}" required />
            <x-input-error :messages="$errors->get('nama_lahan')" class="mt-2" />
          </div>

          <!-- Lokasi Lahan -->
          <div class="mt-4">
            <x-input-label for="lokasi_lahan" :value="__('Lokasi Lahan')" />
            <x-text-input type="text" id="lokasi_lahan" name="lokasi_lahan" class="block w-full"
              value="{{ old('lokasi_lahan', $lahan->lokasi_lahan) }}" required />
            <x-input-error :messages="$errors->get('lokasi_lahan')" class="mt-2" />
          </div>

          <!-- Luas Lahan -->
          <div class="mt-4">
            <x-input-label for="luas_lahan" :value="__('Luas Lahan')" />
            <x-text-input type="number" id="luas_lahan" name="luas_lahan" class="block w-full"
              value="{{ old('luas_lahan', $lahan->luas_lahan) }}" required />
            <x-input-error :messages="$errors->get('luas_lahan')" class="mt-2" />
          </div>

          <!-- Submit Button -->
          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Update Lahan') }}
            </x-primary-button>
            <a href="{{ route('lahan.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
