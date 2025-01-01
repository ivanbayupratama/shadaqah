<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6 sm:col-span-4">
                <div class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Nama User</div>
                <div class="block text-sm">Muhammad Attar</div>
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Email</div>
                <div class="block text-sm">donasi@gmail.com</div>
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Subjek</div>
                <div class="block text-sm">Mantap</div>
            </div>
            <div class="col-span-12 sm:col-span-12">
                <div class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Deksirpsi</div>
                <div class="block text-sm">Ayo kita Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates et hic possimus cupiditate recusandae amet minus, sequi, nesciunt ut at, soluta blanditiis nobis consequuntur a ad. Distinctio, placeat praesentium! Aspernatur!</div>
            </div>

            <div class="col-span-12 sm:col-full flex flex justify-between">
                <div>
                    <a href="{{ url('admin/layanan-pengguna') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-500 focus:outline-none bg-white rounded-full border border-blue-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-Admin.layout>