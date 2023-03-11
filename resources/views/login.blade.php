@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <!-- account section start -->
    <div class="account-area">
        <div class="account-area-bg bg_img"
            data-background="https://script.viserlab.com/paylab/assets/images/frontend/auth_image/60fe9022e0d661627295778.jpg">
        </div>
        <div class="account-wrapper">
            <div class="account-logo text-center">
                <a href="/">
                    <img src="{{ asset('images/logoIcon/logo6654.png?v1') }}" alt="image">
                </a>
            </div>
            <form class="account-form" method="POST" action="" onsubmit="return submitUserForm();">
                <input type="hidden" name="_token" value="mp0gpSYL4XxuAXJ2MNKM9eKJpxrDTsg3i4QIZHdW">
                <div class="form-group">
                    <div class="custom-icon-field">
                        <i class="las la-user"></i>
                        <input type="text" name="username" placeholder="Username" class="form-control" value=""
                            id="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-icon-field">
                        <i class="las la-key"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                            required autocomplete="current-password">
                    </div>
                </div>
                <div class="form-group d-flex flex-wrap justify-content-between">
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div>
                        <a href="password/reset.html" class="p--color font-size--14px">Forget Password?</a>
                    </div>
                </div>
                <div class="form-group">
                </div>

                <div class="mb-4">
                </div>

                <div class="form-group">
                    <button type="submit" class="cmn-btn py-3 w-100">LOGIN NOW</button>
                </div>
                <p>New to Digital Bank MW? <a href="/register"> <span class="auth-link">Signup</span>
                    </a></p>
            </form>
            <div class="account-footer text-center">
                © Copyright 2023 Digital Bank MW | All right reserved
            </div>
        </div>
    </div>
    <!-- account section end -->
@endsection
