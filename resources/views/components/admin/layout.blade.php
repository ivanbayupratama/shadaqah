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
<body>
    <x-Admin.Navbar></x-Admin.Navbar>
    <x-Admin.Sidebar></x-Admin.Sidebar>
    <main>
        <div class="mx-auto max-w-12xl px-4 py-0 sm:px-6 lg:px-8">
            <div class="sm:ml-64">
                <div class="border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
                    <x-admin.header>{{ $title }}</x-admin.header>
                    {{ $slot }}
                </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>