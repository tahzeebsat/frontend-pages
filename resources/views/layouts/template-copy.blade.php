<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Japanese Used Cars for Sale | SAT Japan</title>
    <meta name="title" content="Japanese Used Cars for Sale | SAT Japan"> 
    <meta name="keywords" content="Japanese Used Cars,Used Cars For Sale,Japanese Vehicles,Japanese Used Car Exporter,Japanese Car Auction,Toyota,Nissan,Honda,Car Dealers Near Me,used car deals,Japanese cars for sale"> 
    <meta name="description" content="Japanese used car exporters SAT offers a wide collection of new and used top quality Japanese vehicles. Explore the finest Japanese used cars on our website.">
    <link rel="canonical" href="https://front-pages.satjapan.info/home-copy" />
   
    {{-- include global style files --}}
    @yield('css_plugin')

    <link rel="stylesheet" href="{{asset('assets/styles/mobile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/tablet.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/custom-copy.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/mediaquery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap.min.css')}}">
    {{-- Swiperjs --}}
    <link rel="stylesheet" href="{{asset('assets/styles/swiper-bundle.min.css')}}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    {{-- select2 css --}}
    <link rel="stylesheet" href="{{asset('assets/styles/select2.min.css')}}">

    {{-- Intel-css --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/styles/intlTelInput.css')}}"> --}}

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
<script src="{{asset('assets/js/select2.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/intl.js')}}"></script>
<script src="{{asset('assets/js/intlutils.js')}}"></script> --}}
<script src="{{asset('assets/js/custom-copy.js')}}"></script>




@yield('script')

</body>

</html>