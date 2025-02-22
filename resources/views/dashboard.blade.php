<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Bagian') }}</h2>
      <a href="{{ route('bagian.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Bagian') }}</a><br>
      <a href="{{ route('reportBagian') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Bagian') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Jabatan') }}</h2>
      <a href="{{ route('jabatan.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Jabatan') }}</a><br>
      <a href="{{ route('reportJabatan') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Jabatan') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Pegawai') }}</h2>
      <a href="{{ route('pegawai.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Pegawai') }}</a><br>
      <a href="{{ route('reportPegawai') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Pegawai') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Pelatihan') }}</h2>
      <a href="{{ route('pelatihan.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Pelatihan') }}</a><br>
      <a href="{{ route('reportPelatihan') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Pelatihan') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Lahan') }}</h2>
      <a href="{{ route('lahan.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Lahan') }}</a><br>
      <a href="{{ route('reportLahan') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Lahan') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Tanaman') }}</h2>
      <a href="{{ route('tanaman.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Tanaman') }}</a><br>
      <a href="{{ route('reportTanaman') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Tanaman') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Pemeliharaan') }}</h2>
      <a href="{{ route('pemeliharaan.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Pemeliharaan') }}</a><br>
      <a href="{{ route('reportPemeliharaan') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Pemeliharaan') }}</a>
    </div>
    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
      <h2 class="text-xl font-bold text-gray-700 mb-4">{{ __('Panen') }}</h2>
      <a href="{{ route('panen.index') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Panen') }}</a><br>
      <a href="{{ route('reportPanen') }}"
        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">{{ __('Report Panen') }}</a>
    </div>
  </div>
</x-app-layout>
