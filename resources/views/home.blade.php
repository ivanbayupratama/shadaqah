@extends('layout.app')

    @section('title', 'Home')

    @section('content')

     <div class="container mx-auto mt-8  px-4  ">
           
              <div class="relative  mx-auto max-w-[1200px]  mb-12  " data-carousel="slide">

                   
                <!-- Carousel wrapper -->
           <div class="relative h-56 overflow-hidden rounded-lg md:h-96   ">
            <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/banner/banner1.jpg') }}" class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                     </div>
             <!-- Item 2 -->
                     <div class="hidden duration-700 ease-in-out" data-carousel-item>
                   <img src="{{ asset('assets/banner/banner2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
             <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('assets/banner/banner3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                 </div>

                </div>
                  <!-- Slider indicators -->
                     <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                           <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                           <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                           <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                      </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                 </svg>
                    <span class="sr-only">Previous</span>
              </span>
            </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
             <span class="sr-only">Next</span>
                  </span>
           </button>
       </div>
        
           <h2 class="text-2xl font-semibold text-center text-gray-700 mb-8 ">Daftar Campaign</h2>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
           @php
        $campaigns = App\Models\Campaign::all();
    @endphp
            @foreach($campaigns as $campaign)

    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col min-h-[380px] transform transition-transform duration-200 hover:scale-[1.025]">
          <img src="{{ asset('storage/' . $campaign->image) }}" alt="Campaign Image" class="w-full h-40 object-cover rounded-t-lg mb-4">

     <div class="flex flex-col h-full">
    <h2 class="text-xl font-semibold mb-3">{{ $campaign->title }}</h2>
    <p class="text-gray-700 mb-4 leading-relaxed flex-grow">
             {{ Str::limit($campaign->description, 120) }}
         </p>


         <div class="mb-4 space-y-2">
                   <div class="flex justify-between items-center">
               <span class="text-sm font-medium text-gray-700">Target: Rp{{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
             <span class="text-sm font-medium text-gray-700">Terkumpul: Rp{{ number_format($campaign->collected_amount, 0, ',', '.') }}</span>
            </div>

         <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%" id="progress-bar-{{ $campaign->id }}"></div>
         </div>
           <div class="text-sm font-semibold text-gray-700" id="percentage-{{ $campaign->id }}">0.00%</div>
     </div>

           <a href="{{ url('/campaigns/' . $campaign->id . '/donate') }}" class="mt-4 inline-block w-full bg-green-400 text-white py-2 rounded-lg text-center hover:bg-green-500">Donasi</a>
              </div>

  </div>

      <script>
          document.addEventListener('DOMContentLoaded', function () {
  const campaignId = "{{ $campaign->id }}";
  const targetAmount = parseFloat("{{ $campaign->target_amount }}");
    const collectedAmount = parseFloat("{{ $campaign->collected_amount }}");
  const progressBar = document.getElementById('progress-bar-' + campaignId);
 const percentageDisplay = document.getElementById('percentage-' + campaignId);
        let percentage = 0;
  if (targetAmount > 0) {
    percentage = (collectedAmount / targetAmount) * 100;
 }

    progressBar.style.width = percentage + '%';
   percentageDisplay.textContent = percentage.toFixed(2) + '%';

 });

    </script>

        @endforeach

 </div>


      </div>

   @endsection