@extends('layout.app')

@section('title', 'Donasi')

@section('content')
    <div class="container mx-auto mt-8 px-4 flex justify-center">
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col max-w-md md:max-w-lg dark:bg-gray-800 w-full">
               
          <div class="relative w-full h-40 mb-4 overflow-hidden rounded-t-lg bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $campaign->image) }}')"></div>

        <div  class="flex  flex-col h-full" >
      
          <h2  class="text-2xl font-semibold text-gray-900 dark:text-white mb-1"  >{{ $campaign->title }}</h2>
       <p class="text-gray-700 dark:text-gray-300  text-sm  mb-4 leading-relaxed"> {{ Str::limit($campaign->description, 100) }}</p>

          <div  class="mb-4  space-y-2">
            <div  class="flex  justify-between   items-center" >
       
               <span  class="text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">Target: Rp{{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
             <span  class="text-sm   font-medium    text-gray-700  dark:text-gray-200 whitespace-nowrap">Terkumpul: Rp{{ number_format($campaign->collected_amount, 0, ',', '.') }}</span>
        </div>
        
        <div  class="w-full    bg-gray-200   rounded-full h-2.5    dark:bg-gray-700"  >

              <div    class="bg-blue-600   h-2.5  rounded-full"   style="width:  @if($campaign->target_amount > 0) {{ ($campaign->collected_amount / $campaign->target_amount) * 100 }}% @else 0% @endif"></div>

                </div>
                     <div   class="text-sm  font-semibold   text-gray-700 dark:text-gray-200">
                          @if($campaign->target_amount > 0)
                         {{ number_format(($campaign->collected_amount / $campaign->target_amount) * 100, 2) }}%
                           @else
                               0.00%
                           @endif
                    </div>

            </div>
         <form   action="{{ url('/campaigns/' . $campaign->id . '/donate') }}" method="POST"  class="space-y-4 mt-6">
                @csrf

            <div class="flex  gap-2   mb-4 items-start">
              <label  class="block  text-sm font-medium    text-gray-700    dark:text-gray-300 whitespace-nowrap" >Pilih Nominal:</label>
                 <div  class="flex  flex-wrap  gap-1 items-start ">
                 
              <button   type="button"  onclick="document.getElementById('amount').value = 5000"  class=" select-button   py-2   px-4 text-sm    font-medium  focus:outline-none   bg-white   rounded-full  border  border-gray-200  hover:bg-gray-100  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400   dark:border-gray-600 dark:hover:text-white  dark:hover:bg-gray-700  whitespace-nowrap">Rp 5.000</button>
               <button type="button"  onclick="document.getElementById('amount').value = 10000"    class="select-button    py-2    px-4    text-sm font-medium  focus:outline-none   bg-white  rounded-full    border    border-gray-200  hover:bg-gray-100 hover:text-blue-700    focus:z-10   focus:ring-4   focus:ring-gray-100   dark:bg-gray-800   dark:text-gray-400  dark:border-gray-600   dark:hover:text-white   dark:hover:bg-gray-700  whitespace-nowrap">Rp 10.000</button>
             <button   type="button"   onclick="document.getElementById('amount').value = 20000" class="select-button   py-2  px-4    text-sm    font-medium    focus:outline-none     bg-white     rounded-full border   border-gray-200 hover:bg-gray-100   hover:text-blue-700    focus:z-10    focus:ring-4  focus:ring-gray-100    dark:bg-gray-800  dark:text-gray-400 dark:border-gray-600    dark:hover:text-white  dark:hover:bg-gray-700  whitespace-nowrap" >Rp 20.000</button>
              <button type="button"  onclick="document.getElementById('amount').value = 50000"  class="select-button   py-2   px-4  text-sm   font-medium   focus:outline-none   bg-white   rounded-full    border border-gray-200 hover:bg-gray-100  hover:text-blue-700 focus:z-10   focus:ring-4 focus:ring-gray-100   dark:bg-gray-800 dark:text-gray-400   dark:border-gray-600   dark:hover:text-white  dark:hover:bg-gray-700   whitespace-nowrap" >Rp 50.000</button>
                 
        <button  type="button" onclick="document.getElementById('amount').value = 100000"  class=" select-button    py-2    px-4  text-sm     font-medium  focus:outline-none    bg-white   rounded-full  border   border-gray-200   hover:bg-gray-100 hover:text-blue-700 focus:z-10  focus:ring-4    focus:ring-gray-100  dark:bg-gray-800 dark:text-gray-400    dark:border-gray-600   dark:hover:text-white  dark:hover:bg-gray-700 whitespace-nowrap"   >Rp 100.000</button>
                  </div>
           </div>
       <div>
                  <label for="amount"   class="block  text-sm font-medium    text-gray-700 dark:text-gray-300" >Jumlah Donasi</label>
           <div  class="mt-1">
     <input type="number"   id="amount"    name="amount"   class="select-input    p-2  border    border-gray-300  dark:border-gray-700     rounded-md  w-full  focus:ring-blue-500   focus:border-blue-500    dark:bg-gray-800  dark:text-white no-spinners"  placeholder="Masukkan jumlah donasi"  required>
                      </div>
                 </div>

           <div   class="mt-6   flex justify-center">
                <button type="submit"    class="w-full    py-2     px-4  rounded-lg     text-white   bg-green-600  hover:bg-green-700   transition-colors">Kirim</button>
              </div>
       </form>
        <button onclick="window.location.href = '/';" type="button"  class="mt-6    text-center     w-full     py-2  px-4    rounded-lg   text-white bg-red-500  hover:bg-red-600  transition-colors">Kembali</button>

         </div>
  </div>

    <style>
         .select-input:focus {
              outline: none !important;
            border-color: #56ccf2;
         box-shadow: 0 0 0 2px #56ccf233 !important;
      }
       .select-button:focus,.select-button:focus-visible{
             box-shadow: none;
             border-color:#56ccf2;
                outline: none;
              }
     .no-spinners::-webkit-outer-spin-button,
          .no-spinners::-webkit-inner-spin-button {
           -webkit-appearance: none;
              margin: 0;
             }
            .no-spinners {
             -moz-appearance: textfield;
            }
    </style>
</div>
@endsection