@extends('layouts.master')

@section('title')
    Digital Bank Malawi | Contact
@endsection

@section('content')
    <div class="main-wrapper">
        <!-- inner hero section start -->
        <section class="inner-hero bg_img"
            data-background="https://script.viserlab.com/paylab/assets/images/frontend/breadcrumb/60d85361c71521624789857.jpg">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="inner-hero-content text-center">
                            <h2 class="inner-hero__title text-white">Contact Us</h2>
                            <ul class="page-breadcrumb justify-content-center">
                                <li><a href="https://script.viserlab.com/paylab">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero section end -->


        <!-- contact section start -->
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="contact-title">Contact Us For Any informations</h2>
                    </div>
                </div>
                <div class="row mt-5 mb-none-30 justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-card">
                            <div class="contact-card__header d-flex flex-wrap">
                                <i class="las la-map-marked-alt"></i>
                                <h4 class="title">Location</h4>
                            </div>
                            <div class="contact-card__content">
                                <p>119 W 24th Street 4th New York, USA</p>
                            </div>
                        </div><!-- contact-card end -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-card">
                            <div class="contact-card__header d-flex flex-wrap">
                                <i class="las la-address-card"></i>
                                <h4 class="title">Email</h4>
                            </div>
                            <div class="contact-card__content">
                                <p><a
                                        href="https://script.viserlab.com/cdn-cgi/l/email-protection#accfc3c1dccdc2d5ecdfd9dcdcc3ded882c9c1cdc5c0"><span
                                            class="__cf_email__"
                                            data-cfemail="cfaca0a2bfaea1b68fbcbabfbfa0bdbbe1aaa2aea6a3">[email&#160;protected]</span></a>
                                </p>
                            </div>
                        </div><!-- contact-card end -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact-card">
                            <div class="contact-card__header d-flex flex-wrap">
                                <i class="las la-globe"></i>
                                <h4 class="title">Follow Us</h4>
                            </div>
                            <div class="contact-card__content">
                                <ul class="social-links style--two d-flex flex-wrap">
                                    <li>
                                        <a href="https://linkedin.com/" target="_blank">
                                            <i class="fab fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="lab la-instagram"></i> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.google.com/" target="_blank">
                                            <i class="lab la-google-plus-g"></i> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="lab la-facebook"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- contact-card end -->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="contact-wrapper">
                            <h2 class="title mb-4">Do you have questions?</h2>
                            <form action="#" method="post">
                                <input type="hidden" name="_token" value="mp0gpSYL4XxuAXJ2MNKM9eKJpxrDTsg3i4QIZHdW">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="name">Name *</label>
                                        <input name="name" type="text" placeholder="Your Name" class="form-control"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email *</label>
                                        <input name="email" type="text" placeholder="Enter E-Mail Address"
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="phone">Subject *</label>
                                        <input name="subject" type="text" placeholder="Write your subject"
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="message">Message *</label>
                                        <textarea name="message" wrap="off" placeholder="Write your message" class="form-control" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="cmn-btn">Contact Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section end -->
    </div>
@endsection
