@extends('layout.app')

@section('title', 'Home')

@section('content')
    @include('banners.main-banner')
    
    <div id="app">
        <Home :campaigns="{{ json_encode($campaigns) }}" :user="{{ json_encode($user) }}"></Home>
    </div>
@endsection

@push('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
