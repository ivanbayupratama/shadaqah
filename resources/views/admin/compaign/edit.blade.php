<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-semibold mb-2">Edit Campaign</h1>
        <form id="form-wizard" action="{{ route('admin.compaign.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Step 1 -->
            <div id="step-1" class="step">
                <p class="text-center text-gray-500 mb-6">Pengisian form terkait campaign</p>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Nama Campaign -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Nama Campaign</label>
                        <input type="text" id="title" name="title" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama campaign" value="{{ old('title', $campaign->title) }}" required>
                    </div>
                    <!-- Nama Perusahaan -->
                    <div>
                        <label for="company_name" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                        <input type="text" id="company_name" name="company_name" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama perusahaan" value="{{ old('company_name', $campaign->company_name) }}" required>
                    </div>
                    <!-- Email Campaign -->
                    <div>
                        <label for="email_campaign" class="block text-sm font-medium text-gray-700">Email Campaign</label>
                        <input type="email" id="email_campaign" name="email_campaign" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email campaign" value="{{ old('email_campaign', $campaign->email_campaign) }}" required>
                    </div>
                    <!-- Alamat Perusahaan -->
                    <div>
                        <label for="company_address" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                        <input type="text" id="company_address" name="company_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat perusahaan" value="{{ old('company_address', $campaign->company_address) }}" required>
                    </div>
                    <!-- Tanggal Pengumpulan Donasi -->
                    <div>
                        <label for="donation_collection_date" class="block text-sm font-medium text-gray-700">Tanggal Pengumpulan Donasi</label>
                        <input type="date" id="donation_collection_date" name="donation_collection_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" value="{{ old('donation_collection_date', $campaign->donation_collection_date->format('Y-m-d')) }}" required>
                    </div>
                    <!-- No Telp Perusahaan -->
                    <div>
                        <label for="company_phone" class="block text-sm font-medium text-gray-700">No Telp Perusahaan</label>
                        <input type="text" id="company_phone" name="company_phone" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no telp perusahaan" value="{{ old('company_phone', $campaign->company_phone) }}" required>
                    </div>
                    <!-- Tanggal Target Donasi -->
                    <div>
                        <label for="donation_target_date" class="block text-sm font-medium text-gray-700">Tanggal Target Donasi</label>
                        <input type="date" id="donation_target_date" name="donation_target_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal target donasi" value="{{ old('donation_target_date', $campaign->donation_target_date->format('Y-m-d')) }}" required>
                    </div>
                    <!-- Email Perusahaan -->
                    <div>
                        <label for="company_email" class="block text-sm font-medium text-gray-700">Email Perusahaan</label>
                        <input type="email" id="company_email" name="company_email" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email perusahaan" value="{{ old('company_email', $campaign->company_email) }}" required>
                    </div>
                    <!-- Target Donasi -->
                    <div>
                        <label for="target_donasi" class="block text-sm font-medium text-gray-700">Target Donasi</label>
                        <input type="number" id="target_donasi" name="target_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan target donasi" value="{{ old('target_donasi', $campaign->target_donasi) }}" required>
                    </div>
                    <!-- No Rekening Campaign -->
                    <div>
                        <label for="account_number" class="block text-sm font-medium text-gray-700">No Rekening Campaign</label>
                        <input type="text" id="account_number" name="account_number" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no rekening campaign" value="{{ old('account_number', $campaign->account_number) }}" required>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg" onclick="nextStep()">Next</button>
                </div>
            </div>
            <!-- Step 2 -->
            <div id="step-2" class="step hidden">
                <p class="text-center text-gray-500 mb-6">Pengisian terkait tanggung jawab</p>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Nama Penanggung Jawab -->
                    <div>
                        <label for="responsible_name" class="block text-sm font-medium text-gray-700">Nama Penanggung Jawab</label>
                        <input type="text" id="responsible_name" name="responsible_name" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama penanggung jawab" value="{{ old('responsible_name', $campaign->responsible_name) }}" required>
                    </div>
                    <!-- No Id Penanggung Jawab -->
                    <div>
                        <label for="responsible_id_number" class="block text-sm font-medium text-gray-700">No Id Penanggung Jawab</label>
                        <input type="text" id="responsible_id_number" name="responsible_id_number" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no id penanggung jawab" value="{{ old('responsible_id_number', $campaign->responsible_id_number) }}" required>
                    </div>
                    <!-- No Telepon Penanggung Jawab -->
                    <div>
                        <label for="responsible_phone" class="block text-sm font-medium text-gray-700">No Telepon Penanggung Jawab</label>
                        <input type="text" id="responsible_phone" name="responsible_phone" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no telepon penanggung jawab" value="{{ old('responsible_phone', $campaign->responsible_phone) }}" required>
                    </div>
                    <!-- Alamat Penanggung Jawab -->
                    <div>
                        <label for="responsible_address" class="block text-sm font-medium text-gray-700">Alamat Penanggung Jawab</label>
                        <input type="text" id="responsible_address" name="responsible_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat penanggung jawab" value="{{ old('responsible_address', $campaign->responsible_address) }}" required>
                    </div>
                    <!-- Email Penanggung Jawab -->
                    <div>
                        <label for="responsible_email" class="block text-sm font-medium text-gray-700">Email Penanggung Jawab</label>
                        <input type="email" id="responsible_email" name="responsible_email" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email penanggung jawab" value="{{ old('responsible_email', $campaign->responsible_email) }}" required>
                    </div>
                    <!-- Present Address -->
                    <div>
                        <label for="present_address" class="block text-sm font-medium text-gray-700">Present Address</label>
                        <input type="text" id="present_address" name="present_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan present address" value="{{ old('present_address', $campaign->present_address) }}" required>
                    </div>
                    <!-- Tanggal Lahir Penanggung Jawab -->
                    <div>
                        <label for="responsible_birth_date" class="block text-sm font-medium text-gray-700">Tanggal Lahir Penanggung Jawab</label>
                        <input type="date" id="responsible_birth_date" name="responsible_birth_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal lahir penanggung jawab" value="{{ old('responsible_birth_date', $campaign->responsible_birth_date->format('Y-m-d')) }}" required>
                    </div>
                    <!-- Kota -->
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">Kota</label>
                        <input type="text" id="city" name="city" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan city" value="{{ old('city', $campaign->city) }}" required>
                    </div>
                    <!-- No Id -->
                    <div>
                        <label for="no_id" class="block text-sm font-medium text-gray-700">No Id</label>
                        <input type="number" id="no_id" name="no_id" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no id" value="{{ old('no_id', $campaign->no_id) }}" required>
                    </div>
                    <!-- Negara -->
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Negara</label>
                        <input type="text" id="country" name="country" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan country" value="{{ old('country', $campaign->country) }}" required>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg" onclick="prevStep()">Back</button>
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg" onclick="nextStep()">Next</button>
                </div>
            </div>
            <!-- Step 3 -->
            <div id="step-3" class="step hidden">
                <p class="text-center text-gray-500 mb-6">Donasi Halaman Utama</p>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Judul Donasi -->
                    <div>
                        <label for="donation_title" class="block text-sm font-medium text-gray-700">Judul Donasi</label>
                        <input type="text" id="donation_title" name="donation_title" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan judul donasi" value="{{ old('donation_title', $campaign->donation_title) }}" required>
                    </div>
                    <!-- Foto Utama Donasi -->
                    <div>
                        <label for="main_photo_donation" class="block text-sm font-medium text-gray-700">Foto Utama Donasi</label>
                        <input id="main_photo_donation" name="main_photo_donation" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" type="file">
                        @if($campaign->main_photo_donation)
                            <img src="{{ asset('storage/' . $campaign->main_photo_donation) }}" alt="Main Photo Donation" class="mt-2 w-full h-auto">
                        @endif
                    </div>
                    <!-- Deskripsi Donasi -->
                    <div class="col-span-2">
                        <label for="donation_description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="donation_description" name="donation_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" placeholder="Masukkan deskripsi" required>{{ old('donation_description', $campaign->donation_description) }}</textarea>
                    </div>
                    <!-- Program Donasi -->
                    <div>
                        <label for="donation_program" class="block text-sm font-medium text-gray-700">Program Donasi</label>
                        <input type="text" id="donation_program" name="donation_program" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Pendidikan, zakat, bantuan alam" value="{{ old('donation_program', $campaign->donation_program) }}" required>
                    </div>
                    <!-- Target Donasi -->
                    <div>
                        <label for="donation_target" class="block text-sm font-medium text-gray-700">Target Donasi</label>
                        <input type="number" id="donation_target" name="donation_target" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan target donasi" value="{{ old('donation_target', $campaign->donation_target) }}" required>
                    </div>
                    <!-- Foto di Deskripsi Donasi -->
                    <div>
                        <label for="donation_description_photo" class="block text-sm font-medium text-gray-700">Foto di Deskripsi Donasi</label>
                        <input id="donation_description_photo" name="donation_description_photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" type="file">
                        @if($campaign->donation_description_photo)
                            <img src="{{ asset('storage/' . $campaign->donation_description_photo) }}" alt="Donation Description Photo" class="mt-2 w-full h-auto">
                        @endif
                    </div>
                    <!-- Tanggal Pembuatan Donasi -->
                    <div>
                        <label for="donation_creation_date" class="block text-sm font-medium text-gray-700">Tanggal Pembuatan Donasi</label>
                        <input type="date" id="donation_creation_date" name="donation_creation_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal pembuatan donasi" value="{{ old('donation_creation_date', $campaign->donation_creation_date->format('Y-m-d')) }}" required>
                    </div>
                    <!-- Tanggal Target Donasi -->
                    <div>
                        <label for="donation_target_date" class="block text-sm font-medium text-gray-700">Tanggal Target Donasi</label>
                        <input type="date" id="donation_target_date" name="donation_target_date" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal target donasi" value="{{ old('donation_target_date', $campaign->donation_target_date->format('Y-m-d')) }}" required>
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
