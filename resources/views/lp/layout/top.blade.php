<!DOCTYPE html>
<html lang="en">

<head>
    <title>PROJEK UAS</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('lp/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('lp/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('lp/css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('lp/css/sliders.css') }}" />
    <link rel="stylesheet" href="{{ asset('lp/css/style.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('lp/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('lp/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('lp/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('lp/img/apple-touch-icon-114x114.png') }}">

</head>

<body class="relative">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <main class="main-wrapper">

        <header class="nav-type-1">
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <div class="search-inner">
                    <div class="search-cell">
                        <form method="get">
                            <div class="search-field-holder">
                                <input type="search" class="form-control main-search-input" placeholder="Search for">
                                <i class="ui-close search-close" id="search-close"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end fullscreen search -->

            <!-- Top Bar -->
            <div class="top-bar hidden-xs">
                <div class="container">
                    <div class="top-bar-links flex-parent">

                        {{-- jaga biar login regis ditengah --}}
                        <ul>
                            <li>

                            </li>
                            <li>

                            </li>
                        </ul>
                        {{-- end jaga --}}

                        <ul class="top-bar-acc" id="top">
                            <li>
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
                                                <a href="{{ route('admin.index') }}"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard
                                                    admin</a>
                                            @elseif (auth()->user()->role == 'user')
                                                <a href="{{ route('user.index') }}"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard
                                                    User</a>
                                            @endif
                                        @else
                                <li class="top-bar-link">
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                        in</a>
                                </li>
                                <li class="top-bar-link">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                </li>
                                @endif
                            @endauth
                    </div>
                    @endif
                    </li>
                    </ul>

                </div>
            </div>
            </div> <!-- end top bar -->

            <nav class="navbar navbar-static-top">
                <div class="navigation" id="sticky-nav">
                    <div class="container relative">

                        <div class="row flex-parent">

                            <div class="navbar-header flex-child">
                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap">
                                        <a href="/">
                                            <img class="logo-dark" src="{{ asset('lp/img/logo_dark.png') }}"
                                                alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Mobile cart -->
                                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                                    <div class="nav-cart-outer">
                                        <div class="nav-cart-inner">
                                            <a href="#" class="nav-cart-icon">
                                                <span class="nav-cart-badge">2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end navbar-header -->

                            <div class="nav-wrap flex-child">
                                <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                                    <ul class="nav navbar-nav">
                                        <li class="mobile-links hidden-lg hidden-md">
                                            <a href="#">My Account</a>
                                        </li>

                                        <!-- Mobile search -->
                                        <li id="mobile-search" class="hidden-lg hidden-md">
                                            <form method="get" class="mobile-search">
                                                <input type="search" class="form-control" placeholder="Search...">
                                                <button type="submit" class="search-button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </li>

                                    </ul> <!-- end menu -->
                                </div> <!-- end collapse -->
                            </div> <!-- end col -->

                            <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                                <ul>
                                    <li class="nav-register">
                                        <a href="#">My Account</a>
                                    </li>
                                    <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                                        <a href="#" class="nav-search search-trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end navigation -->
            </nav> <!-- end navbar -->
        </header>
