<x-app-layout>
  <x-slot name="header">
    {{ __('Edit Panen') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Edit Panen</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('panen.update', $panen->id) }}" method="POST" autocomplete="off">
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
                <option value="{{ $tanaman->id }}" {{ $panen->tanaman_id == $tanaman->id ? 'selected' : '' }}>
                  {{ $tanaman->nama_tanaman }}
                </option>
              @endforeach
              <x-input-error :messages="$errors->get('tanaman_id')" class="mt-2" />
            </select>
          </div>

          <!-- Tanggal Panen -->
          <div class="mt-4">
            <x-input-label for="tanggal_panen" :value="__('Tanggal Panen')" />
            <x-text-input type="date" id="tanggal_panen" name="tanggal_panen" class="block w-full"
              value="{{ old('tanggal_panen', $panen->tanggal_panen) }}" required />
            <x-input-error :messages="$errors->get('tanggal_panen')" class="mt-2" />
          </div>

          <!-- Jumlah -->
          <div class="mt-4">
            <x-input-label for="jumlah" :value="__('Jumlah')" />
            <x-text-input type="number" id="jumlah" name="jumlah" class="block w-full"
              value="{{ old('jumlah', $panen->jumlah) }}" required />
            <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
          </div>

          <!-- Submit Button -->
          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Update Panen') }}
            </x-primary-button>
            <a href="{{ route('panen.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
