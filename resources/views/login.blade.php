<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-teal-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-xl p-6 sm:w-full md:max-w-md w-10/12 mx-auto dark:bg-gray-800">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
        </div>
        
        @if ($errors->any())
           <div x-data="{ open: true }" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert" x-show="open">
              <div class="flex items-center">
                <strong class="font-bold">Oops!</strong>
                <span class="ml-2 flex-grow">{{ $errors->first('login') }}</span>
                  <button type="button" class="ml-4" x-on:click="open = false">
                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M14.348 14.849l-4.849-4.849-4.849 4.849-1.414-1.414 4.849-4.849-4.849-4.849 1.414-1.414 4.849 4.849 4.849-4.849 1.414 1.414-4.849 4.849 4.849 4.849z"/>
                      </svg>
                  </button>
              </div>
           </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <div class="mt-1">
                    <input type="email" id="email" name="email" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" placeholder="email@example.com" required>
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                <div class="mt-1">
                    <input type="password" name="password" id="password" class="p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white" required>
                </div>
            </div>
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Login</button>
            </div>
            <button type="button" class="w-full bg-white dark:bg-gray-200 py-2 px-4 rounded-md border border-gray-300 text-blue-700 dark:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-300 transition-colors">
                Login dengan Google
            </button>
            <div class="text-center mt-4 text-gray-500 dark:text-gray-400">
                <span>Belum punya akun? <a href="{{ route('register.show') }}" class="hover:text-blue-500 font-medium">Daftar di sini.</a></span>
            </div>
        </form>
    </div>
</body>
</html>