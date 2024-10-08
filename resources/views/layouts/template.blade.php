<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page Title</title>

    {{-- include global style files --}}
    @yield('css_plugin')

    <link rel="stylesheet" href="{{asset('assets/styles/mobile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/tablet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/mediaquery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap.min.css')}}">
    {{-- Swiperjs --}}
    <link rel="stylesheet" href="{{asset('assets/styles/swiper-bundle.min.css')}}">

    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
</head>

<body>

@component('includes.top_header')
    Top Header
@endcomponent
@component('includes.header')
    Header
@endcomponent

@yield('content')

@component('includes.footer')
    Footer
@endcomponent

{{-- include global style files --}}

@yield('js_plugin')


{{-- Swpierjs  --}}
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>




@yield('script')

</body>

</html>