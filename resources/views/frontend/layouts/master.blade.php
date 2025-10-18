<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sanyas Ayurveda')</title>
    @yield('meta') {{-- extra meta per page if needed --}}

    {{-- Core CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/clinic.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/diseases_support.css') }}">

    {{-- Page-specific CSS --}}
    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('frontend.inc.1header')

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.inc.6footer')

    {{-- Core JS --}}
    <script src="{{ asset('frontend/asset/js/togglemenu.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/slider.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    {{-- Page-specific JS --}}
    @stack('scripts')
</body>

</html>
