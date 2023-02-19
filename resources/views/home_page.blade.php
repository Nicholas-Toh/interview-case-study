@extends('master')

@section('title', 'Supplycart - Home')

@push('script')
    @vite(['resources/js/pages/home.js'])
@endpush

@section('header')
    <div class="bg-amber-400 h-24 w-full">
        <div class="w-24 h-20 flex justify-center items-center">
            <div class="w-16">
                <img src="{{ asset('/images/supplycart-logo.png') }}">
            </div>
        </div>
    </div>
@endsection
