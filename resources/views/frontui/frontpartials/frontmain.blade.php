<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Edge Responsive Multipurpose Template</title>
    <meta name="description" content="">
    {{-- <link rel="stylesheet" href="{{ asset('/test.css') }}"> --}}
    {{-- <link href="{{ url('public/assets/test.css') }}" rel="stylesheet"> --}}


    <link rel="stylesheet" href="{{ global_asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <!-- CSS FILES -->
    {{-- <link rel="stylesheet" href="{{ asset('\front_assets\css\bootstrap.min.css') }}"/> --}}
    <link rel="stylesheet" href="{{ global_asset('front_assets/css/bootstrap.min.css') }}">

    {{-- <link rel="stylesheet" href="{{global_asset('/front_assets/css/bootstrap.min.css')}}"/> --}}
    <link rel="stylesheet" href="{{ global_asset('/front_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ global_asset('/front_assets/css/flexslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ global_asset('/front_assets/css/style.css') }}" media="screen"
        data-name="skins">
    <link rel="stylesheet" href="{{ global_asset('/front_assets/css/layout/wide.css') }}" data-name="layout">

    <link rel="stylesheet" href="{{ global_asset('/front_assets/css/animate.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ global_asset('/front_assets/css/switcher.css') }}" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* ===== FULL WIDTH PRICING SECTION ===== */
        .pricing-section {
            width: 100%;
            padding: 120px 0;
            background: radial-gradient(circle at top, #eef7ff, #ffffff);
            position: relative;
            overflow: hidden;
        }

        /* Soft cloud curves */
        .pricing-section::before,
        .pricing-section::after {
            content: "";
            position: absolute;
            width: 800px;
            height: 800px;
            border-radius: 50%;
            border: 1px solid #dceeff;
        }

        .pricing-section::before {
            top: -400px;
            left: -200px;
        }

        .pricing-section::after {
            bottom: -400px;
            right: -200px;
        }

        /* Inner container */
        .pricing-container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Title */
        .pricing-title {
            font-size: 36px;
            font-weight: 800;
            color: #0b1d33;
            margin-bottom: 25px;
        }

        /* Toggle */
        .pricing-toggle {
            display: inline-flex;
            background: #ffffff;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 40px;
        }

        .pricing-toggle button {
            border: none;
            padding: 10px 26px;
            background: transparent;
            font-weight: 600;
            cursor: pointer;
        }

        .pricing-toggle button.active {
            background: #1e88e5;
            color: #fff;
        }

        /* Pricing Card */
        .pricing-card {
            display: flex;
            max-width: 850px;
            margin: auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            overflow: hidden;
        }

        /* Left */
        .pricing-left {
            flex: 1;
            padding: 40px;
            text-align: center;
        }

        .pricing-icon {
            width: 50px;
            height: 50px;
            margin: auto;
            background: #eaf3ff;
            color: #1e88e5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .pricing-label {
            font-weight: 600;
            margin-top: 15px;
        }

        .price {
            font-size: 32px;
            font-weight: 800;
            color: #0b1d33;
            margin: 15px 0;
        }

        .price span {
            font-size: 14px;
            font-weight: 500;
            color: #666;
        }

        .tax-note {
            color: #999;
        }

        /* Right */
        .pricing-right {
            flex: 1;
            background: #f7fbff;
            padding: 40px;
        }

        .pricing-right h5 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .pricing-right ul {
            list-style: none;
            padding: 0;
        }

        .pricing-right li {
            margin-bottom: 12px;
            font-size: 15px;
            color: #444;
        }

        .pricing-right i {
            color: #1e88e5;
            margin-right: 8px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .pricing-card {
                flex-direction: column;
            }
        }

        /* ===== TEAM SECTION ===== */
        .team-section {
            background: #f8fafc;
        }

        .team-card {
            background: orange;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
        }

        .team-img {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .team-img img {
            width: 100%;
            border-radius: 12px;
        }

        .team-social {
            position: absolute;
            inset: 0;
            background: rgba(11, 29, 51, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .team-img:hover .team-social {
            opacity: 1;
        }

        .team-social a {
            color: #fff;
            background: #1e88e5;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .team-social a:hover {
            background: #1565c0;
        }

        .team-desc {
            font-size: 14px;
            color: rgb(38, 35, 35);
            margin-top: 10px;
        }

        /* ===== CLIENTS ===== */
        .clients {
            background: #f9fafc;
        }

        .client-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .client-card img {
            max-height: 80px;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }

        .client-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .client-card:hover img {
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        /* ===== PROMO SECTION ===== */
        .enhanced-promo {
            background: linear-gradient(135deg, #0b1d33, #102a43);
            padding: 80px 0;
        }

        .enhanced-promo h2 {
            font-size: 36px;
        }

        .enhanced-promo .btn-primary {
            background: #1e88e5;
            border: none;
        }

        .enhanced-promo .btn-primary:hover {
            background: #1565c0;
        }

        /* ================= FOOTER THEME ================= */
        :root {
            --footer-bg: #3f3f3f;
            --footer-dark: #2f2f2f;
            --footer-accent: #0b1d33;
            --footer-text: #cfcfcf;
        }

        /* Top icon bar */
        .footer-top {
            background: var(--footer-bg);
            padding: 50px 0;
        }

        .footer-top-box {
            background: #4a4a4a;
            border-radius: 6px;
            padding: 30px;
            text-align: center;
        }

        .footer-top-box i {
            width: 55px;
            height: 55px;
            line-height: 55px;
            background: var(--footer-accent);
            color: #fff;
            border-radius: 50%;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .footer-top-box h5 {
            color: #fff;
            margin-bottom: 5px;
        }

        .footer-top-box p {
            color: #bdbdbd;
            font-size: 14px;
        }

        /* Main footer */
        .footer {
            background: var(--footer-bg);
            color: var(--footer-text);
            padding: 60px 0;
        }

        .footer h4 span {
            color: var(--footer-accent);
        }

        .footer a {
            color: #bdbdbd;
        }

        .footer a:hover {
            color: #fff;
        }

        /* Newsletter */
        .newsletter input {
            border-radius: 30px;
            padding: 10px 20px;
            border: none;
            width: 70%;
        }

        .newsletter button {
            border-radius: 30px;
            padding: 10px 25px;
            background: var(--footer-accent);
            color: #fff;
            border: none;
        }

        /* Footer links */
        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links li i {
            margin-right: 8px;
            color: var(--footer-accent);
        }

        /* Bottom bar */
        .footer_bottom {
            background: var(--footer-dark);
            padding: 15px 0;
            color: #aaa;
        }

        .footer_social i {
            color: #aaa;
        }

        .footer_social i:hover {
            color: #fff;
        }

        #navbar {
            display: inline;
        }

        .youtube-button {
            text-align: center;
            margin: 20px 0;
        }

        /* ===== BUSY HEADER STYLE ===== */

        .busy-strip {
            background: #0b5fa5;
            color: #fff;
            padding: 10px 0;
            font-size: 16px;
        }

        /* HEADER */
        .busy-header {
            background: #ffffff;
            border-bottom: 1px solid #eee;
            padding: 18px 0;
        }

        .busy-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: #0b1d33;
        }

        .busy-logo span {
            line-height: 1.2;
        }

        .busy-logo small {
            display: block;
            font-size: 12px;
            font-weight: 500;
            color: #666;
        }

        /* NAV */
        .busy-nav .nav-link {
            font-weight: 600;
            color: #333 !important;
            padding: 10px 16px;
        }

        .busy-nav .nav-link:hover {
            color: #0b5fa5 !important;
        }

        /* ACTIONS */
        .busy-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .busy-login {
            font-weight: 600;
            color: #333;
            text-decoration: none;
        }

        .busy-login:hover {
            color: #0b5fa5;
        }

        /* FREE TRIAL BUTTON */
        .busy-trial-btn {
            background: #e85b5b;
            color: #fff;
            font-weight: 600;
            padding: 10px 22px;
            border-radius: 8px;
            border: none;
        }

        .busy-trial-btn:hover {
            background: #d84c4c;
            color: #fff;
        }

        /* ===== FEATURE SECTION ===== */
        .feature-section {
            background: #f4f7fb;
        }

        .feature-card {
            background: #fff;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-weight: 700;
            color: #0b1d33;
            margin-bottom: 20px;
        }

        /* Feature List */
        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            font-size: 15px;
            color: #444;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .feature-list i {
            color: #1e88e5;
            margin-right: 10px;
            font-size: 18px;
        }

        /* Skills */
        .skill-item {
            margin-bottom: 18px;
        }

        .skill-item span {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #333;
        }

        .progress {
            height: 10px;
            background: #e9ecef;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            background: linear-gradient(90deg, #1e88e5, #1565c0);
            font-size: 12px;
            text-align: right;
            padding-right: 8px;
            line-height: 10px;
            font-weight: 600;
        }

        /* ==========================corousel main part================================ */
        /* ================= BUSY STYLE HERO ================= */

        .busy-hero {
            background: linear-gradient(180deg, #f5fbff, #ffffff);
            padding: 100px 0;
            position: relative;
        }

        /* Cloud effect */
        .busy-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle at 20% 30%, rgba(30, 136, 229, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 80% 40%, rgba(30, 136, 229, 0.08) 0%, transparent 40%);
        }

        /* Left text */
        .busy-title {
            font-size: 46px;
            font-weight: 800;
            color: #0b1d33;
            line-height: 1.3;
        }

        .busy-title span {
            color: #1e88e5;
        }

        .busy-subtitle {
            font-size: 17px;
            color: #555;
            margin: 20px 0;
            max-width: 600px;
        }

        /* Points */
        .busy-points {
            list-style: none;
            padding: 0;
        }

        .busy-points li {
            font-size: 15px;
            color: #333;
            margin-bottom: 10px;
        }

        .busy-points i {
            color: #1e88e5;
            margin-right: 8px;
        }

        /* Demo card */
        .demo-card {
            background: #fff;
            border-radius: 16px;
            padding: 35px;
        }

        .demo-card label {
            font-weight: 600;
            font-size: 14px;
        }

        .demo-card .form-control {
            border-radius: 8px;
            height: 45px;
        }

        .country-code {
            background: #f1f1f1;
            padding: 10px 14px;
            border-radius: 8px 0 0 8px;
            font-weight: 600;
            border: 1px solid #ced4da;
            border-right: none;
        }

        .demo-card .form-group .d-flex input {
            border-radius: 0 8px 8px 0;
        }

        .demo-btn {
            background: #e85b5b;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
        }

        .demo-btn:hover {
            background: #d94a4a;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #2f2f2f;
            color: #ccc;
            padding: 60px 0;
        }

        .footer_bottom {
            background: #1f1f1f;
            color: #aaa;
            padding: 15px 0;
        }

        /* ===== CLOUD PRODUCT SECTION ===== */
        /* ===== FULL WIDTH CLOUD PRODUCT SECTION ===== */
        .cloud-products {
            width: 100%;
            background: linear-gradient(180deg, #f4f8ff 0%, #ffffff 100%);
            padding: 120px 0;
        }

        /* INNER CONTENT WIDTH (LIKE BUSY SITE) */
        .cloud-container {
            max-width: 1400px;
            margin: auto;
            padding: 0 40px;
        }

        /* TITLE */
        .cloud-main-title {
            font-size: 42px;
            font-weight: 800;
            color: #0b1d33;
        }

        .cloud-main-subtitle {
            max-width: 800px;
            margin: 15px auto 0;
            color: #555;
            font-size: 18px;
        }

        /* ROW STYLE */
        .cloud-row {
            padding: 80px 0;
            border-bottom: 1px solid #e6edf6;
        }

        /* HEADINGS */
        .cloud-row h4 {
            font-size: 28px;
            font-weight: 700;
            color: #0b1d33;
            margin-bottom: 18px;
        }

        /* LIST */
        .cloud-row ul {
            padding-left: 20px;
        }

        .cloud-row ul li {
            margin-bottom: 12px;
            font-size: 16px;
            color: #444;
            position: relative;
        }

        .cloud-row ul li::before {
            content: "✔";
            color: #1e88e5;
            font-weight: bold;
            margin-right: 10px;
        }

        /* ICON / ILLUSTRATION */
        .cloud-icon {
            font-size: 140px;
            color: #1e88e5;
            opacity: 0.95;
        }

        /* ALTERNATE BACKGROUND (LIKE BUSY PAGE FLOW) */
        .cloud-row:nth-child(even) {
            background: #f8fbff;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .cloud-container {
                padding: 0 20px;
            }

            .cloud-icon {
                font-size: 90px;
                margin-top: 30px;
            }

            .cloud-row {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body class="home">
    {{-- ================= TOP BAR ================= --}}
    <div class="busy-strip">
        <div class="container text-center">
            <strong>
                {{ $softwarecompinfo->software_firm_name }} Business Software – Now on Cloud
            </strong>
        </div>
    </div>

    {{-- ================= MIDDLE HEADER ================= --}}
    <header class="busy-header">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- LOGO -->
            <div class="busy-logo">
                <img src="{{ global_asset('front_assets/images/logo.png') }}" alt="Logo"
                    onerror="this.style.display='none'">
                <span>
                    {{ $softwarecompinfo->software_firm_name ?? 'BUSY ERP' }}
                    <small>Business Accounting Software</small>
                </span>
            </div>

            <!-- NAVIGATION -->
            <nav class="busy-nav">
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Accounting Software
                        </a>
                        <div class="dropdown-menu">
                            @forelse($itemgroup as $group)
                                <a class="dropdown-item" href="#">
                                    {{ $group->item_group }}
                                </a>
                            @empty
                                <span class="dropdown-item text-muted">No Products</span>
                            @endforelse
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            GST
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">GST Billing</a>
                            <a class="dropdown-item" href="#">GST Reports</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Resources & Guides
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Blogs</a>
                            <a class="dropdown-item" href="#">Videos</a>
                            <a class="dropdown-item" href="#">Help</a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- RIGHT ACTION -->
            <div class="busy-actions">
                @guest
                    <a href="{{ route('login') }}" class="busy-login">Login</a>
                @else
                    <a href="{{ route('home') }}" class="busy-login">Dashboard</a>
                @endguest

                <a href="{{ url('/contact') }}" class="btn busy-trial-btn">
                    Free Trial
                </a>
            </div>

        </div>
    </header>
    <!--End Header-->

    {{-- ================= HERO SECTION ================= --}}


    {{-- <header id="header">
        <!-- Start header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-lg-7 col-sm-5 top-info"> --}}
    {{-- <span><i class="fa fa-phone"></i>Phone:{{$softwarecompinfo->software_mobile}},{{$softwarecompinfo->software_phone}}</span> --}}
    {{-- <span class="hidden-sm"><i class="fa fa-envelope"></i>Email: {{$softwarecompinfo->software_email}}</span> 
                    </div>
                    <div class="col-lg-5 col-sm-7 top-info clearfix">
                        <ul>

                            @guest

                            @if (Route::has('login'))
                                <a class="btn btn-danger"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            
                            @if (Route::has('register'))
                                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif

                            @else
                           
                           <a href="{{ route('home') }}" class = "btn btn-warning"> 
                                    {{ Auth::user()->name }} -Go To  Dashboard 
                                </a>

                               <a class=" btn btn-primary dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            @endguest


                        
                          
                            <li><a class="my-rss" href="{{$softwarecompinfo->software_af5}}"><i class="fa fa-eye"></i></a></li>
                            <li><a class="my-skype" href="{{$softwarecompinfo->software_af6}}"><i class="fa fa-edit"></i></a></li>
                            <li><a class="my-google" href="{{$softwarecompinfo->software_af7}}"><i class="fa fa-print"></i></a></li>
                            <li>
                                <form class="search-bar">
                                    <label for="search" class="search-label">
                                        <button class="search-button"><i class="fa fa-search"></i></button><!-- Fix the break-row-bug
                                        --><input type="text" id="search" class="search-input" />
                                    </label>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header> --}}
    <!--End Header-->

    <section class="wrapper">
        <section class="cloud-hero busy-hero">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-7">
                        <h1 class="busy-title">
                            {{ $softwarecompinfo->software_firm_name }} Online –
                            <br>
                            <span>Run Your Business Anytime, Anywhere</span>
                        </h1>

                        <p class="busy-subtitle">
                            {{ $softwarecompinfo->software_firm_name }} is a cloud-ready
                            business software suite designed for Indian SMEs.
                            Manage accounting, billing, inventory, GST and operations
                            securely from anywhere — no IT expertise required.
                        </p>

                        <ul class="busy-points">
                            <li><i class="fa fa-check-circle"></i> Cloud & GST Ready</li>
                            <li><i class="fa fa-check-circle"></i> Secure Remote Access</li>
                            <li><i class="fa fa-check-circle"></i> Multi-Business Support</li>
                            <li><i class="fa fa-check-circle"></i> Trusted by 1000+ Businesses</li>
                        </ul>
                    </div>

                    <!-- RIGHT DEMO CARD -->
                    <div class="col-lg-5">
                        <div class="demo-card shadow-lg">
                            <h4 class="text-center mb-4">
                                <strong>BOOK A DEMO</strong>
                            </h4>

                            <form>
                                <div class="form-group">
                                    <label>Phone Number *</label>
                                    <div class="d-flex">
                                        <span class="country-code">+91</span>
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email ID *</label>
                                    <input type="email" class="form-control" placeholder="Email ID">
                                </div>

                                <div class="form-group">
                                    <label>City *</label>
                                    <input type="text" class="form-control" placeholder="City">
                                </div>

                                <button type="submit" class="btn btn-danger btn-block demo-btn">
                                    Book A Demo
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--end info service-->

        <!--Start recent work-->
        <section class="cloud-products">
            <div class="cloud-container">

                <!-- SECTION TITLE -->
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="cloud-main-title">Effortless Business Software</h2>
                        <p class="cloud-main-subtitle">
                            Seamless access, total control, and powerful automation for every business type
                        </p>
                    </div>
                </div>

                <!-- ITEM 1 -->
                <div class="row align-items-center cloud-row">
                    <div class="col-md-6">
                        <h4>Hotel & Hospitality Management</h4>
                        <ul>
                            <li>Room booking, billing & guest management</li>
                            <li>Real-time occupancy & housekeeping status</li>
                            <li>Cloud reports & multi-location access</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-hotel cloud-icon"></i>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="row align-items-center cloud-row flex-md-row-reverse">
                    <div class="col-md-6">
                        <h4>Busy / Tally Cloud Accounting</h4>
                        <ul>
                            <li>GST-ready invoicing & compliance</li>
                            <li>Secure cloud access from anywhere</li>
                            <li>Automated backups & data protection</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-cloud cloud-icon"></i>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="row align-items-center cloud-row">
                    <div class="col-md-6">
                        <h4>Garment & Manufacturing ERP</h4>
                        <ul>
                            <li>Production, stock & size-wise tracking</li>
                            <li>Raw material & finished goods control</li>
                            <li>Integrated accounting & reports</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-industry cloud-icon"></i>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="row align-items-center cloud-row flex-md-row-reverse">
                    <div class="col-md-6">
                        <h4>Retail, Hardware & Spare Parts Billing</h4>
                        <ul>
                            <li>Fast billing with barcode support</li>
                            <li>Multi-warehouse inventory control</li>
                            <li>Customer, supplier & GST reports</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-cogs cloud-icon"></i>
                    </div>
                </div>

                <!-- ITEM 5 -->
                <div class="row align-items-center cloud-row">
                    <div class="col-md-6">
                        <h4>Restaurant & POS Solutions</h4>
                        <ul>
                            <li>Table management & KOT system</li>
                            <li>Fast POS billing & order tracking</li>
                            <li>Sales analytics & performance insights</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-cutlery cloud-icon"></i>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================= PRICING SECTION ================= -->
        <section class="pricing-section">
            <div class="pricing-container text-center">

                <h2 class="pricing-title">
                    Ready to Grow Your Business With Us?
                </h2>

                <!-- Toggle -->
                <div class="pricing-toggle">
                    <button id="yearlyBtn" class="active">Yearly</button>
                    <button id="quarterlyBtn">Quarterly</button>
                </div>

                <!-- Pricing Card -->
                <div class="pricing-card">

                    <!-- Left -->
                    <div class="pricing-left">
                        <div class="pricing-icon">
                            <i class="fa fa-rupee"></i>
                        </div>

                        <p class="pricing-label">Subscription Amount</p>
                        <small>Per User</small>

                        <h2 class="price">
                            <span id="priceAmount">₹10,800</span>
                            <span id="priceDuration">/ Yearly</span>
                        </h2>


                        <small class="tax-note">*Prices are exclusive of GST</small>
                    </div>

                    <!-- Right -->
                    <div class="pricing-right">
                        <h5>What’s included</h5>
                        <ul id="pricingFeatures">
                            <li><i class="fa fa-check-circle"></i> One Company is allowed</li>
                            <li><i class="fa fa-check-circle"></i> ₹7,200/- for Additional Company</li>
                            <li><i class="fa fa-check-circle"></i> Cloud Access (24×7)</li>
                            <li><i class="fa fa-check-circle"></i> Secure Data Backup</li>
                        </ul>

                    </div>

                </div>

            </div>
        </section>

        <!--Start recent work-->



        <section class="feature-section py-5">
            <div class="container">
                <div class="row align-items-center">

                    {{-- WHY CHOOSE US --}}
                    <div class="col-lg-6 mb-4 wow fadeInLeft">
                        <div class="feature-card">
                            <h3 class="section-title">
                                Why Choose {{ $softwarecompinfo->software_firm_name }}?
                            </h3>

                            <p class="text-muted mb-4">
                                {{ $softwarecompinfo->software_firm_name }} Hotel ERP is built to
                                simplify hotel operations, improve efficiency, and deliver
                                an exceptional guest experience through smart automation.
                            </p>

                            <ul class="feature-list">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Comprehensive hotel management modules
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Clean & user-friendly interface
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Real-time reports & analytics
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Fully customizable workflows
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Reliable support & regular updates
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- TRUST / PERFORMANCE --}}
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="feature-card">
                            <h3 class="section-title">Trusted by Clients</h3>

                            <div class="skill-item">
                                <span>Easy To Use</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%">80%</div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <span>Responsive Across Devices</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 93%">93%</div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <span>System Reliability</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 99%">99%</div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <span>Reporting & Printing</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 86%">86%</div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <span>Customer Support</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 89%">89%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="team-section py-5">
            <div class="container">

                {{-- Section Title --}}
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="font-weight-bold text-primary">Meet Our Team</h3>
                        <p class="text-muted">
                            A dedicated team driving innovation and excellence at
                            {{ $softwarecompinfo->software_firm_name }}
                        </p>
                    </div>
                </div>

                <div class="row">

                    {{-- Team Member --}}
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card text-center">
                            <div class="team-img">
                                <img src="images/teams/1.png" alt="Hariom">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1">Hariom</h5>
                            <small class="text-danger font-weight-bold">Operations Manager</small>
                            <p class="team-desc">
                                Oversees daily operations and ensures smooth workflow across
                                departments with a focus on efficiency and growth.
                            </p>
                        </div>
                    </div>

                    {{-- Team Member --}}
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card text-center">
                            <div class="team-img">
                                <img src="images/teams/2.png" alt="Pankaj">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1">Pankaj</h5>
                            <small class="text-danger font-weight-bold">Full Stack Developer</small>
                            <p class="team-desc">
                                Builds scalable, secure web applications and leads
                                backend architecture for ERP solutions.
                            </p>
                        </div>
                    </div>

                    {{-- Team Member --}}
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card text-center">
                            <div class="team-img">
                                <img src="images/teams/3.png" alt="Reshma">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1">Reshma</h5>
                            <small class="text-danger font-weight-bold">UI / UX Designer</small>
                            <p class="team-desc">
                                Designs intuitive interfaces and user experiences
                                that align business goals with user needs.
                            </p>
                        </div>
                    </div>

                    {{-- Team Member --}}
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="team-card text-center">
                            <div class="team-img">
                                <img src="images/teams/4.png" alt="Sonali">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1">Sonali</h5>
                            <small class="text-danger font-weight-bold">Software Engineer</small>
                            <p class="team-desc">
                                Develops high-quality features with a focus on
                                performance, security, and maintainability.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="clients py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h3 class="font-weight-bold text-primary">Our Trusted Clients</h3>
                        <p class="text-muted">
                            Companies that rely on {{ $softwarecompinfo->software_firm_name }} ERP
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-sm-6 col-md-3 mb-4">
                            <div class="client-card text-center">
                                <img src="images/clients/{{ $i }}.png" class="img-fluid"
                                    alt="Client {{ $i }}">
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </section>

        <section class="promo_box enhanced-promo wow fadeInUp" data-wow-offset="80">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-8">
                        <h2 class="text-white font-weight-bold mb-3">
                            Best Software for Hotel Business
                        </h2>
                        <p class="text-light lead mb-4">
                            {{ $softwarecompinfo->software_firm_name }} Hotel ERP is a complete,
                            modern solution designed to streamline hotel operations,
                            improve guest experience, and boost profitability.
                        </p>
                    </div>

                    <div class="youtube-button">
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channelid="UCArw9uq7lQNVMyWSLO9XzuQ" data-layout="full"
                            data-count="default"></div>
                    </div>
                </div>

            </div>
            </div>
        </section>


    </section><!--end wrapper-->

    {{-- ================= FOOTER ICON STRIP ================= --}}
    <div class="footer-top">
        <div class="container">
            <div class="row text-center">

                <div class="col-md-3">
                    <div class="footer-top-box">
                        <i class="fa fa-map-marker"></i>
                        <h5>Address</h5>
                        <p>
                            {{ $softwarecompinfo->software_address1 }}
                            {{ $softwarecompinfo->software_city }}
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-top-box">
                        <i class="fa fa-envelope"></i>
                        <h5>Mail Us</h5>
                        <p>{{ $softwarecompinfo->software_email }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-top-box">
                        <i class="fa fa-phone"></i>
                        <h5>Telephone</h5>
                        <p>{{ $softwarecompinfo->software_mobile }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-top-box">
                        <i class="fa fa-globe"></i>
                        <h5>{{ request()->getHost() }}</h5>
                        <p>{{ $softwarecompinfo->software_mobile }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ================= MAIN FOOTER ================= --}}
    <footer class="footer">
        <div class="container">
            <div class="row">

                {{-- Newsletter --}}
                <div class="col-md-3">
                    <h4><span>Newsletter</span></h4>

                    <p>Welcome to {{ $softwarecompinfo->software_firm_name }} ERP, where we revolutionize hotel
                        management with our cutting-edge Hotel ERP system. At
                        {{ $softwarecompinfo->software_firm_name }}, we understand the complexities and challenges
                        that come with running a successful hotel. That’s why we’ve developed a comprehensive
                        solution designed to streamline operations, enhance guest experiences, and maximize
                        efficiency.</p>
                    <div class="newsletter">
                        <input type="email" placeholder="Enter your email">
                        <button>SignUp</button>
                    </div>
                </div>

                {{-- Customer Service --}}
                <div class="col-md-3">
                    <h4><span>Customer Service</span></h4>
                    <ul class="footer-links list-unstyled">
                        <li><i class="fa fa-angle-right"></i> Contact Us</li>
                        <li><i class="fa fa-angle-right"></i> Working History</li>
                        <li><i class="fa fa-angle-right"></i> Testimonials</li>
                        <li><i class="fa fa-angle-right"></i> My Account</li>
                    </ul>
                </div>

                {{-- Information --}}
                <div class="col-md-3">
                    <h4><span>Information</span></h4>
                    <ul class="footer-links list-unstyled">
                        <li><i class="fa fa-angle-right"></i> About Us</li>
                        <li><i class="fa fa-angle-right"></i> Privacy Policy</li>
                        <li><i class="fa fa-angle-right"></i> Terms & Conditions</li>
                        <li><i class="fa fa-angle-right"></i> FAQ</li>
                    </ul>
                </div>

                {{-- Extras --}}
                <div class="col-md-3">
                    <h4><span>Extras</span></h4>
                    <ul class="footer-links list-unstyled">
                        <li><i class="fa fa-angle-right"></i> Other Details</li>
                        <li><i class="fa fa-angle-right"></i> Work</li>
                        <li><i class="fa fa-angle-right"></i> Products</li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    {{-- ================= FOOTER BOTTOM ================= --}}
    <section class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-sm-6">
                    © {{ date('Y') }}
                    {{ $softwarecompinfo->software_firm_name }} ERP.
                    All rights reserved.
                </div>

                <div class="col-sm-6 text-right">
                    <div class="footer_social">
                        <a href="#"><i class="fa fa-facebook mx-2"></i></a>
                        <a href="#"><i class="fa fa-twitter mx-2"></i></a>
                        <a href="#"><i class="fa fa-linkedin mx-2"></i></a>
                        <a href="#"><i class="fa fa-youtube mx-2"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ global_asset('/front_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ global_asset('/front_assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ global_asset('/front_assets/js/retina-1.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.cookie.js') }}"></script> <!-- jQuery cookie -->
    {{-- <script type="text/javascript" src="{{global_asset('/front_assets/js/styleswitch.js')}}"></script> <!-- Style Colors Switcher --> --}}
    <!--
<script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
-->
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.smartmenus.min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.smartmenus.bootstrap.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.jcarousel.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jflickrfeed.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/swipe.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ global_asset('/front_assets/js/jquery.flexslider-min.js') }}"></script>

    <script src="{{ global_asset('/front_assets/js/main.js') }}"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
    <script>
        $('.flexslider.top_slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: true,
            prevText: "&larr;",
            nextText: "&rarr;"
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ global_asset('/front_assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>


    <script>
        const yearlyBtn = document.getElementById('yearlyBtn');
        const quarterlyBtn = document.getElementById('quarterlyBtn');

        const priceAmount = document.getElementById('priceAmount');
        const priceDuration = document.getElementById('priceDuration');
        const pricingFeatures = document.getElementById('pricingFeatures');

        yearlyBtn.addEventListener('click', function() {
            yearlyBtn.classList.add('active');
            quarterlyBtn.classList.remove('active');

            priceAmount.innerText = '₹10,800';
            priceDuration.innerText = '/ Yearly';

            pricingFeatures.innerHTML = `
            <li><i class="fa fa-check-circle"></i> One Company is allowed</li>
            <li><i class="fa fa-check-circle"></i> ₹7,200/- for Additional Company</li>
            <li><i class="fa fa-check-circle"></i> Cloud Access (24×7)</li>
            <li><i class="fa fa-check-circle"></i> Secure Data Backup</li>
        `;
        });

        quarterlyBtn.addEventListener('click', function() {
            quarterlyBtn.classList.add('active');
            yearlyBtn.classList.remove('active');

            priceAmount.innerText = '₹3,000';
            priceDuration.innerText = '/ Quarterly';

            pricingFeatures.innerHTML = `
            <li><i class="fa fa-check-circle"></i> One Company is allowed</li>
            <li><i class="fa fa-check-circle"></i> ₹2,200/- for Additional Company</li>
            <li><i class="fa fa-check-circle"></i> Cloud Access (24×7)</li>
            <li><i class="fa fa-check-circle"></i> Secure Quarterly Backup</li>
        `;
        });
    </script>


</body>
