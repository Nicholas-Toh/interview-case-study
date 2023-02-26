@extends('main_layout')

@section('title', 'Supplycart - ' . $product->name)

@push('script')
    @vite(['resources/js/pages/catalog_details.js'])
@endpush

@section('body')
    <catalog-details :product="{{ json_encode($product) }}" />
@endsection
