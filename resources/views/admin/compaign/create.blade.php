<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-semibold mb-2">Selamat datang di Shadaqah.com!</h1>
        <form id="form-wizard">
            <div id="step-1" class="step">

                <p class="text-center text-gray-500 mb-6">Pengisian form terkait compaign</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="nama_compaign" class="block text-sm font-medium text-gray-700">Nama Compaign</label>
                        <input type="text" id="nama_compaign" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama compaign">
                    </div>
                    <div>
                        <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                        <input type="text" id="nama_perusahaan" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama perusahaan">
                    </div>
                    <div>
                        <label for="email_perusahaan" class="block text-sm font-medium text-gray-700">Email Compaign</label>
                        <input type="email" id="email_perusahaan" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email compaign">
                    </div>
                    <div>
                        <label for="alamat_perusahaan" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                        <input type="text" id="alamat_perusahaan" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat perusahaan">
                    </div>
                    <div>
                        <label for="tanggal_pengumpulan_donasi" class="block text-sm font-medium text-gray-700">Tanggal Pengumpulan Donasi</label>
                        <input type="date" id="tanggal_pengumpulan_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full">
                    </div>
                    <div>
                        <label for="no_telp_perusahaan" class="block text-sm font-medium text-gray-700">No Telp Perusahaan</label>
                        <input type="text" id="no_telp_perusahaan" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no telp perusahaan">
                    </div>
                    <div>
                        <label for="tanggal_target_donasi" class="block text-sm font-medium text-gray-700">Tanggal Target Donasi</label>
                        <input type="date" id="tanggal_target_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal target donasi">
                    </div>
                    <div>
                        <label for="email_perusahaan" class="block text-sm font-medium text-gray-700">Email Perusahaan</label>
                        <input type="email" id="email_perusahaan" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email perusahaan">
                    </div>
                    <div>
                        <label for="target_donasi" class="block text-sm font-medium text-gray-700">Target Donasi</label>
                        <input type="text" id="target_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan target donasi">
                    </div>
                    <div>
                        <label for="no_rek_compaign" class="block text-sm font-medium text-gray-700">No Rekening Compaign</label>
                        <input type="text" id="no_rek_compaign" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no rekening compaign">
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg" onclick="nextStep()">Next</button>
                </div>
            </div>
            <div id="step-2" class="step hidden">
                <p class="text-center text-gray-500 mb-6">Pengisian terkait tanggung jawab</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="nama_penanggung_jawab" class="block text-sm font-medium text-gray-700">Nama Penanggung Jawab</label>
                        <input type="text" id="nama_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan nama penanggung jawab">
                    </div>
                    <div>
                        <label for="no_id_penanggung_jawab" class="block text-sm font-medium text-gray-700">No Id Penanggung Jawab</label>
                        <input type="text" id="no_id_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no id penanggung jawab">
                    </div>
                    <div>
                        <label for="no_telepon_penanggung_jawab" class="block text-sm font-medium text-gray-700">No Telepon Penanggung Jawab</label>
                        <input type="text" id="no_telepon_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no telepon penanggung jawab">
                    </div>
                    <div>
                        <label for="alamat_penanggung_jawab" class="block text-sm font-medium text-gray-700">Alamat Penanggung Jawab</label>
                        <input type="text" id="alamat_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan alamat penanggung jawab">
                    </div>
                    
                    <div>
                        <label for="email_penanggung_jawab" class="block text-sm font-medium text-gray-700">Email Penanggung Jawab</label>
                        <input type="email" id="email_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email penanggung jawab">
                    </div>
                    <div>
                        <label for="present_address" class="block text-sm font-medium text-gray-700">Present Address</label>
                        <input type="text" id="present_address" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan present address">
                    </div>
                    <div>
                        <label for="tanggal_lahir_penanggung_jawab" class="block text-sm font-medium text-gray-700">Tanggal Lahir Penanggung Jawab</label>
                        <input type="date" id="tanggal_lahir_penanggung_jawab" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal lahir penanggung jawab">
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" id="city" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan city">
                    </div>
                    <div>
                        <label for="no_id" class="block text-sm font-medium text-gray-700">No Id</label>
                        <input type="number" id="no_id" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan no id">
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan country">
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg" onclick="prevStep()">Back</button>
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg" onclick="nextStep()">Next</button>
                </div>
            </div>
            
            <div id="step-3" class="step hidden">
                <p class="text-center text-gray-500 mb-6">Donasi Halaman Utama</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="judul_donasi" class="block text-sm font-medium text-gray-700">Judul Donasi</label>
                        <input type="text" id="judul_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan judul donasi">
                    </div>
                    <div>
                        <label for="foto_utama_donasi" class="block text-sm font-medium text-gray-700">Foto utama donasi</label>
                        <input id="foto_utama_donasi" name="foto_utama_donasi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi_donasi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="deskripsi_donasi" name="deskripsi_donasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi"></textarea>
                    </div>
                    <div>
                        <label for="program_donasi" class="block text-sm font-medium text-gray-700">Program Donasi</label>
                        <input type="text" id="program_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Pendidikan, zakat, bantuan alam">
                    </div>
                    
                    <div>
                        <label for="target_donasi" class="block text-sm font-medium text-gray-700">Target Donasi</label>
                        <input type="email" id="target_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan email penanggung jawab">
                    </div>
                    <div>
                        <label for="foto_deskripsi" class="block text-sm font-medium text-gray-700">Foto dideskripsi donasi</label>
                        <input id="foto_deskripsi" name="foto_deskripsi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                        
                    </div>
                    <div>
                        <label for="tanggal_pembuatan_donasi" class="block text-sm font-medium text-gray-700">Tanggal Pembuatan Donasi</label>
                        <input type="date" id="tanggal_pembuatan_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal pembuatan donasi">
                    </div>
                    <div>
                        <label for="tanggal_target_donasi" class="block text-sm font-medium text-gray-700">Tanggal Target Donasi</label>
                        <input type="date" id="tanggal_target_donasi" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan tanggal target donasi">
                    </div>
                    
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg" onclick="prevStep()">Back</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Save</button>
                </div>
            </div>

            <div class="step-3" class="step hidden">

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