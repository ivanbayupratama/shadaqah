<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="gap-6 grid grid-cols-1 md:grid-cols-3  mb-6">
            
        <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-3">
            <div class="flex justify-center items-center w-10 h-10 bg-yellow-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path fill-rule="evenodd" d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"/>
            </svg>
            </div>
            <h2 class="text-sm text-gray-500">Total Campaign</h2>
        </div>
        <p class="mt-4 text-2xl font-bold text-gray-800">$50,000</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-3">
            <div class="flex justify-center items-center w-10 h-10 bg-blue-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
            </svg>
            </div>
            <h2 class="text-sm text-gray-500">Total Donasi</h2>
        </div>
        <p class="mt-4 text-2xl font-bold text-gray-800">$50,000</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-3">
            <div class="flex justify-center items-center w-10 h-10 bg-blue-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
            </svg>
            </div>
            <h2 class="text-sm text-gray-500">Total Penarikan</h2>
        </div>
        <p class="mt-4 text-2xl font-bold text-gray-800">$50,000</p>
        </div>
    </div>

    <form class="mx-auto mb-6">   
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

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-10">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-teal-800 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Nama Compaign</th>
                        <th scope="col" class="px-4 py-3">Nama Perusahaan</th>
                        <th scope="col" class="px-4 py-3">Tanggal Target</th>
                        <th scope="col" class="px-4 py-3">Dana Terkumpul</th>
                        <th scope="col" class="px-4 py-3">Sisa Target</th>
                        <th scope="col" class="px-4 py-3">Target Donasi</th>
                        <th scope="col" class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">01</th>
                        <td class="px-4 py-3">Zakat Fitra</td>
                        <td class="px-4 py-3">Pesantren Al-huda</td>
                        <td class="px-4 py-3">12-02-2024</td>
                        <td class="px-4 py-3">$4,000</td>
                        <td class="px-4 py-3">$8,000</td>
                        <td class="px-4 py-3">$12,000</td>
                        <td class="px-4 py-3 flex items-center">
                        <a href="{{ url('admin/beranda/1
                        ') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-500 focus:outline-none bg-white rounded-full border border-blue-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Detail</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-xs text-red-600 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">Jumlah</td>
                        <td class="px-4 py-3" colspan="5"></td>
                        <td class="px-4 py-3" colspan="2">$12,00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-Admin.layout>