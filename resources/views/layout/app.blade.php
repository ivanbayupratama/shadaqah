<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
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


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
</head>


<body class="flex flex-col min-h-screen">
    @include('includes.nav')
    <div class="container mx-auto px-4">
        
        @yield('content')
    </div>
   
    @include('includes.footer')
</body>
</html> --}}