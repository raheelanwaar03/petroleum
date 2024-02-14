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
                                            <svg class="logo-abbr" width="60" height="60" viewBox="0 0 60 60"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect class="react-logo" width="60" height="60" rx="30"
                                                    fill="#00A15D" />
                                                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                    x="0" y="0" width="60" height="60">
                                                    <rect class="react-logo" width="60" height="60"
                                                        rx="30" fill="#00A15D" />
                                                </mask>
                                                <g mask="url(#mask0)">
                                                    <path
                                                        d="M130 51.3929L126.5 45.2109C123 38.9626 116 26.6981 109 23.1017C102 19.5715 95 24.875 88 29.3002C81 33.6591 74 37.3053 67 39.0124C60 40.7857 53 40.7857 46 36.3606C39 32.0017 32 23.0519 25 17.7981C18 12.4448 11 10.7874 4 16.9197C-3 23.0519 -10 37.3053 -17 40.7857C-24 44.2662 -31 37.3053 -34.5 33.7088L-38 30.1786V62H-34.5C-31 62 -24 62 -17 62C-10 62 -3 62 4 62C11 62 18 62 25 62C32 62 39 62 46 62C53 62 60 62 67 62C74 62 81 62 88 62C95 62 102 62 109 62C116 62 123 62 126.5 62H130V51.3929Z"
                                                        fill="url(#paint0_linear)" />
                                                    <path
                                                        d="M-54 55.7741L-50.5 50.9799C-47 46.1343 -40 36.623 -33 33.8339C-26 31.0962 -19 35.2092 -12 38.641C-5 42.0213 2 44.849 9 46.1728C16 47.5481 23 47.5481 30 44.1164C37 40.736 44 33.7954 51 29.721C58 25.5694 65 24.2841 72 29.0398C79 33.7954 86 44.849 93 47.5481C100 50.2473 107 44.849 110.5 42.0599L114 39.3222V64H110.5C107 64 100 64 93 64C86 64 79 64 72 64C65 64 58 64 51 64C44 64 37 64 30 64C23 64 16 64 9 64C2 64 -5 64 -12 64C-19 64 -26 64 -33 64C-40 64 -47 64 -50.5 64H-54V55.7741Z"
                                                        fill="url(#paint1_linear)" />
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear" x1="46" y1="13"
                                                        x2="46" y2="62" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#23D58A" />
                                                        <stop offset="1" stop-color="#00A15D" />
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear" x1="30" y1="26"
                                                        x2="30" y2="64" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#FFED4B" />
                                                        <stop offset="1" stop-color="#FF8C4B" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Register your account</h4>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="name" name="name" class="form-control"
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Re-type Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" name="remember" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <script src="{{ asset('assets/public/assets/vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('assets/public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/public/assets/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/public/assets/js/dlabnav-init.js') }}"></script>
        <script src="{{ asset('assets/public/assets/js/styleSwitcher.js') }}"></script>
    </footer>

</body>

</html>
