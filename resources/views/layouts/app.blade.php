<!doctype html>
<html class="no-js " lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- {{ config('app.name', 'SEO Kenya') }} --}}
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Favicon-->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!--WaitMe Css-->
  <link rel="stylesheet" href="{{ asset('assets/plugins/waitme/waitMe.css') }}" />
  <!-- Custom Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
   <script src="{{ asset('css/app.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">



    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('assets/bundles/countTo.bundle.js') }}"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
    <!-- Jquery Knob Plugin Js -->
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
    <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/plugins/waitme/waitMe.js') }}"></script>
    <!-- Wait Me Plugin Js -->
    <script src="{{ asset('assets/js/pages/widgets/infobox/infobox-1.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts/sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/pages/cards/basic.js') }}"></script>


    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">  --}}



</head>
    <body class="theme-orange">


        @yield('requirements')
        @include('include.messages')

        <!-- Top Bar -->
         @yield('nav')
        <!-- Left Sidebar -->
        @yield('aside-left')
        <!-- Right Sidebar -->
        @yield('aside-right')
        @yield('aside-left-mail')

        @yield('user-info')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>


</body>
</html>
