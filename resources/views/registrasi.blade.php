<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite('resources/css/app.css') <!-- Sesuaikan jika menggunakan Laravel Vite -->
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Registrasi</h2>
        <form class="space-y-4">
            <!-- Nama Lengkap -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Nama Anda" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="@gmail.com" required>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Password Anda" required>
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Ulangi Password Anda" required>
            </div>

            <!-- Tombol Registrasi -->
            <button type="button" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Daftar</button>
        </form>

        <!-- Link ke Login -->
        <p class="text-sm text-center text-gray-600 mt-4">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login di sini</a>.
        </p>
    </div>
</body>
</html>
