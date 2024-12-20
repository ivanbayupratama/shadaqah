<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-semibold mb-2">Selamat datang di Shadaqah.com!</h1>
        <p class="text-center text-gray-500 mb-6">Cuma butuh 3-5 menit untuk verifikasi akun</p>
        <form id="form-wizard">
            <div id="step-1" class="step">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="compaign_name" class="block text-sm font-medium text-gray-700">Nama Compaign</label>
                        <input type="text" id="compaign_name" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama compaign">
                    </div>
                    <div>
                        <label for="company_name" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                        <input type="text" id="company_name" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama perusahaan">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Compaign</label>
                        <input type="email" id="email" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email compaign">
                    </div>
                    <div>
                        <label for="company_address" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                        <input type="text" id="company_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat perusahaan">
                    </div>
                    <div>
                        <label for="collection_date" class="block text-sm font-medium text-gray-700">Tanggal Pengumpulan Donasi</label>
                        <input type="date" id="collection_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full">
                    </div>
                    <div>
                        <label for="present_address" class="block text-sm font-medium text-gray-700">Present Address</label>
                        <input type="text" id="present_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat saat ini">
                    </div>
                    <div>
                        <label for="bank_account" class="block text-sm font-medium text-gray-700">No Rekening Perusahaan</label>
                        <input type="text" id="bank_account" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nomor rekening">
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" id="city" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan kota">
                    </div>
                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal Code</label>
                        <input type="text" id="postal_code" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan kode pos">
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan negara">
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg" onclick="nextStep()">Next</button>
                </div>
            </div>
            <div id="step-2" class="step hidden">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="compaign_name" class="block text-sm font-medium text-gray-700">Nama Compaign</label>
                        <input type="text" id="compaign_name" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama compaign">
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">User Name</label>
                        <input type="text" id="username" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan username">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email campaign">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan password">
                    </div>
                    
                    <div>
                        <label for="collection_date" class="block text-sm font-medium text-gray-700">Tanggal Pengumpulan Donasi</label>
                        <input type="date" id="collection_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full">
                    </div>
                    <div>
                        <label for="present_address" class="block text-sm font-medium text-gray-700">Present Address</label>
                        <input type="text" id="present_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat saat ini">
                    </div>
                    <div>
                        <label for="company_address" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                        <input type="text" id="company_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat perusahaan">
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" id="city" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan kota">
                    </div>
                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal Code</label>
                        <input type="text" id="postal_code" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan kode pos">
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan negara">
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg" onclick="prevStep()">Back</button>
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