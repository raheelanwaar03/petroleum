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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/public/assets/images/logo.png') }}">
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
                <img src="{{ asset('assets/public/assets/images/logo.png') }}" height="40px" width="40px" alt="">
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
                            <i class="fa fa-users"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Users') }}">All Users</a></li>
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
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-credit-card"></i>
                            <span class="nav-text">Expense</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Add.Expense') }}">Add Expense</a></li>
                            <li><a href="{{ route('All.Expense') }}">All Expense</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Broker</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Add.Broker') }}">Add Broker</a></li>
                            <li><a href="{{ route('All.Broker') }}">All Broker</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Staff Salary</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Add.Salary') }}">Add Salary Recored</a></li>
                            <li><a href="{{ route('All.Salary.Details') }}">See Recored</a></li>
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
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-bus"></i>
                            <span class="nav-text">Vehicales</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All.Vehicale') }}">Show All</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} Project Management</strong> © 2024 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> for {{ env('APP_NAME') }}</p>

                </div>
            </div>
        </div>
