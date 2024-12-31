@extends('layout.app')

@section('title', 'Donasi')

@section('content')
    <div id="app">
        <DonationForm :campaign='@json($campaign)'></DonationForm>  <!-- Penulisan sesuai -->
    </div>
@endsection

@push('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
