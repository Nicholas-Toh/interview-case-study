@extends('main_layout')

@section('title', 'Supplycart - Home')

@push('script')
    @vite(['resources/js/pages/home.js'])
@endpush

@section('body')
    <Catalog />
@endsection
