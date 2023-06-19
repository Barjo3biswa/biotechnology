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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-strip.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <!-- <link href="css/style-main.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

    <!-- external javascripts -->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    @yield('css')

</head>

<body class="">
    <div id="wrapper">
        <div id="preloader">
            <div id="spinner">
                <h5 class="line-height-50 font-18">Loading...</h5>
            </div>
        </div>

        @include('website.layout.header')

        @yield('content')

        <!-- Footer -->
        @include('website.layout.footer')
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <script src="js/custom.js"></script>


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
