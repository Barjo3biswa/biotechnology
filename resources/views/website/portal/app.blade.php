<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>The Assam Biotechnology Council (ABTC) | An independent Society set up under the aegis of the Biotechnology
        Policy for the state of Assam</title>

    <!-- Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet" />

    <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-strip.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{asset('css/colors/theme-skin-green.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('./css/font-awesome.min.css')}}">
    <link href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>
    @yield('css')

</head>

<body class="">
    <div id="wrapper">
        <div id="preloader">
            <div id="spinner">
                <h5 class="line-height-50 font-18">Loading...</h5>
            </div>
        </div>

        @include('website.portal.header')
        @yield('content')
        @include('website.portal.footer')
    <script src="{{asset('js/custom.js')}}"></script>


</body>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Toggle registration if select YES
    function toggleRegistrationField() {
        var selectElement = document.getElementById("registered-with");
        var registrationField = document.getElementById("registered-details");
        var additionalField = document.getElementById("additional-field");

        if (selectElement.value === "yes") {
            registrationField.style.display = "block";
            additionalField.style.display = "block";
        } else {
            registrationField.style.display = "none";
            additionalField.style.display = "none";
        }
    }
</script>
@yield('js')
</html>
