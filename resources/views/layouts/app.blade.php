<!DOCTYPE html>
{{-- <html lang="ar" itemscope itemtype="http://schema.org/WebPage"> --}}
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" itemscope itemtype="http://schema.org/WebPage">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="FrontendV2/img/logotop.png">
    <link rel="icon" type="image/png" href="/FrontendV2/img/logotop.png">
    <title>
        TOP CHEM
    </title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="/FrontendV2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/FrontendV2/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/FrontendV2/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    {{-- <style>
        body {
            background-image: url('FrontendV2/img/backk.jpg');
            background-size: cover; /* Adjusts the background size to cover the entire page */
            background-repeat: no-repeat; /* Ensures the background does not repeat */
            background-attachment: fixed; /* Keeps the background image fixed during scrolling */
        }
    </style> --}}
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    @include('layouts.nav')
    <div class="main">
        @yield('content')

    </div>
        @include('layouts.footer')
        <!--   Core JS Files   -->
        <script src="/FrontendV2/js/core/popper.min.js" type="text/javascript"></script>
        <script src="/FrontendV2/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="/FrontendV2/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="/FrontendV2/js/plugins/countup.min.js"></script>
        <script src="/FrontendV2/js/plugins/rellax.min.js"></script>
        <script src="/FrontendV2/js/plugins/tilt.min.js"></script>
        <script src="/FrontendV2/js/plugins/choices.min.js"></script>
        <script src="/FrontendV2/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
        <script type="text/javascript">
            if (document.getElementById('state1')) {
                const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('state2')) {
                const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                if (!countUp1.error) {
                    countUp1.start();
                } else {
                    console.error(countUp1.error);
                }
            }
            if (document.getElementById('state3')) {
                const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                if (!countUp2.error) {
                    countUp2.start();
                } else {
                    console.error(countUp2.error);
                };
            }

        </script>

</body>

</html>
