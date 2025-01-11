<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-semibold mb-2">
         @if(Route::is('admin.compaign.edit'))
             Edit Campaign
          @else
             Buat Campaign Baru
        @endif
        </h1>
        <form id="form-wizard" action="{{  Route::is('admin.compaign.edit') ? url('admin/compaign/update', $campaign->id) : url('admin/compaign/create') }}" method="post"  enctype="multipart/form-data">
            @csrf
            @if(Route::is('admin.compaign.edit'))
               @method('PUT')
            @endif
            <div>
                  @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                       </div>
                    @endif
                <p class="text-center text-gray-500 mb-6">
                 @if(Route::is('admin.compaign.edit'))
                      Edit Kampanye Anda
                   @else
                         Donasi Halaman Utama
                @endif
                  </p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                         <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                       <input type="text" id="title" name="title" value="{{  old('title') ??  (Route::is('admin.compaign.edit') ? $campaign->title : '') }}" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan judul donasi">
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
                       <input type="file" id="image" name="image"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                       
                        @if(Route::is('admin.compaign.edit'))
                         <img src="{{ asset('storage/' . $campaign->image) }}" class="w-20 h-20" alt="">
                      @endif
                  </div>
                   <div class="col-span-2">
                       <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                       <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi">{{  old('description') ?? (Route::is('admin.compaign.edit') ? $campaign->description : '') }}</textarea>
                  </div>
                  
                     <div>
                        <label for="target_amount" class="block text-sm font-medium text-gray-700">Target Dana</label>
                          <input type="number" id="target_amount" name="target_amount" value="{{  old('target_amount') ?? (Route::is('admin.compaign.edit') ? $campaign->target_amount : '') }}" class="mt-1 p-2 border border-gray-300 rounded-lg w-full" placeholder="Masukkan target dana" step="100000">
                       </div>
                </div>
                <div class="mt-6 flex justify-between">
                   <button type="submit" class="px-4 py-2 bg-teal-700 text-white rounded-lg">Tambah Campaign</button>
                </div>
             </div>
         </form>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-wizard');
  form.addEventListener('submit', function (event) {
      const targetAmountInput = document.getElementById('target_amount');
    let value = targetAmountInput.value;
     
      if(value){
        value = parseInt(value);
      if (value % 100000 !== 0) {
        alert('Target dana harus kelipatan 100.000');
         event.preventDefault();
       }
     }

  });
});
</script>
</x-Admin.layout>