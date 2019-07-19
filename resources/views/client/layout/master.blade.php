<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Begin SEO -->

    <!-- Primary Meta Tags -->
    <title>Subas || @yield('title')</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/img/icon/favicon.png') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href={{ asset('client/css/bootstrap.min.css') }}>
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href={{ asset('client/lib/css/nivo-slider.css') }}>
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href={{ asset('client/css/core.css') }}>
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href={{ asset('client/css/shortcode/shortcodes.css') }}>
    <!-- Theme main style -->
    <link rel="stylesheet" href={{ asset('client/style.css') }} "">
    <!-- Responsive css -->
    <link rel="stylesheet" href={{ asset('client/css/responsive.css') }}>
    <!-- User style -->
    <link rel="stylesheet" href={{ asset('client/css/custom.css') }}>

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href={{ asset('client/css/style-customizer.css') }}>
    <link href="#" data-style="styles" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src={{ asset('client/js/vendor/modernizr-2.8.3.min.js') }}></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        @include('client.layout.menu')
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        @include('client.layout.mobie-menu')
        <!-- END MOBILE MENU AREA -->

        <!-- START SLIDER AREA -->
       @yield('slide')
        <!-- END SLIDER AREA -->

        <!-- Start page content -->
        @yield('content')
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        @include('client.layout.footer')
        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->
        @include('client.layout.quickview')
        <!-- END QUICKVIEW PRODUCT -->

    </div>
    <!-- Body main wrapper end -->

    <!-- jquery latest version -->
    <script src="{{ asset('client/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap framework js -->
    <script src={{ asset('client/js/bootstrap.min.js') }}></script>
    <!-- jquery.nivo.slider js -->
    <script src={{ asset('client/lib/js/jquery.nivo.slider.js') }}></script>
    <!-- All js plugins included in this file. -->
    <script src={{ asset('client/js/plugins.js') }}></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src={{ asset('client/js/main.js') }}></script>
    <script src="{{ asset('client/js/ajax_client.js') }}"></script>

</body>

</html>
