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
    @include('includes.footer')

    {{-- Skrip yang di-push dari child views --}}
    @stack('scripts')
</body>
</html>
