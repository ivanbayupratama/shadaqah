@extends('layout.app')

@section('title', 'About Us')

@section('content')
 <div class="bg-white dark:bg-gray-800 py-12 ">
 <div class="container mx-auto px-4  space-y-8  ">

   <div class="text-center  ">
 <h2 class="text-3xl font-semibold  mb-4 dark:text-white">Selamat datang di Shadaqah</h2>
 <p class="text-gray-600 dark:text-gray-300  max-w-3xl mx-auto leading-relaxed">
     Platform donasi yang menghubungkan kebaikan hati Anda dengan mereka yang membutuhkan.
 </p>
    </div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    
  <div class=" flex justify-center mb-4 md:mb-0  ">

  <div  class="bg-gray-50 rounded-lg overflow-hidden p-4 shadow-lg dark:bg-gray-700 w-full max-w-xs flex justify-center align-middle ">
         <img class="object-cover rounded-t-lg w-48  h-48"  src="{{ asset('assets/shadq.png') }}" alt="Shadaqah" >
  </div>


      </div>
 <div class="dark:text-white">

  <p  class=" leading-relaxed text-gray-700  dark:text-gray-300  ">Kami percaya bahwa setiap orang memiliki kekuatan untuk membuat perbedaan. Dengan visi menciptakan dunia yang lebih peduli, kami hadir untuk mempermudah masyarakat dalam berdonasi secara transparan, aman, dan terpercaya.</p>
    <p   class="leading-relaxed mt-4 text-gray-700  dark:text-gray-300">Di Shadaqah, kami bekerja sama dengan mitra terpercaya untuk memastikan bahwa setiap donasi Anda tepat sasaran dan memberikan dampak yang nyata. Kami berkomitmen untuk memberikan laporan penggunaan dana yang jelas agar Anda dapat berdonasi dengan tenang.</p>
     <p    class="leading-relaxed mt-4  text-gray-700 dark:text-gray-300"> Bersama-sama, kita bisa menciptakan perubahan. Mari bergabung dalam perjalanan ini untuk membantu mereka yang membutuhkan dan menciptakan dunia yang lebih baik.</p>
 </div>
 </div>
  
    <div class="bg-gray-100 rounded-lg dark:bg-gray-700 py-8 px-6 ">
                <h3 class="text-2xl font-semibold mb-4 dark:text-white text-center">Our Core Principles</h3>
               
    
                 <div  class="grid  md:grid-cols-2 gap-6 "  >
                      
                     <div class="space-y-4   text-center  p-2">

                                   <div class=" text-xl font-semibold dark:text-gray-100" >Transparency</div>
                                      <p  class="leading-relaxed  text-gray-700  dark:text-gray-300" > We provide complete disclosure for every funds use.</p>

                           </div>
                  <div class="space-y-4  text-center   p-2" >

                             <div   class="text-xl font-semibold  dark:text-gray-100" > Accountability </div>

                        <p  class="leading-relaxed   text-gray-700  dark:text-gray-300">  We do regular auditing to  account for the fund management </p>
                    </div>
                <div  class="space-y-4  text-center    p-2">
                    <div    class=" text-xl font-semibold dark:text-gray-100"> Integrity</div>

                     <p    class="leading-relaxed text-gray-700  dark:text-gray-300" >  We follow best practices  and high standards of care and operation </p>
                   </div>
                  <div class="space-y-4    text-center p-2">

                              <div  class=" text-xl font-semibold dark:text-gray-100"> Community</div>
                              <p   class=" leading-relaxed text-gray-700  dark:text-gray-300">  We work together  with  people  to improve the society for  good.</p>

                        </div>
                 </div>
          </div>



 </div>
  </div>

    @endsection