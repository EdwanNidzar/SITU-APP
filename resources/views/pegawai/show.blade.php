<x-app-layout>
  <x-slot name="header">
    {{ __('Detail Pegawai') }}
  </x-slot>

  <div class="p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-3xl font-semibold text-gray-800 mb-6 border-b pb-4">Detail Pegawai</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">NIP</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->nip }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Nama</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->nama }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Tempat, Tanggal Lahir</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->tempat_lahir }}, {{ $pegawai->tanggal_lahir }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Alamat</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->alamat }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Tanggal Masuk</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->tanggal_masuk }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Bagian</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->bagian->nama_bagian }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Jabatan</p>
          <p class="text-lg font-medium text-gray-900">{{ $pegawai->jabatan->nama_jabatan }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Foto</p>
          <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="Foto Pegawai" class="w-32 h-32 rounded-lg">
        </div>
      </div>

      <div class="mt-6 flex justify-end gap-2">
        <a href="{{ route('pegawai.index') }}"
          class="px-6 py-3 bg-gray-500 text-white text-sm font-medium rounded-lg hover:bg-gray-600 transition">Back</a>
        <a href="{{ route('pegawai.edit', $pegawai->id) }}"
          class="px-6 py-3 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 transition">Edit</a>
      </div>
    </div>
  </div>
</x-app-layout>
