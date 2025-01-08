<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden mb-10">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-teal-800 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Profile Picture</th>
                        <th scope="col" class="px-4 py-3">Nama User</th>
                        <th scope="col" class="px-4 py-3">Email</th>
                    </tr>
                </thead>
                <tbody id="users-table">
                    @foreach($users as $key => $user)
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $key + 1 }}</th>
                        <td class="px-4 py-3"><img src="{{ asset('storage/' . $user->profile_picture) }}" class="w-8 h-10" alt=""></td>
                        <td class="px-4 py-3">{{ $user->name }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-Admin.layout>
