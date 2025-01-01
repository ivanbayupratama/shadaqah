<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search ..." required />
            </div>
        </form>
        </div>
        <div class="text-right">
        <a href="{{ url('admin/compaign/create') }}" class="px-6 p-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Tambah
        </a>
        </div>
    </div>
    
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-10">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-teal-800 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Nama Compaign</th>
                        <th scope="col" class="px-4 py-3">Nama Perusahaan</th>
                        <th scope="col" class="px-4 py-3">Tanggal Target</th>
                        <th scope="col" class="px-4 py-3">Nama Penanggung Jawab</th>
                        <th scope="col" class="px-4 py-3">Donasi</th>
                        <th scope="col" class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">01</th>
                        <td class="px-4 py-3">Zakat Fitra</td>
                        <td class="px-4 py-3">Pesantren Al-huda</td>
                        <td class="px-4 py-3">24-02-2024</td>
                        <td class="px-4 py-3">Aditya</td>
                        <td class="px-4 py-3">Rp2.000.000</td>
                        <td class="px-4 py-3 flex items-center">
                        <a href="{{ url('admin/compaign/1/edit') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-500 focus:outline-none bg-white rounded-full border border-blue-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Edit</a>
                        <a href="{{ url('admin/compaign/1/delete') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-500 focus:outline-none bg-white rounded-full border border-blue-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</a>
                            
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-xs text-red-600 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">Jumlah</td>
                        <td class="px-4 py-3" colspan="4"></td>
                        <td class="px-4 py-3" colspan="2">Rp2.000.000</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-Admin.layout>