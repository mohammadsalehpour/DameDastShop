<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="{{ URL::to('https://keenthemes.com/metronic') }}" />
    <meta property="og:site_name" content="store | DameDast" />
    <link rel="canonical" href="{{ URL::to('https://preview.keenthemes.com/metronic8') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/media/logos/favicon.ico') }}" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!--begin::Fonts-->
    <link rel="stylesheet" href="{{ URL::to('https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700') }}" />
    <!--end::Fonts-->

    {{-- {{ URL::to('') }} --}}
    {{-- {{ URL::asset('') }} --}}

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="../../demo1/dist/landing.html">
                                    <img alt="Logo" src="{{ URL::asset('assets/media/logos/landing.svg') }}"
                                        class="logo-default h-25px h-lg-30px" />
                                    <img alt="Logo" src="{{ URL::asset('assets/media/logos/landing-dark.svg') }}"
                                        class="logo-sticky h-20px h-lg-25px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">How it
                                                Works</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                                data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Achievements</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio"
                                                data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Portfolio</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="btn btn-success">Sign In</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Build An Outstanding Solutions
                            <br />with
                            <span
                                style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">The Best Theme Ever</span>
                            </span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <a href="../../demo1/dist/index.html" class="btn btn-primary">Try Metronic</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Clients-->
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                            <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                            <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                            title="KPMG International">
                            <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                            <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                            <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                            title="AON - Empower Results">
                            <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                            <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                            <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px"
                                alt="" />
                        </div>
                        <!--end::Client-->
                    </div>
                    <!--end::Clients-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="how-it-works"
                        data-kt-scroll-offset="{default: 100, lg: 150}">How it Works</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20">
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9"
                                alt="" />
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold text-dark">Jane Miller</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                <br />by using single tool for different
                                <br />amazing and great
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9"
                                alt="" />
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold text-dark">Setup Your App</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                <br />by using single tool for different
                                <br />amazing and great
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0">
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9"
                                alt="" />
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold text-dark">Enjoy Nautica App</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                <br />by using single tool for different
                                <br />amazing and great
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Product slider-->
                <div class="tns tns-default">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="assets/media/product-demos/demo1.png" class="card-rounded shadow mw-100"
                                alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="assets/media/product-demos/demo2.png" class="card-rounded shadow mw-100"
                                alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="assets/media/product-demos/demo4.png" class="card-rounded shadow mw-100"
                                alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="assets/media/product-demos/demo5.png" class="card-rounded shadow mw-100"
                                alt="" />
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Slider-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                </div>
                <!--end::Product slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->
        <!--begin::Statistics Section-->
        <div class="mt-sm-n10">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mt-15 mb-18" id="achievements"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single
                            tool
                            <br />for different amazing and great useful admin
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Statistics-->
                    <div class="d-flex flex-center">
                        <!--begin::Items-->
                        <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="2" width="9" height="9"
                                            rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="2" width="9"
                                            height="9" rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="13" width="9"
                                            height="9" rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="2" y="13" width="9"
                                            height="9" rx="2" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700"
                                            data-kt-countup-suffix="+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Known Companies</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80"
                                            data-kt-countup-suffix="K+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Statistic Reports</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35"
                                            data-kt-countup-suffix="M+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Secure Payments</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Testimonial-->
                    <div class="fs-2 fw-semibold text-muted text-center mb-3">
                        <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write
                        about it in a
                        <br />
                        <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                        <span class="fs-1 lh-1 text-gray-700">“</span>
                    </div>
                    <!--end::Testimonial-->
                    <!--begin::Author-->
                    <div class="fs-2 fw-semibold text-muted text-center">
                        <a href="../../demo1/dist/account/security.html" class="link-primary fs-4 fw-bold">Marcus
                            Levy,</a>
                        <span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
                    </div>
                    <!--end::Author-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Statistics Section-->
        <!--begin::Team Section-->
        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
                        Our Great Team</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to
                        complete, additional costs to
                        <br />integrate and test each extra feature creeps up and haunts most of us.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Slider-->
                <div class="tns tns-default">
                    <!--begin::Wrapper-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next"
                        data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-5.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Team Section-->
        <!--begin::Projects Section-->
        <div class="mb-lg-n15 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                    <!--begin::Card body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Heading-->
                        <div class="text-center mb-5 mb-lg-10">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5" id="portfolio"
                                data-kt-scroll-offset="{default: 100, lg: 250}">Our Projects</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Tabs wrapper-->
                        <div class="d-flex flex-center mb-5 mb-lg-15">
                            <!--begin::Tabs-->
                            <ul class="nav border-transparent flex-center fs-5 fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active"
                                        href="#" data-bs-toggle="tab"
                                        data-bs-target="#kt_landing_projects_latest">Latest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                        data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web
                                        Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                        data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile
                                        Apps</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                        data-bs-toggle="tab"
                                        data-bs-target="#kt_landing_projects_development">Development</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Tabs wrapper-->
                        <!--begin::Tabs content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100"
                                            data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x600/img-23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-23.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-22.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-22.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-21.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x400/img-20.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-20.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_web_design">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100"
                                            data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x600/img-11.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-11.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-12.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-21.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x400/img-20.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-20.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-16.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-16.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-12.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x400/img-15.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-15.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100"
                                            data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x600/img-23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-23.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_development">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100"
                                            data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x600/img-15.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-15.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-22.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-22.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay"
                                                    data-fslightbox="lightbox-projects"
                                                    href="assets/media/stock/600x600/img-21.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects"
                                            href="assets/media/stock/600x400/img-14.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                style="background-image:url('assets/media/stock/600x600/img-14.jpg')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tabs content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Projects Section-->
        <!--begin::Pricing Section-->
        <div class="mt-sm-n20">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="py-20 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Plans-->
                    <div class="d-flex flex-column container pt-lg-20">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing"
                                data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>
                            <div class="text-gray-600 fw-semibold fs-5">Save thousands to millions of bucks by using
                                single tool for different
                                <br />amazing and outstanding cool and great useful admin
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Pricing-->
                        <div class="text-center" id="kt_pricing">
                            <!--begin::Nav group-->
                            <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true"
                                style="border: 1px dashed #2B4666;">
                                <a href="#"
                                    class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active"
                                    data-kt-plan="month">Monthly</a>
                                <a href="#"
                                    class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3"
                                    data-kt-plan="annual">Annual</a>
                            </div>
                            <!--end::Nav group-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div
                                            class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">Startup</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-semibold mb-5">Best Settings for Startups
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>
                                                    <span class="fs-3x fw-bold text-primary"
                                                        data-kt-plan-price-month="99"
                                                        data-kt-plan-price-annual="999">99</span>
                                                    <span class="fs-7 fw-semibold opacity-50"
                                                        data-kt-plan-price-month="Mon"
                                                        data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to
                                                        10 Active Users</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to
                                                        30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800">Keen Analytics
                                                        Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(-45 7 15.3137)"
                                                                fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(45 8.41422 7)"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800">Targets Timelines &
                                                        Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(-45 7 15.3137)"
                                                                fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(45 8.41422 7)"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-semibold fs-6 text-gray-800">Unlimited
                                                        Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(-45 7 15.3137)"
                                                                fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(45 8.41422 7)"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div
                                            class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-white mb-5 fw-boldest">Business</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-white opacity-75 fw-semibold mb-5">Best Settings for
                                                    Business</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-white">$</span>
                                                    <span class="fs-3x fw-bold text-white"
                                                        data-kt-plan-price-month="199"
                                                        data-kt-plan-price-annual="1999">199</span>
                                                    <span class="fs-7 fw-semibold text-white opacity-75"
                                                        data-kt-plan-price-month="Mon"
                                                        data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span
                                                        class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Up
                                                        to 10 Active Users</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span
                                                        class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Up
                                                        to 30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span
                                                        class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Keen
                                                        Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span
                                                        class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Targets
                                                        Timelines & Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-semibold fs-6 text-white opacity-75">Unlimited
                                                        Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(-45 7 15.3137)"
                                                                fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(45 8.41422 7)"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#"
                                                class="btn btn-color-primary btn-active-light-primary btn-light">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div
                                            class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">Enterprise</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-semibold mb-5">Best Settings for
                                                    Enterprise</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>
                                                    <span class="fs-3x fw-bold text-primary"
                                                        data-kt-plan-price-month="999"
                                                        data-kt-plan-price-annual="9999">999</span>
                                                    <span class="fs-7 fw-semibold opacity-50"
                                                        data-kt-plan-price-month="Mon"
                                                        data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to
                                                        10 Active Users</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to
                                                        30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Keen
                                                        Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span
                                                        class="fw-semibold fs-6 text-gray-800 text-start pe-3">Targets
                                                        Timelines & Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span
                                                        class="fw-semibold fs-6 text-gray-800 text-start pe-3">Unlimited
                                                        Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2"
                                                                width="20" height="20" rx="10"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                    <!--end::Plans-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Pricing Section-->
        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="clients"
                        data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-lg-10 mb-10 mb-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul
                                        Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya
                                        Clebert</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-16.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave
                                        Brown</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Highlight-->
                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                    style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                    <!--begin::Content-->
                    <div class="my-2 me-5">
                        <!--begin::Title-->
                        <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Start With Metronic Today,
                            <span class="fw-normal">Speed Up Development!</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Join over 100,000 Professionals
                            Community to Stay Ahead</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Link-->
                    <a href="https://1.envato.market/EA4JP"
                        class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on
                        Themeforest</a>
                    <!--end::Link-->
                </div>
                <!--end::Highlight-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->
        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support"
                                        class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-white opacity-50 text-hover-primary">Click to Get a
                                        Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/faqs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://devs.keenthemes.com/"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/blog"
                                        class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://twitter.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                            class="h-20px me-2" alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                            class="h-20px me-2" alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="../../demo1/dist/landing.html">
                                <img alt="Logo" src="assets/media/logos/landing.svg"
                                    class="h-15px h-md-20px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                href="https://keenthemes.com">&copy; 2022 Keenthemes Inc.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul
                            class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                        rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
    <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_engage_demos_header">
                <h3 class="card-title fw-bold text-gray-700">Demos</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                        id="kt_engage_demos_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                    fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2"
                                    rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body" id="kt_engage_demos_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
                    data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                        <div class="mb-7">
                            <div class="d-flex flex-stack">
                                <h3 class="mb-0">Metronic Licenses</h3>
                                <a href="https://themeforest.net/licenses/standard" class="fw-semibold"
                                    target="_blank">License FAQs</a>
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular
                                            License</div>
                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                                    </div>
                                    <div class="fs-7 text-muted">For single end product used by you or one client
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bold">39</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended
                                            License</div>
                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                    </div>
                                    <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bold">969</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom
                                            License</div>
                                    </div>
                                    <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                </div>
                                <div class="text-nowrap">
                                    <a href="https://devs.keenthemes.com" class="btn btn-sm btn-success"
                                        target="_blank">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::Purchase-->
                        <a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy
                            Now</a>
                        <!--end::Purchase-->
                        <!--begin::Demos-->
                        <div class="mb-0">
                            <h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
                            <!--begin::Row-->
                            <div class="row g-5">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo1.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo1"
                                                class="btn btn-sm btn-success shadow">Demo 1</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo2.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo2"
                                                class="btn btn-sm btn-success shadow">Demo 2</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo3.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo3"
                                                class="btn btn-sm btn-success shadow">Demo 3</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo4.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo4"
                                                class="btn btn-sm btn-success shadow">Demo 4</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo5.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo5"
                                                class="btn btn-sm btn-success shadow">Demo 5</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo6.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo6"
                                                class="btn btn-sm btn-success shadow">Demo 6</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo7.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo7"
                                                class="btn btn-sm btn-success shadow">Demo 7</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo8.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo8"
                                                class="btn btn-sm btn-success shadow">Demo 8</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo9.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo9"
                                                class="btn btn-sm btn-success shadow">Demo 9</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo10.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo10"
                                                class="btn btn-sm btn-success shadow">Demo 10</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo11.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo11"
                                                class="btn btn-sm btn-success shadow">Demo 11</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo12.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo12"
                                                class="btn btn-sm btn-success shadow">Demo 12</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo13.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo13"
                                                class="btn btn-sm btn-success shadow">Demo 13</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo14.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo14"
                                                class="btn btn-sm btn-success shadow">Demo 14</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo15.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo15"
                                                class="btn btn-sm btn-success shadow">Demo 15</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo16.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo16"
                                                class="btn btn-sm btn-success shadow">Demo 16</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo17.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo17"
                                                class="btn btn-sm btn-success shadow">Demo 17</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo18.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo18"
                                                class="btn btn-sm btn-success shadow">Demo 18</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo19.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo19"
                                                class="btn btn-sm btn-success shadow">Demo 19</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo20.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo20"
                                                class="btn btn-sm btn-success shadow">Demo 20</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo21.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo21"
                                                class="btn btn-sm btn-success shadow">Demo 21</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo22.png" alt="demo"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo22"
                                                class="btn btn-sm btn-success shadow">Demo 22</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo23.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming
                                                soon</div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo24.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming
                                                soon</div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Demos-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Demos drawer-->
    <!--begin::Help drawer-->
    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                        id="kt_help_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                    fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2"
                                    rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at
                            <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
                        </h2>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question
                                and help others.</span>
                            <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                        </div>
                        <!--end::Description-->
                        <!--begin::Link-->
                        <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
                            Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->
                    <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="https://preview.keenthemes.com/html/metronic/docs"
                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation &
                                    Videos</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to
                                    live demos and code examples to get started.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                        fill="currentColor" />
                                    <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities"
                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins &
                                    Components</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house
                                    components and customized 3rd-party plugins.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                            <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                        fill="currentColor" />
                                    <path
                                        d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and
                                    export the HTML for server side integration.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                            <span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                        fill="currentColor" />
                                    <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="https://devs.keenthemes.com/metronic"
                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic
                                    Downloads</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and
                                    demo with one click.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                            <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New ?</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements
                                    added with our users feedback in mind.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Help drawer-->
    <!--end::Engage drawers-->
    <!--begin::Engage toolbar-->
    <div
        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
        <!--begin::Demos drawer toggle-->
        <button id="kt_engage_demos_toggle"
            class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0"
            title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left"
            data-bs-dismiss="click" data-bs-trigger="hover">
            <span id="kt_engage_demos_label">Demos</span>
        </button>
        <!--end::Demos drawer toggle-->
        <!--begin::Help drawer toggle-->
        <button id="kt_help_toggle"
            class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0"
            title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left"
            data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
        <!--end::Help drawer toggle-->
    </div>
    <!--end::Engage toolbar-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="{{ URL::to('http://www.w3.org/2000/svg') }}">
                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                    rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ URL::asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ URL::asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom/pages/pricing/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>





{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
