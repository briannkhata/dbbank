@extends('layouts.master')
@section('title')
    Digital Bank MW | Home
@endsection

@section('content')
    <div class="main-wrapper">
        <!-- hero start -->
        <section class="hero bg_img"
            data-background="https://script.viserlab.com/paylab/assets/images/frontend/banner/60fe8d9db5cac1627295133.jpg">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="hero__title text-white wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            Online mobile recharge And bill payment.
                        </h2>
                        <p class="mt-3 text-white wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptatem odit consequuntur omnis est mollitia sint atque
                            voluptas voluptatibus iure.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- recharge form section start -->
        {{-- <div class="recharge-form-section main-form pb-100 bg_img"
            data-background="assets/templates/basic/images/bg/shape.svg">
            <div class="container">
                <div class="recharge-bill-area bg_img" data-background="assets/templates/basic/images/bg/bg-2.jpg">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bill-items-wrapper d-flex flex-wrap justify-content-center">
                                <ul class="bill-items nav nav-tabs" id="teleporter">
                                    <li class="nav-item active">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":1,"name":"Fast Recharge","icon":"&lt;i class=\"las la-money-bill-alt\"&gt;&lt;\/i&gt;","category_id":48,"delay":"48 Hours","select_field":"{\"operator\":[\"Robi\",\"Banglalink\",\"Airtel\",\"MyPhone\"]}","fixed_charge":"1.00000000","percent_charge":"2.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"mobile_number\":{\"field_name\":\"mobile_number\",\"field_level\":\"Mobile Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T22:58:36.000000Z","updated_at":"2021-07-28T14:10:02.000000Z","category":{"id":48,"name":"Recharge","field_type":"select","field_name":"operator","status":1,"created_at":"2021-07-18T20:35:33.000000Z","updated_at":"2021-07-27T22:56:41.000000Z"}}'>
                                            <i class="las la-money-bill-alt"></i>
                                            <span>Fast Recharge</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":2,"name":"F. Internet Bill","icon":"&lt;i class=\"las la-globe-asia\"&gt;&lt;\/i&gt;","category_id":49,"delay":"1 hours","select_field":null,"fixed_charge":"1.00000000","percent_charge":"2.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"internet_provider_id\":{\"field_name\":\"internet_provider_id\",\"field_level\":\"Internet Provider ID\",\"type\":\"text\",\"validation\":\"required\"},\"nid_front\":{\"field_name\":\"nid_front\",\"field_level\":\"NID Front\",\"type\":\"file\",\"validation\":\"required\"},\"nid_back\":{\"field_name\":\"nid_back\",\"field_level\":\"NID Back\",\"type\":\"file\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T22:59:55.000000Z","updated_at":"2021-07-27T23:04:45.000000Z","category":{"id":49,"name":"Net","field_type":null,"field_name":null,"status":1,"created_at":"2021-07-18T20:35:46.000000Z","updated_at":"2021-07-18T20:35:46.000000Z"}}'>
                                            <i class="las la-globe-asia"></i>
                                            <span>F. Internet Bill</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":3,"name":"Internet Bill","icon":"&lt;i class=\"las la-globe-americas\"&gt;&lt;\/i&gt;","category_id":49,"delay":"30 Seconds","select_field":null,"fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"internet_provider_id\":{\"field_name\":\"internet_provider_id\",\"field_level\":\"Internet Provider ID\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:01:28.000000Z","updated_at":"2021-07-28T14:10:27.000000Z","category":{"id":49,"name":"Net","field_type":null,"field_name":null,"status":1,"created_at":"2021-07-18T20:35:46.000000Z","updated_at":"2021-07-18T20:35:46.000000Z"}}'>
                                            <i class="las la-globe-americas"></i>
                                            <span>Internet Bill</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":4,"name":"M. Balance","icon":"&lt;i class=\"lab la-amazon-pay\"&gt;&lt;\/i&gt;","category_id":48,"delay":"48 Hours","select_field":"{\"operator\":[\"Robi\",\"Banglalink\",\"Airtel\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"mobile_number\":{\"field_name\":\"mobile_number\",\"field_level\":\"Mobile Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:02:46.000000Z","updated_at":"2021-07-27T23:28:01.000000Z","category":{"id":48,"name":"Recharge","field_type":"select","field_name":"operator","status":1,"created_at":"2021-07-18T20:35:33.000000Z","updated_at":"2021-07-27T22:56:41.000000Z"}}'>
                                            <i class="lab la-amazon-pay"></i>
                                            <span>M. Balance</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":5,"name":"Gass","icon":"&lt;i class=\"las la-fire\"&gt;&lt;\/i&gt;","category_id":47,"delay":"48 Hours","select_field":null,"fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"gass_card_number\":{\"field_name\":\"gass_card_number\",\"field_level\":\"Gass Card Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:06:29.000000Z","updated_at":"2021-07-27T23:06:29.000000Z","category":{"id":47,"name":"Bill","field_type":null,"field_name":null,"status":1,"created_at":"2021-07-18T20:35:22.000000Z","updated_at":"2021-07-27T22:56:36.000000Z"}}'>
                                            <i class="las la-fire"></i> <span>Gass</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":6,"name":"Electricity","icon":"&lt;i class=\"las la-assistive-listening-systems\"&gt;&lt;\/i&gt;","category_id":47,"delay":"48 Hours","select_field":null,"fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"meter_number\":{\"field_name\":\"meter_number\",\"field_level\":\"Meter Number\",\"type\":\"text\",\"validation\":\"required\"},\"meter_owner_name\":{\"field_name\":\"meter_owner_name\",\"field_level\":\"Meter Owner Name\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:08:25.000000Z","updated_at":"2021-07-27T23:08:25.000000Z","category":{"id":47,"name":"Bill","field_type":null,"field_name":null,"status":1,"created_at":"2021-07-18T20:35:22.000000Z","updated_at":"2021-07-27T22:56:36.000000Z"}}'>
                                            <i class="las la-assistive-listening-systems"></i>
                                            <span>Electricity</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":7,"name":"TV","icon":"&lt;i class=\"las la-tv\"&gt;&lt;\/i&gt;","category_id":47,"delay":"48 Hours","select_field":null,"fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"tv_card_number\":{\"field_name\":\"tv_card_number\",\"field_level\":\"TV Card Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:09:17.000000Z","updated_at":"2021-07-27T23:09:17.000000Z","category":{"id":47,"name":"Bill","field_type":null,"field_name":null,"status":1,"created_at":"2021-07-18T20:35:22.000000Z","updated_at":"2021-07-27T22:56:36.000000Z"}}'>
                                            <i class="las la-tv"></i> <span>TV</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":8,"name":"Shopping Bill","icon":"&lt;i class=\"las la-shopping-bag\"&gt;&lt;\/i&gt;","category_id":46,"delay":"48 Hours","select_field":"{\"send_via\":[\"Bkash\",\"Rocket\",\"Mobil Money\",\"PayTM\",\"Other\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"account_number\":{\"field_name\":\"account_number\",\"field_level\":\"Account Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:16:39.000000Z","updated_at":"2021-07-27T23:16:39.000000Z","category":{"id":46,"name":"Payment","field_type":"select","field_name":"send_via","status":1,"created_at":"2021-07-18T20:35:11.000000Z","updated_at":"2021-07-27T23:15:06.000000Z"}}'>
                                            <i class="las la-shopping-bag"></i>
                                            <span>Shopping Bill</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":9,"name":"Airtime","icon":"&lt;i class=\"las la-stopwatch\"&gt;&lt;\/i&gt;","category_id":48,"delay":"48 Hours","select_field":"{\"operator\":[\"MyPhony\",\"SamPhone\",\"Dido\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"mobile_number\":{\"field_name\":\"mobile_number\",\"field_level\":\"Mobile Number\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:19:41.000000Z","updated_at":"2021-07-27T23:22:51.000000Z","category":{"id":48,"name":"Recharge","field_type":"select","field_name":"operator","status":1,"created_at":"2021-07-18T20:35:33.000000Z","updated_at":"2021-07-27T22:56:41.000000Z"}}'>
                                            <i class="las la-stopwatch"></i> <span>Airtime</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":10,"name":"Loan","icon":"&lt;i class=\"las la-calendar-minus\"&gt;&lt;\/i&gt;","category_id":46,"delay":"48 Hours","select_field":"{\"send_via\":[\"Bank\",\"Mobile Money\",\"Debit Card\",\"Credit Card\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"receiver_account_number\":{\"field_name\":\"receiver_account_number\",\"field_level\":\"Receiver Account Number\",\"type\":\"text\",\"validation\":\"required\"},\"receiver_name\":{\"field_name\":\"receiver_name\",\"field_level\":\"Receiver Name\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:19:41.000000Z","updated_at":"2021-07-27T23:27:06.000000Z","category":{"id":46,"name":"Payment","field_type":"select","field_name":"send_via","status":1,"created_at":"2021-07-18T20:35:11.000000Z","updated_at":"2021-07-27T23:15:06.000000Z"}}'>
                                            <i class="las la-calendar-minus"></i>
                                            <span>Loan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":11,"name":"Salary","icon":"&lt;i class=\"las la-money-bill-wave\"&gt;&lt;\/i&gt;","category_id":46,"delay":"48 Hours","select_field":"{\"send_via\":[\"Bank\",\"Mobile Money\",\"Debit Card\",\"Credit Card\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"receiver_account_number\":{\"field_name\":\"receiver_account_number\",\"field_level\":\"Receiver Account Number\",\"type\":\"text\",\"validation\":\"required\"},\"receiver_name\":{\"field_name\":\"receiver_name\",\"field_level\":\"Receiver Name\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:19:41.000000Z","updated_at":"2021-07-27T23:24:07.000000Z","category":{"id":46,"name":"Payment","field_type":"select","field_name":"send_via","status":1,"created_at":"2021-07-18T20:35:11.000000Z","updated_at":"2021-07-27T23:15:06.000000Z"}}'>
                                            <i class="las la-money-bill-wave"></i>
                                            <span>Salary</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link singleService"
                                            data-service='{"id":12,"name":"Other","icon":"&lt;i class=\"las la-infinity\"&gt;&lt;\/i&gt;","category_id":46,"delay":"48 Hours","select_field":"{\"send_via\":[\"Bank\",\"Mobile Money\",\"Debit Card\",\"Credit Card\"]}","fixed_charge":"1.00000000","percent_charge":"1.00000000","description":"&lt;span style=\"color: rgb(0, 0, 0);\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;\/span&gt;&lt;br&gt;","user_data":"{\"receiver_account_number\":{\"field_name\":\"receiver_account_number\",\"field_level\":\"Receiver Account Number\",\"type\":\"text\",\"validation\":\"required\"},\"receiver_name\":{\"field_name\":\"receiver_name\",\"field_level\":\"Receiver Name\",\"type\":\"text\",\"validation\":\"required\"}}","status":1,"created_at":"2021-07-27T23:19:41.000000Z","updated_at":"2021-07-27T23:27:16.000000Z","category":{"id":46,"name":"Payment","field_type":"select","field_name":"send_via","status":1,"created_at":"2021-07-18T20:35:11.000000Z","updated_at":"2021-07-27T23:15:06.000000Z"}}'>
                                            <i class="las la-infinity"></i> <span>Other</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="morebtn">
                                    <li>
                                        <a href="javascript:void(0)" class="nav-link mbtn" data-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                            <span>More</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" id="receiver"></ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <div class="bill-form-wrapper mt-4">
                        <form action="https://script.viserlab.com/paylab/user/service/apply" method="post"
                            class="landingPage">
                            <input type="hidden" name="_token" value="mp0gpSYL4XxuAXJ2MNKM9eKJpxrDTsg3i4QIZHdW" />
                            <h6 class="mb-2">
                                <span class="serviceCat"></span>
                                <span class="serviceTitle"></span>
                            </h6>
                            <div class="form-row align-items-center">
                                <div class="col-lg-5 col-md-5 form-group">
                                    <p class="serviceDes font-size--14px"></p>
                                </div>

                                <div class="col-lg-5 col-md-5 form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text font-size--18px bg-primary text-white">
                                                $
                                            </span>
                                        </div>

                                        <input type="hidden" name="id" required="" />

                                        <input type="text" name="amount" class="form-control" placeholder="Amount"
                                            onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                            required="" />
                                    </div>
                                </div>
                                <div class="col-lg-2 form-group">
                                    <button type="submit" class="cmn-btn w-100">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- bill-form-wrapper end -->
                </div>
            </div>
        </div> --}}
        <!-- recharge form section end -->

        <!-- service section start -->
        <section class="pt-100 pb-100 section--bg" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <div class="section-top-title">OUR SERVICES</div>
                            <h2 class="section-title">What We Do</h2>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row justify-content-center mb-none-30">
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Make Online Payment</h4>
                                <p class="mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Maiores soluta et debitis facere architecto fugit. Quod,
                                    minus earum. Dolore veritatis tempora..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-bus"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">E-Ticketing</h4>
                                <p class="mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Maiores soluta et debitis facere architecto fugit. Quod,
                                    minus earum. Dolore veritatis tempora..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-print"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">E-Card</h4>
                                <p class="mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Maiores soluta et debitis facere architecto fugit. Quod,
                                    minus earum. Dolore veritatis tempora..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Pay Bills</h4>
                                <p class="mt-3">
                                    Phone Recharge &amp;amp; DTH Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Maiores soluta et debitis
                                    facere architecto fugit. Quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Buy Airtime</h4>
                                <p class="mt-3">
                                    Phone Recharge &amp;amp; DTH Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Maiores soluta et debitis
                                    facere architecto fugit. Quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Buy Data</h4>
                                <p class="mt-3">
                                    Phone Recharge &amp;amp; DTH Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Maiores soluta et debitis
                                    facere architecto fugit. Quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Cash-to-Code or Code-to-Cash</h4>
                                <p class="mt-3">
                                    Phone Recharge &amp;amp; DTH Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Maiores soluta et debitis
                                    facere architecto fugit. Quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="service-card hover--effect-1 d-flex flex-wrap">
                            <div class="service-card__icon">
                                <i class="fa-brands fa-coin"></i>
                            </div>
                            <div class="service-card__content">
                                <h4 class="title">Cryptocurrency</h4>
                                <p class="mt-3">
                                    Phone Recharge &amp;amp; DTH Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Maiores soluta et debitis
                                    facere architecto fugit. Quod.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service section end -->
        <!-- features section start -->
        <section class="pt-100 pb-100" id="feature">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <div class="section-top-title">OUR POPULAR FEATURES</div>
                            <h2 class="section-title">Some Of The Best Features</h2>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 d-lg-block d-none wow fadeInLeft" data-wow-duration="0.5s"
                        data-wow-delay="0.3s">
                        <div class="feature-thumb">
                            <img src="{{ asset('images/frontend/feature/60d86add5db2c1624795869.png') }}"
                                alt="image" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-none-50">
                            <div class="col-sm-6 mb-50">
                                <div class="feature-card d-flex flex-wrap">
                                    <div class="feature-card__icon">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <div class="feature-card__content">
                                        <h5 class="title">Get amazing Cashbacke</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Numquam, minus maiores.
                                        </p>
                                    </div>
                                </div>
                                <!-- feature-card end -->
                            </div>
                            <div class="col-sm-6 mb-50">
                                <div class="feature-card d-flex flex-wrap">
                                    <div class="feature-card__icon">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <div class="feature-card__content">
                                        <h5 class="title">Send Gift</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Numquam, minus maiores.
                                        </p>
                                    </div>
                                </div>
                                <!-- feature-card end -->
                            </div>
                            <div class="col-sm-6 mb-50">
                                <div class="feature-card d-flex flex-wrap">
                                    <div class="feature-card__icon">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                    <div class="feature-card__content">
                                        <h5 class="title">Balance wallet</h5>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                </div>
                                <!-- feature-card end -->
                            </div>
                            <div class="col-sm-6 mb-50">
                                <div class="feature-card d-flex flex-wrap">
                                    <div class="feature-card__icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <div class="feature-card__content">
                                        <h5 class="title">Get instant recharge</h5>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit.1
                                        </p>
                                    </div>
                                </div>
                                <!-- feature-card end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features section end -->
        <!-- overview section start -->
        <section class="overview-section bg_img"
            data-background="{{ asset('images/frontend/overview/60fe8e73b6c371627295347.jpg') }}">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <div class="overview-content">
                            <h2 class="title text-white">
                                Our company overview all over the statistices.
                            </h2>
                            <p class="text-white mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Nemo repellat quae doloribus, dolores rem porro quo placeat
                                obcaecati esse animi minima, deleniti labore ipsam. 305K
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 mt-lg-0 mt-4">
                        <div class="row mx-0">
                            <div class="col-6 overview-item">
                                <div class="overview-card">
                                    <div class="overview-card__icon">
                                        <i class="far fa-copy"></i>
                                    </div>
                                    <div class="overview-card__content">
                                        <div class="counter-amount">12M</div>
                                        <span class="caption">App Downloads</span>
                                    </div>
                                </div>
                                <!-- overview-card end -->
                            </div>
                            <div class="col-6 overview-item">
                                <div class="overview-card">
                                    <div class="overview-card__icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="overview-card__content">
                                        <div class="counter-amount">3205M</div>
                                        <span class="caption">Users</span>
                                    </div>
                                </div>
                                <!-- overview-card end -->
                            </div>
                            <div class="col-6 overview-item">
                                <div class="overview-card">
                                    <div class="overview-card__icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="overview-card__content">
                                        <div class="counter-amount">305K</div>
                                        <span class="caption">Award</span>
                                    </div>
                                </div>
                                <!-- overview-card end -->
                            </div>
                            <div class="col-6 overview-item">
                                <div class="overview-card">
                                    <div class="overview-card__icon">
                                        <i class="fas fa-exchange-alt"></i>
                                    </div>
                                    <div class="overview-card__content">
                                        <div class="counter-amount">800M</div>
                                        <span class="caption">Transactions</span>
                                    </div>
                                </div>
                                <!-- overview-card end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- overview section end -->
        <!-- app section start -->
        <section class="app-download-section pt-120" id="app">
            <div class="container">
                <div class="row align-items-end justify-content-lg-between">
                    <div class="col-lg-4 col-md-6 d-md-block d-none wow fadeInLeft" data-wow-duration="0.5s"
                        data-wow-delay="0.3s">
                        <div class="app-thumb">
                            <img src="{{ 'images/frontend/apps/6107a1b5d81421627890101.png' }}" alt="image" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="app-content">
                            <h2 class="title">
                                Download the app and make your life more easy.
                            </h2>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Mollitia omnis quas excepturi corporis adipisci odio id
                                culpa praesentium. Quis fuga officiis iure rerum modi
                                temporibus mollitia, quidem veritatis illum vero. Lorem
                                ipsum dolor sit.
                            </p>
                            <div class="app-btn-group mt-4">
                                <a href="#" target="_blank" class="app-btn">
                                    <img src="{{ asset('images/elements/google-paly.png') }}" alt="image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app section end -->
        <!-- partner section start -->
        <section class="pt-100 pb-100 section--bg" id="payment">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="section-title">Our Payment Partners</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                alias sint vero praesentium Praesentium ex neque placeat
                                illo animi, dignissimos.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="payment-slider">
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b21dbff6d1627894301.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b21875f3d1627894296.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b2209588f1627894304.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1c6a138d1627894214.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1c211d751627894210.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1be97ae51627894206.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1bbdf42c1627894203.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1b832b811627894200.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="payment-slide">
                            <img src="{{ asset('images/gateway/6107b1b4d6b7d1627894196.jpg') }}" alt="image" />
                        </div>
                        <!-- partner-item end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- partner section end -->
        <!-- Partner Section -->
        <section class="pt-100 pb-100" id="partner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="section-title">
                                Join 800+ Businesses Partners That Trust PayLab
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                alias sint vero praesentium Praesentium ex neque placeat
                                illo animi, dignissimos.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-slider">
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d85a59e13641624791641.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d859e8a16781624791528.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d85622525811624790562.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d8560acf9a71624790538.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d85605bc56a1624790533.png') }}""
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d85600586bf1624790528.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                            <div class="single-slide">
                                <div class="client-item">
                                    <img src="{{ asset('images/frontend/partner/60d855f9ba3fe1624790521.png') }}"
                                        alt="image" />
                                </div>
                            </div>
                            <!-- single-slide end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner Section -->
    </div>
@endsection
