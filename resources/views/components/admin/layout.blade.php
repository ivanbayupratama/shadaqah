<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logoapp.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900">

    {{-- Navbar dan Sidebar --}}
    <x-Admin.Navbar></x-Admin.Navbar>
    <x-Admin.Sidebar></x-Admin.Sidebar>

    <main class="ml-64">

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

        <div class="mx-auto max-w-12xl px-4 py-0 sm:px-6 lg:px-8">
            <div class="border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
                <x-admin.header>{{ $title }}</x-admin.header>
                {{ $slot }}
            </div>
        </div>
    </main>
</body>
</html>
