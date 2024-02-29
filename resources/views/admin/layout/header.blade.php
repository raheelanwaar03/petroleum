<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} - Petroluem Mangment</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/public/assets/images/favicon.png') }}">
    <link href="{{ asset('assets/public/assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/public/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    @yield('links')
    {{-- Datatabel --}}
    <link href="{{ asset('assets/public/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <x-alert />

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
    Nav header start
***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                <svg class="logo-abbr" width="60" height="60" viewBox="0 0 60 60" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D" />
                    <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60"
                        height="60">
                        <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D" />
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
                        <linearGradient id="paint0_linear" x1="46" y1="13" x2="46" y2="62"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#23D58A" />
                            <stop offset="1" stop-color="#00A15D" />
                        </linearGradient>
                        <linearGradient id="paint1_linear" x1="30" y1="26" x2="30" y2="64"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FFED4B" />
                            <stop offset="1" stop-color="#FF8C4B" />
                        </linearGradient>
                    </defs>
                </svg>

                <div class="brand-title">
                    <h2 class="">{{ env('APP_NAME') }}</h2>
                    <span class="brand-sub-title">Recored Management System</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Admin Dashboard </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/public/assets/images/user.jpg') }}" width="20"
                                        alt="" />
                                    <div class="header-info ms-3">
                                        <span class="fs-18 font-w500 mb-2">{{ auth()->user()->name }}</span>
                                        <small class="fs-12 font-w400">{{ auth()->user()->email }}</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST"
                                        class="dropdown-item ai-icon">
                                        @csrf
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <button type="submit" class="ms-2"
                                            style="background-color:white;color:black;border:none;">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
 Header end
***********************************--> <!--**********************************
    Sidebar start
***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-bus"></i>
                            <span class="nav-text">Vehicales</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Vehicale') }}">Show All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-book"></i>
                            <span class="nav-text">Fuel Record</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Recored') }}">Sold Petrol</a></li>
                            <li><a href="{{ route('Buying.Record') }}">Buying Petrol</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Users') }}">All Users</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-credit-card"></i>
                            <span class="nav-text">Expense</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Add.Expense.Category') }}">Add Categorey</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <img src="{{ asset('assets/pump.jpg') }}" alt="pump icon" height="30px"
                                width="30px">
                            <span class="nav-text">Pumps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Pumps') }}">All Pumps</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-empty.html">Empty Page</a></li>
                        </ul>
                    </li> --}}
                </ul>

                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} Project Management</strong> © 2024 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> for {{ env('APP_NAME') }}</p>

                </div>
            </div>
        </div>
