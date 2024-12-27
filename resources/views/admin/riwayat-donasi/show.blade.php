<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="mx-auto bg-white p-4 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Detail Pendonasi</h2>
    
    <div class="grid grid-cols-5 gap-6">

        <div class="flex flex-col items-center">
        <img class="w-24 h-24 rounded-full object-cover mb-4" src="https://via.placeholder.com/150" alt="Foto Pendonasi">
        </div>

        <div class="col-span-2">
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Nama Pendonasi</p>
            <p class="text-gray-900 font-medium">Charlene Reed</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Alamat Pendonasi</p>
            <p class="text-gray-900 font-medium">San Jose, California, USA</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">No Telepon Pendonasi</p>
            <p class="text-gray-900 font-medium">+62 8123456789</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Jenis Kelamin Pendonasi</p>
            <p class="text-gray-900 font-medium">Perempuan</p>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Postal Code</p>
            <p class="text-gray-900 font-medium">45962</p>
        </div>
        </div>

        <div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Jumlah Donasi</p>
            <p class="text-gray-900 font-medium">Rp20.000.000</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Nama Campaign</p>
            <p class="text-gray-900 font-medium">Charlete Reed</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">Nama Perusahaan</p>
            <p class="text-gray-900 font-medium">PT Charlete Red</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-500 text-sm">City</p>
            <p class="text-gray-900 font-medium">San Jose</p>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Total Donasi</p>
            <p class="text-gray-900 font-medium">USA</p>
        </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ url('admin/riwayat-donasi') }}" class="px-6 py-2 font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        Cancel
        </a>
    </div>
    </div>

</x-Admin.layout>