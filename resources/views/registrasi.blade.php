<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-teal-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-lg rounded-lg p-6 sm:w-full md:max-w-md w-10/12 mx-auto dark:bg-gray-800">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Registrasi</h2>
        </div>

         @if ($errors->any())
            <div x-data="{ open: true }" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert" x-show="open">
              <div class="flex items-center">
                <strong class="font-bold">Oops!</strong>
                <span class="ml-2 flex-grow">
                 @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                 @endforeach
               </span>
                  <button type="button" class="ml-4" x-on:click="open = false">
                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M14.348 14.849l-4.849-4.849-4.849 4.849-1.414-1.414 4.849-4.849-4.849-4.849 1.414-1.414 4.849 4.849 4.849-4.849 1.414 1.414-4.849 4.849 4.849 4.849z"/>
                      </svg>
                  </button>
              </div>
           </div>
        @endif


        @if(session('success'))
            <div x-data="{ open: true }" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert" x-show="open">
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
        
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                <div class="mt-1">
                    <input type="text" id="name" name="name" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Nama Anda" required>
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <div class="mt-1">
                    <input type="email" id="email" name="email" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" placeholder="email@example.com" required>
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                <div class="mt-1">
                    <input type="password" name="password" id="password" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Password Anda" required>
                </div>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Konfirmasi Password</label>
                <div class="mt-1">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Ulangi Password Anda" required>
                </div>
            </div>
            <div class="mt-8">
                <button type="submit" class="w-full py-2 px-4 bg-green-600 rounded-md text-white hover:bg-green-700 transition-colors">Daftar</button>
            </div>
            <div class="text-center mt-4 text-gray-500 dark:text-gray-400">
                <span>Sudah punya akun? <a href="{{ route('login.show') }}" class="font-medium hover:text-blue-500">Login di sini.</a></span>
            </div>
        </form>
    </div>
</body>
</html>