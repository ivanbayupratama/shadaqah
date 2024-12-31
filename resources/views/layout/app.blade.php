<!DOCTYPE html>
<html lang="en">

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
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')
</body>
</html>
