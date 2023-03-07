<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/paylab/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:47:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Digital Bank MW | @yield('title')</title>
    <meta name="title" Content="PayLab - Sign In">
    <meta name="description"
        content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="PayLab,Recharge,Utility Bill,Payment">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PayLab - Sign In">

    <meta itemprop="name" content="PayLab - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/610133dc3531e1627468764.jpg">

    <meta property="og:type" content="website">
    <meta property="og:title" content="PayLab - Mobile Recharge and Utility Bill Payment Platform">
    <meta property="og:description"
        content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="assets/images/seo/610133dc3531e1627468764.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login.html">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="css/main55d5.css?vers1.0">

    <link rel="stylesheet" href="assets/templates/basic/css/bootstrap-fileinput.css">

    <link rel="stylesheet" href="assets/templates/basic/css/color21be.css?color=145BCD&amp;secondColor=062c4e">


    <style>
        .captcha div {
            width: 100% !important;
        }

        .captcha span {
            color: #fff !important;
        }
    </style>
    <style>
        .country-code .input-group-prepend .input-group-text {
            background: #fff !important;
        }

        .country-code select {
            border: none;
        }

        .country-code select:focus {
            border: none;
            outline: none;
        }

        .input-new-group .country_code {
            padding: 0;
            border: none;
            background: transparent;
        }

        .input-group-text {
            border: none;
        }
    </style>

</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="../../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=*************&autoLogAppEvents=1"></script>
    <div class="preloader">
        <div class="preloader-container">
            <span class="animated-preloader"></span>
        </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="las la-angle-up"></i>
        </span>
    </div>

    <!-- scroll-to-top end -->
    <div class="page-wrapper">

        <div class="main-wrapper">

            <div id="particles-js" class="d-none"></div>

            @yield('content')

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/templates/basic/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vendor/particles.js') }}"></script>
    <script src="{{ asset('js/vendor/app.js') }}"></script>

    <script src="{{ asset('js/bootstrap-fileinput.js') }}"></script>


    <script>
        "use strict";
        $(`option[data-code=MW]`).attr('selected', '');
        $('select[name=country_code]').change(function() {
            $('input[name=country]').val($('select[name=country_code] :selected').data('country'));
        }).change();

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style="color:red;">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>

    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style="color:red;">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=***********"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "***********");
    </script>
    <link rel="stylesheet" href="assets/admin/css/iziToast.min.css">
    <script src="assets/admin/js/iziToast.min.js"></script>

    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

    <script>
        (function($) {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "https://script.viserlab.com/paylab/change/" + $(this).val();
            });
        })(jQuery);
    </script>

</body>

<!-- Mirrored from script.viserlab.com/paylab/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:47:22 GMT -->

</html>
