<x-app-layout>
  <x-slot name="header">
    {{ __('Tambah Pegawai') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Pegawai</h1>

    <div class="overflow-hidden mb-8 w-full rounded-lg shadow-xs">
      <div class="overflow-x-auto w-full">
        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
          @csrf

          <div class="grid grid-cols-2 gap-4">
            <div>
              <x-input-label for="nip" :value="__('NIP')" />
              <x-text-input type="text" id="nip" name="nip" class="block w-full"
                value="{{ old('nip') }}" required />
              <x-input-error :messages="$errors->get('nip')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="nama" :value="__('Nama')" />
              <x-text-input type="text" id="nama" name="nama" class="block w-full"
                value="{{ old('nama') }}" required />
              <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
              <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
              <x-text-input type="text" id="tempat_lahir" name="tempat_lahir" class="block w-full"
                value="{{ old('tempat_lahir') }}" required />
              <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
              <x-text-input type="date" id="tanggal_lahir" name="tanggal_lahir" class="block w-full"
                value="{{ old('tanggal_lahir') }}" required />
              <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
            </div>
          </div>

          <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <textarea id="alamat" name="alamat"
              class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
              required>{{ old('alamat') }}</textarea>
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
          </div>

          <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
              <x-input-label for="tanggal_masuk" :value="__('Tanggal Masuk')" />
              <x-text-input type="date" id="tanggal_masuk" name="tanggal_masuk" class="block w-full"
                value="{{ old('tanggal_masuk') }}" required />
              <x-input-error :messages="$errors->get('tanggal_masuk')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="bagian_id" :value="__('Bagian')" />
              <select id="bagian_id" name="bagian_id"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
                required>
                <option value="">Pilih Bagian</option>
                @foreach ($bagians as $bagian)
                  <option value="{{ $bagian->id }}" {{ old('bagian_id') == $bagian->id ? 'selected' : '' }}>
                    {{ $bagian->nama_bagian }}
                  </option>
                @endforeach
              </select>
              <x-input-error :messages="$errors->get('bagian_id')" class="mt-2" />
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
              <x-input-label for="jabatan_id" :value="__('Jabatan')" />
              <select id="jabatan_id" name="jabatan_id"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus-within:text-primary-600"
                required>
                <option value="">Pilih Jabatan</option>
                @foreach ($jabatans as $jabatan)
                  <option value="{{ $jabatan->id }}" {{ old('jabatan_id') == $jabatan->id ? 'selected' : '' }}>
                    {{ $jabatan->nama_jabatan }}
                  </option>
                @endforeach
              </select>
              <x-input-error :messages="$errors->get('jabatan_id')" class="mt-2" />
            </div>

            <div>
              <x-input-label for="foto" :value="__('Foto')" />
              <x-text-input type="file" id="foto" name="foto" class="block w-full" accept="image/*"
                required />
              <x-input-error :messages="$errors->get('foto')" class="mt-2" />
            </div>
          </div>

          <div class="mt-4">
            <x-primary-button class="float-right">
              {{ __('Tambah Pegawai') }}
            </x-primary-button>
            <a href="{{ route('pegawai.index') }}"
              class="float-right px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
