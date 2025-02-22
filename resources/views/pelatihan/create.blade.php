<x-app-layout>
  <x-slot name="header">
    {{ __('Tambah Pelatihan') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Pelatihan</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('pelatihan.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
          @csrf

          <div class="grid grid-cols-2 gap-4">
            <div>
              <x-input-label for="pegawai_id" :value="__('Pegawai')" />
              <select id="pegawai_id" name="pegawai_id"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
                required>
                <option value="">Pilih Pegawai</option>
                @foreach ($pegawais as $pegawai)
                  <option value="{{ $pegawai->id }}" {{ old('pegawai_id') == $pegawai->id ? 'selected' : '' }}>
                    {{ $pegawai->nama }}
                  </option>
                @endforeach
              </select>
              <x-input-error :messages="$errors->get('pegawai_id')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="nama_pelatihan" :value="__('Nama Pelatihan')" />
              <x-text-input type="text" id="nama_pelatihan" name="nama_pelatihan" class="block w-full"
                value="{{ old('nama_pelatihan') }}" required />
              <x-input-error :messages="$errors->get('nama_pelatihan')" class="mt-2" />
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
              <x-input-label for="tanggal_pelatihan" :value="__('Tanggal Pelatihan')" />
              <x-text-input type="date" id="tanggal_pelatihan" name="tanggal_pelatihan" class="block w-full"
                value="{{ old('tanggal_pelatihan') }}" required />
              <x-input-error :messages="$errors->get('tanggal_pelatihan')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="penyelenggara" :value="__('Penyelenggara')" />
              <x-text-input type="text" id="penyelenggara" name="penyelenggara" class="block w-full"
                value="{{ old('penyelenggara') }}" required />
              <x-input-error :messages="$errors->get('penyelenggara')" class="mt-2" />
            </div>
          </div>

          <div class="mt-4">
            <x-input-label for="hasil_pelatihan" :value="__('Hasil Pelatihan')" />
            <textarea id="hasil_pelatihan" name="hasil_pelatihan"
              class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
              required>{{ old('hasil_pelatihan') }}</textarea>
            <x-input-error :messages="$errors->get('hasil_pelatihan')" class="mt-2" />
          </div>

          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Tambah Pelatihan') }}
            </x-primary-button>
            <a href="{{ route('pelatihan.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
