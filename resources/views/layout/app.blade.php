<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> <!-- Tambahkan Alpine.js -->
</head>

<body class="flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900">

    {{-- Header/Nav --}}
    @include('includes.nav')

    {{-- Konten Utama --}}
    <main class="flex-1 container mx-auto px-4 pt-6 pb-8">
        
        {{-- Notifikasi Sukses --}}
        @if(session('success'))
            <div x-data="{ open: true }" class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-lg" role="alert" x-show="open">
                <div class="flex items-center">
                    <p class="flex-grow">{{ session('success') }}</p>
                    <button type="button" class="ml-4" x-on:click="open = false">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849l-4.849-4.849-4.849 4.849-1.414-1.414 4.849-4.849-4.849-4.849 1.414-1.414 4.849 4.849 4.849-4.849 1.414 1.414-4.849 4.849 4.849 4.849z"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        {{-- Notifikasi Error --}}
        @if($errors->any())
            <div x-data="{ open: true }" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-lg" role="alert" x-show="open">
                <div class="flex items-center">
                    <p class="flex-grow">{{ $errors->first() }}</p>
                    <button type="button" class="ml-4" x-on:click="open = false">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849l-4.849-4.849-4.849 4.849-1.414-1.414 4.849-4.849-4.849-4.849 1.414-1.414 4.849 4.849 4.849-4.849 1.414 1.414-4.849 4.849 4.849 4.849z"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-teal-800 py-6 text-white  bottom-0 ">
        <div class="container mx-auto px-4 flex  flex-col md:flex-row md:justify-between items-center">
            
            
             <a class="flex items-center text-2xl font-semibold mb-4 md:mb-0" href="/">
               <img class="h-8" src="{{ asset('assets/shadq.png') }}" alt="" srcset="">
                  <span class="ml-2"> Shadaqah</span></a>
      

          
        <div class="flex  mt-8  md:mt-0  justify-center  flex-wrap">
          
         <div class=" mr-12  ">
                        <p  class="text-teal-200">RESOURCES</p>
                        <ul class="mt-2 text-xs md:text-sm  text-left">
                       <li  class="hover:text-gray-300 cursor-pointer my-1 ">  <a href="#">Explore Campaigns</a> </li>
                    <li   class="hover:text-gray-300 cursor-pointer  my-1" ><a href="#">How to Donate</a> </li>
                        <li class="hover:text-gray-300 cursor-pointer  my-1"><a href="#">Start a Fundraiser</a></li>
                         </ul>
                       </div>
       
                     <div  class=" mr-12 " >
                      <p class="text-teal-200" > FOLLOW US</p>
                      <ul class="mt-2 text-xs md:text-sm text-left">
                        <li   class="hover:text-gray-300 cursor-pointer my-1">
                          <a href="https://www.facebook.com/yourpage"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.436-3.582-8.05-8-8.05C3.58 0-.002 3.614-.002 8.05c0 4.013 2.923 7.35 6.751 7.951v-5.612h-2.03V8.05H6.751V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.751-3.94 6.751-7.951z"/>
                          </svg> Facebook</a></li>
                         <li  class="hover:text-gray-300 cursor-pointer my-1">  <a href="https://www.twitter.com/yourpage">   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 5.154 2.278a9.779 9.779 0 0 1 4.716 2.156 3.301 3.301 0 0 0-.513 1.317 3.285 3.285 0 0 0 .686 1.067 3.301 3.301 0 0 1-1.022-.269 3.285 3.285 0 0 0 1.024 1.165 3.301 3.301 0 0 1-1.576.232 3.285 3.285 0 0 0 1.024 1.067A6.511 6.511 0 0 1 2.634 13.238 11.679 11.679 0 0 0 7.216 15z"/>
                               </svg>  Twitter   </a></li>
                         <li  class="hover:text-gray-300 cursor-pointer  my-1"> <a href="https://www.instagram.com/yourpage">    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                   <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.346 2.585.726 1.91.948 1.165 1.497.701 2.185a25.246 25.246 0 0 0-.275 4.513c0 2.332.264 3.255.524 3.735.25.448.547.719.943.899.643.269 1.354.332 2.23.358.337.01.739.01 1.046 0 .619-.032 1.108-.142 1.728-.353.423-.19.867-.445 1.489-.735.419.238.814.483 1.06.746.252.289.51.558.783.807.286.24.72.424 1.022.524.497.121 1.077.095 1.701-.074 2.805-.364 3.205-.675 3.418-1.485.217-.82.187-1.477-.055-2.26.105-.503.305-1.128.482-1.344.191-.212.347-.38.393-.444a.368.368 0 0 0-.145-.035c-.304-.047-.515-.108-.686-.163-.276-.08-.65-.305-1.133-.59.592-.159 1.132-.415 1.6-.649-.236-.228-.46-.54-.46-.82a1.099 1.099 0 0 1 .256-.261c.018-.007.035-.017.05-.023.18-.032.355-.061.7-.101z"/>
                 </svg> Instagram </a>
                </li>
                         </ul>
                         </div>
              <div   >
                       <p class="text-teal-200" >LEGAL</p>
                    <ul  class="mt-2 text-xs md:text-sm text-left">
                            <li class="hover:text-gray-300 cursor-pointer my-1" >  <a href="#">Terms of Service</a> </li>
                         <li class="hover:text-gray-300 cursor-pointer my-1" > <a href="#">Donation Policy</a></li>
                        <li class="hover:text-gray-300 cursor-pointer  my-1" ><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>


               </div>
               

                     
              <div   class="text-xs text-left">
                 
              
              </div>
           <div  class=" flex  space-x-4  mt-6 md:mt-0 justify-center  items-center">

                         
                          
                   <a href="https://www.discord.com/yourpage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                   <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.485.832-.504.666-1.06 1.446-1.615 2.159a.05.05 0 0 0 .015.058c.162.218.32.437.471.718a12.252 12.252 0 0 0 .236.194c.105.148.21.294.29.464a.072.072 0 0 0 .028.029c.177.18.331.356.512.537a9.6 9.6 0 0 0 .078.113c.38.36.74.704 1.034 1.016.358.376.716.744 1.036 1.039.213.204.401.317.58.384.076.027.13.04.17.044a.07.07 0 0 0 .08-.007c.182-.11.36-.226.52-.322.253-.154.487-.296.71-.418a.066.066 0 0 0-.002-.058c-.172-.267-.346-.547-.531-.821-.34-.478-.635-.836-.941-1.142a.043.043 0 0 0-.009-.01c-.229-.299-.468-.637-.731-.926-.22-.23-.474-.502-.633-.71-.131-.175-.248-.354-.354-.568zM5.753 12.598a.05.05 0 0 1-.036-.037c-.114-.18-.233-.346-.372-.523-.481-.662-.788-1.442-.788-2.158 0-.716.307-1.496.788-2.158.139-.177.258-.343.372-.523a.06.06 0 0 1 .047-.037 10.206 10.206 0 0 1 .47-.328 10.05 10.05 0 0 1-.351 3.266c.101.319.213.635.356.932a.045.045 0 0 1-.035.025l-.003.001zm1.075-2.119a.05.05 0 0 1-.021-.043c-.195-.424-.346-.867-.346-1.303 0-.436.151-.879.346-1.303a.048.048 0 0 1 .031-.032c.222.184.447.345.654.479a.053.053 0 0 1-.011.057 8.058 8.058 0 0 1-.031 2.617 9.92 9.92 0 0 1-.637.498zm3.212-1.33c-.195.215-.442.377-.741.481a.065.065 0 0 1-.003-.034 11.46 11.46 0 0 1 .258-2.795.05.05 0 0 1-.006-.054.139.139 0 0 0 .232-.024.05.05 0 0 1 .025.016c.203.143.411.295.584.463.14.157.227.39.233.603a.05.05 0 0 1-.02.049z"/>
                   </svg>
                     </a>

                 <a href="https://github.com/yourpage">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                     <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.64-.08 1.1.48 1.42.97.83 1.5 1.69 1.81 2.02.21.21.34.48.34.79 0 1.19-.87 2.15-2.17 2.61-.17.04-.34.06-.51.06-1.95 0-3.25-1.44-3.25-3.45 0-.78.28-1.43.72-1.93-.23-.7-.7-1.06-1.42-.56.08.18.33.25.51.32.25.21.68.1.75-.48.07-.65.27-1.23.55-1.61-.43-.9-.77-1.61-1.9-2.46-.23-.59-.17-1.14.06-1.49.61-.11 1.35.35 1.48 1.14.44.36.82 1.02 1.1 1.23.17.09.31.24.36.4.05.21.17.36.51.36 1.02 0 1.87-.81 1.87-2.15 0-.55-.23-1.1-.59-1.38-.08-.18-.13-.42-.04-.59.16-.44.37-.97 1.23-.61.83.37 1.72 1.28 1.89 2.5.21 1.27 1.23 2.38 2.6 2.38.27 0 .38-.1.55-.13 1.43-.33 2.99-1.15 2.99-3.36 0-1.52-.07-2.67-.68-3.52-.08-.14-.26-.39-.67-.31z"/>
                     </svg> </a>

                        </div>
          </div>
     </footer>
</body>
</html>
