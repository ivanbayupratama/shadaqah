@extends('layout.app')

@section('title', 'Home')

@section('content')
    @include('banners.main-banner')
    
    
    <div class="grid grid-cols-3 md:grid-cols-3 gap-2">
@foreach($campaigns as $campaign)
<div class="mt-10 max-w-sm min-h-[28rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col transform transition-transform duration-200 hover:scale-105 hover:shadow-lg">
    <a href="#">
        <img class="rounded-t-lg h-48 w-full object-cover" src="{{ asset('assets/banner/banner1.jpg') }}" alt="Campaign Image" />
    </a>
    <div class="flex-1 p-5 flex flex-col justify-between">
        <div>
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white truncate">{{ $campaign->title }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 truncate">{{ $campaign->description }}</p>
            <div class="mb-4 flex items-center">
                <span class="text-sm text-gray-700 dark:text-gray-400">{{ $campaign->organization }}</span>
            </div>
        </div>
        <a href="#" class="block w-full text-center px-5 py-3 mt-4 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Donasi
        </a>
    </div>
</div>





@endforeach
</div>
@endsection

@push('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
