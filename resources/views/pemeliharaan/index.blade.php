<x-app-layout>
  <x-slot name="header">
    {{ __('Pemeliharaan') }}
  </x-slot>

  <div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="text-2xl font-semibold text-gray-800">Pemeliharaan</h1>
    <x-alert-notification />

    <div class="mt-4 mb-4 flex justify-end space-x-2">
      <a href="{{ route('pemeliharaan.create') }}"
        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tambah</a>
      <a href="{{ route('reportPemeliharaan') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600"
        target="_blank">Export
        PDF</a>
    </div>

    <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
      <div class="overflow-x-auto w-full">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
              <th class="px-4 py-3">Nama Tanaman</th>
              <th class="px-4 py-3">Kegiatan</th>
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y">
            @foreach ($pemeliharaans as $pemeliharaan)
              <tr class="text-gray-700">
                <td class="px-4 py-3 text-sm">{{ $pemeliharaan->tanaman->nama_tanaman }}</td>
                <td class="px-4 py-3 text-sm">{{ $pemeliharaan->kegiatan }}</td>
                <td class="px-4 py-3 text-sm">{{ $pemeliharaan->tanggal }}</td>
                <td class="px-4 py-3 text-sm text-center">
                  <div class="flex justify-center space-x-2">
                    <a href="{{ route('pemeliharaan.edit', $pemeliharaan->id) }}"
                      class="text-blue-500 hover:text-blue-700"><x-icons.edit /></a>
                    <a href="{{ route('pemeliharaan.show', $pemeliharaan->id) }}"
                      class="text-green-500 hover:text-green-700"><x-icons.show /></a>
                    <form action="{{ route('pemeliharaan.destroy', $pemeliharaan->id) }}" method="POST"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-500 hover:text-red-700">
                        <x-icons.delete />
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-white border-t">
        {{ $pemeliharaans->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
