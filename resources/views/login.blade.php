<x-layout.app>
    <x-slot:title>Login</x-slot:title>
        <div class="min-h-screen  bg-teal-800  flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

                <div class="bg-white rounded-lg shadow-xl  p-6 sm:w-full  md:max-w-md w-10/12 mx-auto " >

                 
                 <div class=" text-center mb-6  ">

                      <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
                 </div>
                    <form action="{{ route('login') }}" method="post" class="space-y-4">
                        @csrf

                        <div>
                           <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Email </label>

                            <div class="mt-1">
                          <input type="email"  id="email"   name="email"   class=" p-2   border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white "   placeholder="   @gmail.com"  required   >
                           </div>
                          </div>


                                 <div>

                         <label for="password"  class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>

                             <div  class="mt-1" >

                      <input type="password"    name="password"  id="password"    class=" p-2   border  border-gray-300 dark:border-gray-700 rounded-md  w-full  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white"  required  />
                      </div>
                     </div>

                       
                     <div>

                     <button type="submit"   class=" w-full    py-2 px-4  rounded-md  bg-blue-600 text-white hover:bg-blue-700   transition-colors ">
                    Login
                  </button>
                     </div>

                   <button type="button" class="w-full bg-white dark:bg-gray-200 py-2 px-4 rounded-md border  border-gray-300   text-blue-700 dark:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-300 transition-colors  ">

                      Login dengan Google
               </button>

              
      <div class="text-center  mt-4 text-gray-500 dark:text-gray-400 ">
          <span >Belum punya akun?  <a  href="{{ route('register.show') }}"  class="hover:text-blue-500 font-medium">Daftar di sini.</a></span>
           </div>
          
                    </form>


                </div>
         </div>
 </x-layout.app>