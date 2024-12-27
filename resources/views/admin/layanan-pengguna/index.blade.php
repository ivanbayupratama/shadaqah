<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
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
                        <th scope="col" class="px-4 py-3">Nama User</th>
                        <th scope="col" class="px-4 py-3">Subjek</th>
                        <th scope="col" class="px-4 py-3">Email</th>
                        <th scope="col" class="px-4 py-3">Pesan</th>
                        <th scope="col" class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">01</th>
                        <td class="px-4 py-3">Muhammad Attar</td>
                        <td class="px-4 py-3">Mantap</td>
                        <td class="px-4 py-3">donasi@gmail.com</td>
                        <td class="px-4 py-3 ">{{ Str::limit('Ayo kita Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et hic possimus cupiditate recusandae amet minus, sequi, nesciunt ut at, soluta blanditiis nobis consequuntur a ad. Distinctio, placeat praesentium! Aspernatur!', 100, '...') }} </td>
                        <td class="px-4 py-3 flex items-center">
                        <a href="{{ url('admin/layanan-pengguna/1') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-500 focus:outline-none bg-white rounded-full border border-blue-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-Admin.layout>