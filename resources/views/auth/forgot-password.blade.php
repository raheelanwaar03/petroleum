<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 17:22:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} | Recored Mangment System</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/public/assets/images/favicon.png') }}">
    <link href="{{ asset('assets/public/assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('assets/public/assets/images/logo-full.png') }}"
                                                alt="" height="100px" width="100px">
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label class="form-group" for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email"
                                                name="email" :value="old('email')" required autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button class="btn btn-primary">
                                                {{ __('Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/public/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
