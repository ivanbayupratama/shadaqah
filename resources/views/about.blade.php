@extends('layout.app')

@section('title', 'About')

@section('content')
<div class="flex items-center justify-center space-x-6 px-4">
    <!-- Gambar di kiri -->
    <img src="{{ asset('assets/img/logo.jpg') }}" alt="Donation Image" class="w-1/3 rounded-lg shadow-md">

    <!-- Tulisan di kanan -->
    <div class="w-2/3">
        <h1 class="text-2xl font-bold mb-4 text-[#1B3623]">Selamat datang di Shadaqah</h1>
        <p class="text-gray-700 leading-relaxed">
            Platform donasi yang menghubungkan kebaikan hati Anda dengan mereka yang membutuhkan.
            <br><br>
            Kami percaya bahwa setiap orang memiliki kekuatan untuk membuat perbedaan. Dengan visi menciptakan dunia yang
            lebih peduli, kami hadir untuk mempermudah masyarakat dalam berdonasi secara transparan, aman, dan terpercaya.
            <br><br>
            Di Shadaqah, kami bekerja sama dengan mitra terpercaya untuk memastikan bahwa setiap donasi Anda tepat sasaran
            dan memberikan dampak yang nyata. Kami berkomitmen untuk memberikan laporan penggunaan dana yang jelas agar Anda
            dapat berdonasi dengan tenang.
            <br><br>
            Bersama-sama, kita bisa menciptakan perubahan. Mari bergabung dalam perjalanan ini untuk membantu mereka yang
            membutuhkan dan menciptakan dunia yang lebih baik.
        </p>
    </div>
</div>
@endsection
