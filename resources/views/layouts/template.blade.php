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
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/select2.min.css')}}">

   
    @yield('style')
   
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


<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

@yield('script')

</body>

</html>