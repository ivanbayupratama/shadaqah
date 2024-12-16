<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css') <!-- Sesuaikan jika Anda menggunakan Laravel Vite -->
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Masukin Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="@gmail.com" required>
            </div>

            <!-- Masukin Password  -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="" required>
            </div>

            <!-- Tombol -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
        </form>

        <!-- Kalo belum punya akun -->
        <p class="text-sm text-center text-gray-600 mt-4">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar di sini</a>.
        </p>
    </div>
</body>
</html>
