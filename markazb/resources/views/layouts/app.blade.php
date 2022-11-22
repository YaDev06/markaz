<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Markaz | Bosh sahifa</title>
    @livewireStyles
    <!-- Favicon -->

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('assets/css/libs.min.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/logik.css?v=1.0.0')}}">
    <meta name="_token" content="{{csrf_token()}}" />
    @yield('style')
</head>

<body >
    
   
    @yield('content')
    
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    @livewireScripts
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/libs.min.js')}}"></script>

    <!-- Dashboard Charts JavaScript -->
    <script src="{{asset('assets/js/charts/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/charts/apexcharts.js')}}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
   
@yield('script')
</body>

</html>