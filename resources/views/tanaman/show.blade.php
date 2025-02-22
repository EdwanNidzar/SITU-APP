<x-app-layout>
  <x-slot name="header">
    {{ __('Detail Tanaman') }}
  </x-slot>

  <div class="p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-3xl font-semibold text-gray-800 mb-6 border-b pb-4">Detail Tanaman</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Nama Tanaman</p>
          <p class="text-lg font-medium text-gray-900">{{ $tanaman->nama_tanaman }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Tanggal Tanam</p>
          <p class="text-lg font-medium text-gray-900">{{ $tanaman->tanggal_tanam }}</p>
        </div>
        <div class="p-4 bg-white-100 rounded-lg">
          <p class="text-sm text-gray-500">Lahan</p>
          <p class="text-lg font-medium text-gray-900">{{ $tanaman->lahan->nama_lahan }}</p>
        </div>
      </div>

      <div class="mt-6 flex justify-end gap-2">
        <a href="{{ route('tanaman.index') }}"
          class="px-6 py-3 bg-gray-500 text-white text-sm font-medium rounded-lg hover:bg-gray-600 transition">Back</a>
        <a href="{{ route('tanaman.edit', $tanaman->id) }}"
          class="px-6 py-3 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 transition">Edit</a>
      </div>
    </div>
  </div>
</x-app-layout>
