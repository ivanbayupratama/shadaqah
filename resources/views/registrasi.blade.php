<x-layout.app>
    <x-slot:title>Registration</x-slot:title>

<div class="min-h-screen  bg-teal-800  flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

       <div class="bg-white  shadow-lg  rounded-lg  p-6  sm:w-full md:max-w-md  w-10/12 mx-auto   "  >

              
       <div class=" text-center mb-6   ">

                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white ">Registrasi</h2>

                    
              </div>
         <form action="{{ route('register') }}"  method="post"    class="space-y-4">

               @csrf


               <div>

                     <label  for="name" class="block text-sm  font-medium text-gray-700 dark:text-gray-300"> Nama Lengkap  </label>

                    <div class="mt-1">

                       <input type="text"  id="name"   name="name" class="p-2    border  border-gray-300 dark:border-gray-700   rounded-md  w-full  focus:ring-blue-500 focus:border-blue-500  dark:bg-gray-800 dark:text-white "     placeholder="  Nama Anda " required>
                                  </div>
                                 </div>

                        <div>

                            <label for="email"   class="block  text-sm   font-medium  text-gray-700 dark:text-gray-300" > Email </label>

                                <div class="mt-1">

                          <input  type="email"    name="email"    id="email"   class="p-2   border  border-gray-300 dark:border-gray-700   rounded-md  w-full focus:ring-blue-500 focus:border-blue-500   dark:bg-gray-800 dark:text-white  "    placeholder="@gmail.com"    required>
                       </div>
                         </div>

                          <div>

                               <label for="password"    class="block  text-sm  font-medium  text-gray-700 dark:text-gray-300" > Password </label>
                                   <div   class="mt-1"  >

                          <input  type="password"     name="password"    id="password"   class="p-2  border border-gray-300 dark:border-gray-700   rounded-md  w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white "  placeholder="   Password Anda " required>
                                </div>
                           </div>

                   <div>

                              <label for="password_confirmation"  class="block  text-sm font-medium  text-gray-700  dark:text-gray-300">Konfirmasi Password</label>

                      <div class="mt-1">

                            <input type="password"   name="password_confirmation" id="password_confirmation"   class="p-2 border border-gray-300 dark:border-gray-700   rounded-md  w-full   focus:ring-blue-500 focus:border-blue-500   dark:bg-gray-800 dark:text-white  " placeholder="  Ulangi Password Anda" required>
                            </div>
                  </div>

              <div   class="mt-8">
                  <button  type="submit"   class=" w-full   py-2  px-4  bg-green-600 rounded-md text-white   hover:bg-green-700 transition-colors" >Daftar</button>
              </div>


              
               
                <div  class="text-center   mt-4  text-gray-500 dark:text-gray-400 ">
                                   <span>  Sudah punya akun?  <a  href="{{ route('login.show') }}"  class="font-medium  hover:text-blue-500 ">Login di sini.</a></span>

              </div>

               </form>
              </div>


 </div>

 </x-layout.app>