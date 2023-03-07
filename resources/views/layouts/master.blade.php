<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from script.viserlab.com/paylab/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:46:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@yield('title')</title>
    <meta name="title" content="Digital Bank- Home" />
    <meta name="description"
        content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit" />
    <meta name="keywords" content="PayLab,Recharge,Utility Bill,Payment" />
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon" />

    <link rel="apple-touch-icon" href="{{ asset('images/logoIcon/logo.png') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="PayLab - Home" />

    <meta itemprop="name" content="PayLab - Home" />
    <meta itemprop="description" content="" />
    <meta itemprop="image" content="assets/images/seo/610133dc3531e1627468764.jpg" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="PayLab - Mobile Recharge and Utility Bill Payment Platform" />
    <meta property="og:description"
        content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff" />
    <meta property="og:image" content="assets/images/seo/610133dc3531e1627468764.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://script.viserlab.com/paylab" />

    <meta name="twitter:card" content="summary_large_image" />

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main55d5.css?vers1.0') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap-fileinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/color21be.css?color=145BCD&amp;secondColor=062c4e') }}" />
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

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/app6654.js?v1') }}"></script>
    <script src="{{ asset('js/vendor/particles.js') }}"></script>
    <script src="assets/templates/basic/js/vendor/app.js"></script>

    <script src="assets/templates/basic/js/bootstrap-fileinput.js"></script>

    <script>
        (function($) {
            'use strict';

            let service = {
                id: 1,
                name: 'Fast Recharge',
                icon: '\u003Ci class=\u0022las la-money-bill-alt\u0022\u003E\u003C\/i\u003E',
                category_id: 48,
                delay: '48 Hours',
                select_field: '{\u0022operator\u0022:[\u0022Robi\u0022,\u0022Banglalink\u0022,\u0022Airtel\u0022,\u0022MyPhone\u0022]}',
                fixed_charge: '1.00000000',
                percent_charge: '2.00000000',
                description: '\u003Cspan style=\u0022color: rgb(0, 0, 0);\u0022\u003EIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \u0027Content here, content here\u0027, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \u0027lorem ipsum\u0027 will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\u003C\/span\u003E\u003Cbr\u003E',
                user_data: '{\u0022mobile_number\u0022:{\u0022field_name\u0022:\u0022mobile_number\u0022,\u0022field_level\u0022:\u0022Mobile Number\u0022,\u0022type\u0022:\u0022text\u0022,\u0022validation\u0022:\u0022required\u0022}}',
                status: 1,
                created_at: '2021-07-27T22:58:36.000000Z',
                updated_at: '2021-07-28T14:10:02.000000Z',
                category: {
                    id: 48,
                    name: 'Recharge',
                    field_type: 'select',
                    field_name: 'operator',
                    status: 1,
                    created_at: '2021-07-18T20:35:33.000000Z',
                    updated_at: '2021-07-27T22:56:41.000000Z',
                },
            };
            let fixed = parseFloat(service.fixed_charge).toFixed(1);
            let percent = parseFloat(service.percent_charge).toFixed(1);

            $('.landingPage input[name=id]').val(service.id);

            let details = `<span class='font-weight-bold'>Fixed Charge</span> ${fixed} USD,  
                           <span class='font-weight-bold'>Parcent Charge</span> ${percent} % <br/>
                           <span class='font-weight-bold'>Processing Time</span> ${service.delay} 
                            `;

            $('.serviceCat').text(service.category.name);
            $('.serviceTitle').text(`(${service.name})`);
            $('.serviceDes').html(details);

            let more = $('#receiver li').length;
            let element = $('<li>');

            if (more == 0) {
                $('#receiver').append(`No More`);
            }

            $('.nav-item .singleService').on('click', function() {
                let service = $(this).data('service');
                let fixed = parseFloat(service.fixed_charge).toFixed(1);
                let percent = parseFloat(service.percent_charge).toFixed(1);

                $('.landingPage input[name=id]').val(service.id);

                let details = `<span class='font-weight-bold'>Fixed Charge</span> ${fixed} USD,  
                               <span class='font-weight-bold'>Parcent Charge</span> ${percent} % <br/>
                               <span class='font-weight-bold'>Processing Time</span> ${service.delay} 
                                `;

                $('.serviceCat').text(service.category.name);
                $('.serviceTitle').text(`(${service.name})`);
                $('.serviceDes').html(details);
            });

            $('.bill-items-wrapper .bill-items > .nav-item > .nav-link').on(
                'click',
                function() {
                    const element = $(this).parent('li');
                    if (element.hasClass('active')) {
                        element.removeClass('active');
                        element.find('li').removeClass('active');
                    } else {
                        element.addClass('active');
                        element.siblings('li').removeClass('active');
                        element.siblings('li').find('li').removeClass('active');
                    }

                    const dpElement = $(
                        '.bill-items-wrapper ul.morebtn li .dropdown-menu .nav-item'
                    );
                    if (dpElement.hasClass('active')) {
                        dpElement.removeClass('active');
                        $('.mbtn').removeClass('active');
                    }
                }
            );

            $(
                '.bill-items-wrapper ul.morebtn li .dropdown-menu .nav-item .nav-link'
            ).on('click', function() {
                const element = $(this).parent('li');
                if (element.hasClass('active')) {
                    element.removeClass('active');
                    element.find('li').removeClass('active');
                } else {
                    element.addClass('active');
                    element.siblings('li').removeClass('active');
                    element.siblings('li').find('li').removeClass('active');
                }

                const billElement = $('.bill-items-wrapper .bill-items > .nav-item');
                if (billElement.hasClass('active')) {
                    billElement.removeClass('active');
                    $('.mbtn').addClass('active');
                }
            });
        })(jQuery);
    </script>

    <script>
        (function($) {
            'use strict';

            var formEl = $('#subscribe');

            formEl.on('submit', (e) => {
                e.preventDefault();
                var data = formEl.serialize();

                $.ajax({
                    url: 'https://script.viserlab.com/paylab/subscribe',
                    method: 'post',
                    data: data,

                    success: (response) => {
                        if (response.success) {
                            formEl.find('input[name=email]').val('');
                            notify('success', response.message);
                        } else {
                            $.each(response.error, (key, value) => {
                                notify('error', value);
                            });
                        }
                    },
                    error: (error) => {
                        console.log(error);
                    },
                });
            });
        })(jQuery);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=***********"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '***********');
    </script>
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}" />
    <script src="assets/admin/js/iziToast.min.js"></script>

    <script>
        'use strict';

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: 'topRight',
            });
        }
    </script>

    <script>
        (function($) {
            'use strict';

            $(document).on('change', '.langSel', function() {
                window.location.href =
                    'https://script.viserlab.com/paylab/change/' + $(this).val();
            });

            let currentRoute = 'home';

            let anchor = $('#navbarSupportedContent li a');

            let sectionArray = [];

            $.each(anchor, function(key, value) {
                let href = $(value).attr('href');
                let firstChar = href.charAt(0);

                if (firstChar == '#') {
                    sectionArray[key] = href;
                }
            });

            if (currentRoute != 'home') {
                let links = $('#linkItem a');

                links.on('click', function() {
                    let section = $(this).attr('href');
                    let base = 'https://script.viserlab.com/paylab';

                    if (sectionArray.includes(section)) {
                        window.location = base + section;
                    }
                });
            }
        })(jQuery);
    </script>

    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement('script'),
                s0 = document.getElementsByTagName('script')[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        if (window.top != window.self) {
            document.body.innerHTML +=
                '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' +
                window.self.location +
                '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>

    <script>
        adroll_adv_id = 'YXRNNTO7ZBAMFBH67UUE5M';
        adroll_pix_id = 'MMQQDWGN25EXPHGRPA3NLR';
        adroll_version = '2.0';
        (function(w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl =
                'https://s.adroll.com/j/' + adroll_adv_id + '/roundtrip.js';
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] =
                    w.adroll[w.adroll.f[a]] ||
                    (function(n) {
                        return function() {
                            w.adroll.push([n, arguments]);
                        };
                    })(w.adroll.f[a]);
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track('pageView');
    </script>

    <script async src="../../pagead2.googlesyndication.com/pagead/js/f6b5c.txt?client=ca-pub-8940522890323334"
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from script.viserlab.com/paylab/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:46:31 GMT -->

</html>
