<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title id="title" title="@yield('title', 'home')">@yield('title', 'Royal Moon')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    @stack('custom-style')

    <!-- Styles -->
    <link rel="stylesheet" href="/index.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="/theme/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/theme/css/icomoon.css">


    <!-- Flexslider  -->
    <link rel="stylesheet" href="/theme/css/flexslider.css">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="/theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/theme/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/theme/css/style.css">


    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="app">
        @includeFirst(['layouts/navbar'])
        @yield('content')
        @include('layouts/footer')
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    @if (!isset($hideConflict))
        <!-- jQuery -->
        <script src="/theme/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="/theme/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="/theme/js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="/theme/js/jquery.waypoints.min.js"></script>
        <!-- Carousel -->
        <script src="/theme/js/owl.carousel.min.js"></script>
        <!-- countTo -->
        <script src="/theme/js/jquery.countTo.js"></script>
        <!-- Flexslider -->
        <script src="/theme/js/jquery.flexslider-min.js"></script>
        <!-- Main -->
        <script src="/theme/js/main.js"></script>
    @endif


    @stack('custom-script')
</body>

</html>
