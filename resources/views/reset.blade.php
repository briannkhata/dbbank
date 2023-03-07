<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/paylab/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:47:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> PayLab - Forgot Password</title>
    <meta name="title" Content="PayLab - Forgot Password">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="PayLab,Recharge,Utility Bill,Payment">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PayLab - Forgot Password">
    
    <meta itemprop="name" content="PayLab - Forgot Password">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/610133dc3531e1627468764.jpg">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="PayLab - Mobile Recharge and Utility Bill Payment Platform">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="../assets/images/seo/610133dc3531e1627468764.jpg"/>
    <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="reset.html">
    
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="../assets/templates/basic/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/all.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/vendor/animate.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/vendor/slick.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/main55d5.css?vers1.0">

    <link rel="stylesheet" href="../assets/templates/basic/css/bootstrap-fileinput.css">

    <link rel="stylesheet" href="../assets/templates/basic/css/color21be.css?color=145BCD&amp;secondColor=062c4e">

    
    
</head>

<body>

<div id="fb-root"></div><script async defer crossorigin="anonymous" src="../../../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=*************&autoLogAppEvents=1"></script>
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
            

<!-- account section start -->
 <div class="account-area">
    <div class="account-area-bg bg_img" data-background="https://script.viserlab.com/paylab/assets/images/frontend/auth_image/60fe9022e0d661627295778.jpg"></div>
    <div class="account-wrapper">
      <div class="account-logo text-center">
        <a href="https://script.viserlab.com/paylab">
            <img src="../assets/images/logoIcon/logo6654.png?v1" alt="image">
        </a>
      </div>
      <form class="account-form" method="POST" action="https://script.viserlab.com/paylab/password/email">
      <input type="hidden" name="_token" value="mp0gpSYL4XxuAXJ2MNKM9eKJpxrDTsg3i4QIZHdW">        <div class="form-group">
            <select name="type" class="select form-control">
                <option value="email">E-Mail Address</option>
                <option value="username">Username</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class=" form-control" name="value" value="" required autofocus="off" id="value">
                    </div>
        <div class="form-group">
          <button type="submit" class="cmn-btn py-3 w-100">SEND RESET CODE</button>
        </div>
        <p class="text-center">Have an account PayLab? <a href="../login.html" class="base--color">Sign In here...</a></p>
      </form>
      <div class="account-footer text-center">
        © Copyright 2021 PayLab | All right reserved
      </div>
    </div>
  </div>
  <!-- account section end -->


        </div>

    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/templates/basic/js/vendor/jquery-3.5.1.min.js"></script>
<script src="../assets/templates/basic/js/vendor/bootstrap.bundle.min.js"></script>
<script src="../assets/templates/basic/js/vendor/slick.min.js"></script>
<script src="../assets/templates/basic/js/vendor/wow.min.js"></script>
<script src="../assets/templates/basic/js/app.js"></script>
<script src="../assets/templates/basic/js/vendor/particles.js"></script>
<script src="../assets/templates/basic/js/vendor/app.js"></script>

<script src="../assets/templates/basic/js/bootstrap-fileinput.js"></script>


<script>
    "use strict";

    (function($){

        $('select[name=type]').on('change',function(){
            myVal();
        });

   })(jQuery);

    myVal();

    function myVal(){
        $('.my_value').text($('select[name=type] :selected').text()+' *');
        $('input[name=value]').attr('placeholder', $('select[name=type] :selected').text());
    }

</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=***********"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag("js", new Date());
                
                  gtag("config", "***********");
                </script>
<link rel="stylesheet" href="../assets/admin/css/iziToast.min.css">
<script src="../assets/admin/js/iziToast.min.js"></script>

<script>

"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }

</script>

<script>
    (function ($) {
        "use strict";
        $(document).on("change", ".langSel", function() {
            window.location.href = "https://script.viserlab.com/paylab/change/"+$(this).val() ;
        });
    })(jQuery);
</script>

</body>

<!-- Mirrored from script.viserlab.com/paylab/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 11:47:29 GMT -->
</html>
