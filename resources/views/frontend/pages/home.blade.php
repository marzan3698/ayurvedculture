@extends('frontend.layouts.master')
@section('title', 'Home - Ayurvedculture')

@push('styles')
@endpush

@section('content')

    @include('frontend.inc.2slider')
    @include('frontend.inc.3product')
    @include('frontend.inc.4clinic')
    @include('frontend.inc.5disease')

@endsection
