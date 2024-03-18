<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS LINK -->
    @include('web.partials.__css')

</head>

<body>
    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

        <!-- SIDENAVBAR LINK -->
        @include('web.partials.__sidenav')

        <div id="colorlib-main">

            <!-- PAGE CONTENT -->
            @yield('main-content')

            <!-- FOOTER -->
            @include('web.partials.__footer')

        </div>
    </div>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee"></circle>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00"></circle>
        </svg>
    </div>

    <!-- JS LINK -->
    @include('web.partials.__js')

</body>

</html>
