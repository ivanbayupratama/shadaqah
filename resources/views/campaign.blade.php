@extends('layout.app')

@section('title', 'Buat Kampanye Baru')

@section('content')
    <div id="app">
        <CampaignPage />
    </div>
@endsection

@push('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
