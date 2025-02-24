<x-app-layout>
  <x-slot name="header">
    {{ __('Edit Pemeliharaan') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Edit Pemeliharaan</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('pemeliharaan.update', $pemeliharaan->id) }}" method="POST" autocomplete="off">
          @csrf
          @method('PUT')

          <!-- Tanaman ID -->
          <div class="mt-4">
            <x-input-label for="tanaman_id" :value="__('Tanaman')" />
            <select name="tanaman_id" id="tanaman_id"
              class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
              required>
              <option value="" disabled>Pilih Tanaman</option>
              @foreach ($tanamans as $tanaman)
                <option value="{{ $tanaman->id }}" {{ $pemeliharaan->tanaman_id == $tanaman->id ? 'selected' : '' }}>
                  {{ $tanaman->nama_tanaman }}
                </option>
              @endforeach
              <x-input-error :messages="$errors->get('tanaman_id')" class="mt-2" />
            </select>
          </div>

          <!-- Kegiatan -->
          <div class="mt-4">
            <x-input-label for="kegiatan" :value="__('Kegiatan')" />
            <x-text-input type="text" id="kegiatan" name="kegiatan" class="block w-full"
              value="{{ old('kegiatan', $pemeliharaan->kegiatan) }}" required />
            <x-input-error :messages="$errors->get('kegiatan')" class="mt-2" />
          </div>

          <!-- Tanggal -->
          <div class="mt-4">
            <x-input-label for="tanggal" :value="__('Tanggal')" />
            <x-text-input type="date" id="tanggal" name="tanggal" class="block w-full"
              value="{{ old('tanggal', $pemeliharaan->tanggal) }}" required />
            <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
          </div>

          <!-- Biaya Pemeliharaan -->
          <div class="mt-4">
            <x-input-label for="biaya_pemeliharaan" :value="__('Biaya Pemeliharaan')" />
            <x-text-input type="number" id="biaya_pemeliharaan" name="biaya_pemeliharaan" class="block w-full"
              value="{{ old('biaya_pemeliharaan', $pemeliharaan->biaya_pemeliharaan) }}" required />
            <x-input-error :messages="$errors->get('biaya_pemeliharaan')" class="mt-2" />
          </div>
      
          <!-- Submit Button -->
          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Update Pemeliharaan') }}
            </x-primary-button>
            <a href="{{ route('pemeliharaan.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
