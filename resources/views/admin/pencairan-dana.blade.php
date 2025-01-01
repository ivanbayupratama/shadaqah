<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-10">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Nama Compaign</th>
                        <th scope="col" class="px-4 py-3">Nama Perusahaan</th>
                        <th scope="col" class="px-4 py-3">Tanggal Donasi</th>
                        <th scope="col" class="px-4 py-3">Interest Rate</th>
                        <th scope="col" class="px-4 py-3">Donasi</th>
                        <th scope="col" class="px-4 py-3">Cairkan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">01</th>
                        <td class="px-4 py-3">Zakat Fitra</td>
                        <td class="px-4 py-3">Pesantren Al-huda</td>
                        <td class="px-4 py-3">24-12-2024</td>
                        <td class="px-4 py-3">12%</td>
                        <td class="px-4 py-3">$2,00/month</td>
                        <td class="px-4 py-3 flex items-center">
                        <a href="{{ url('admin/pencairan-dana/metode-pencairan') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cairkan</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-xs text-red-600 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">Jumlah</td>
                        <td class="px-4 py-3" colspan="4"></td>
                        <td class="px-4 py-3" colspan="2">$2,00/month</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-Admin.layout>