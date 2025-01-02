<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-semibold mb-2">Edit Campaign</h1>
        <form id="form-wizard" action="{{ url('admin/compaign/update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <p class="text-center text-gray-500 mb-6">Edit Kampanye Anda</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan judul donasi">
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
                        <input type="file" id="image" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi"></textarea>
                    </div>
                   
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Save</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        let currentStep = 1;
        function nextStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep++;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');
        }
        function prevStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep--;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');
        }
    </script>
</x-Admin.layout>
