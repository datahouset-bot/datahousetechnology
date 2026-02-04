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
        /* CTA SECTION */
.busy-cta {
    background: #ffffff;
    padding: 50px 15px 30px;
}

.busy-cta h2 {
    font-size: 36px;
    font-weight: 600;
    color: #003366;
    margin-bottom: 25px;
}

.btn-cta {
    background: #e85c5c;
    color: #fff;
    padding: 14px 34px;
    font-size: 16px;
    border-radius: 6px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 6px 16px rgba(232, 92, 92, 0.3);
}

.btn-cta:hover {
    background: #d84c4c;
    color: #fff;
}
/* FAQ SECTION WRAPPER */
.faq-wrapper {
    background: #ffffff;
    padding: 30px 15px 80px;
}

/* TITLE */
.faq-title {
    font-size: 34px;
    font-weight: 600;
    color: #003366;
    margin-bottom: 40px;
}

/* FAQ CARD */
.faq-card {
    max-width: 900px;
    background: #fff;
    padding: 30px;
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

/* FAQ ITEM */
.faq-item {
    border: 1px solid #e6e9ee;
    border-radius: 8px;
    margin-bottom: 14px;
    overflow: hidden;
}

/* QUESTION */
.faq-question {
    width: 100%;
    background: #fff;
    border: none;
    padding: 16px 20px;
    font-size: 15px;
    font-weight: 500;
    text-align: left;
    cursor: pointer;
    position: relative;
}

/* Plus / Minus icon */
.faq-question::after {
    content: "+";
    position: absolute;
    right: 20px;
    font-size: 20px;
    transition: 0.3s;
}

.faq-item.active .faq-question::after {
    content: "−";
}

/* ANSWER */
.faq-answer {
    max-height: 0;
    overflow: hidden;
    padding: 0 20px;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    max-height: 200px;
    padding: 10px 20px 16px;
    background: #f9fbff;
}
/* VIEW ALL FAQ BUTTON */
.view-faq-btn {
    background: #0d6efd;
    color: #fff;
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}

.view-faq-btn:hover {
    background: #0b5ed7;
    color: #fff;
}


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
            font-size: 20px;
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
            font-size: 16px;
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
        
/* ===== MEGA MENU FIX ===== */
/* ================= BUSY STYLE FULL-WIDTH MEGA MENU ================= */

.mega-dropdown {
    position: static;
}

/* Full width dropdown */
.mega-menu {
    width: 100%;
    left: 0;
    right: 0;
    top: 100%;
    background: #062f52; /* BUSY dark blue */
    padding: 40px 60px;
    border: none;
    border-radius: 0;
    box-shadow: none;
}

/* Column headings */
.mega-title {
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 15px;
    padding-bottom: 6px;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    text-transform: none;
}

/* Menu items */
.mega-item {
    display: block;
    font-size: 14px;
    color: #e6edf6;
    padding: 6px 0;
    text-decoration: none;
}

/* Bullet style */
.mega-item::before {
    content: "○";
    color: #9cc7ff;
    margin-right: 8px;
}

/* Hover */
.mega-item:hover {
    color: #ffffff;
    padding-left: 5px;
    transition: 0.2s ease;
}

/* Disable icons from earlier style */
.mega-item i {
    display: none;
}

/* Desktop hover */
@media (min-width: 992px) {
    .mega-dropdown:hover .mega-menu {
        display: block;
    }
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
                {{ $softwarecompinfo->software_firm_name }} Business Software 
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
         <nav class="busy-nav navbar navbar-expand-lg">
    <ul class="navbar-nav">

        <!-- ACCOUNTING SOFTWARE MEGA DROPDOWN -->
        <li class="nav-item dropdown mega-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                Accounting Software
            </a>

            <div class="dropdown-menu mega-menu">
            
                    <div class="row">

                        <!-- PLANS -->
                        <div class="col-md-4">
                            <h6 class="mega-title">PRODUCTS & PRICING</h6>
                            <a class="mega-item" href="#">BUSY</a>
                            <a class="mega-item" href="#">SPEED PLUS</a>
                            <a class="mega-item" href="#">MARG</a>
                            <a class="mega-item" href="#">TALLY</a>
                            <a class="mega-item" href="#">BILLING SOFTWARE</a>
                            <a class="mega-item" href="#">CLOUD SERVICE</a>
                        </div>

                        <!-- FEATURES -->
                        <div class="col-md-4">
                            <h6 class="mega-title">FEATURES & FAQ</h6>
                            <a class="mega-item" href="#">Accounting</a>
                            <a class="mega-item" href="#">GST Accounting</a>
                            <a class="mega-item" href="#">Financial Accounting</a>
                            <a class="mega-item" href="#">Auto E-Way Bill</a>
                            <a class="mega-item" href="#">Auto E-Invoice</a>
                            <a class="mega-item" href="#">GSTR Reconciliation</a>
                            <a class="mega-item" href="#">Inventory</a>
                            <a class="mega-item" href="#">FAQs</a>
                        </div>

                        <!-- INDUSTRIES -->
                        <div class="col-md-4">
                            <h6 class="mega-title">INDUSTRY SOLUTIONS</h6>
                            <a class="mega-item" href="#">E-commerce</a>
                            <a class="mega-item" href="#">Retail</a>
                            <a class="mega-item" href="#">Pharma</a>
                            <a class="mega-item" href="#">FMCG</a>
                            <a class="mega-item" href="#">Auto Parts</a>
                            <a class="mega-item" href="#">F & B</a>
                            <a class="mega-item" href="#">Chemical</a>
                            <a class="mega-item" href="#">Computer Hardware</a>
                        </div>

                    </div>
                
            </div>
        </li>

        <!-- GST NORMAL DROPDOWN -->
        <!-- GST MEGA DROPDOWN -->
<li class="nav-item dropdown mega-dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
        GST
    </a>

    <div class="dropdown-menu mega-menu gst-mega">
        <div class="row">

            <!-- COLUMN 1 -->
            <div class="col-md-4">
                <h6 class="mega-title">ALL ABOUT GST</h6>

                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Basics</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Schemes</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> E-Way Bill</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> Transitioning to GST</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> SAC Codes</a>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-md-4">
                <h6 class="mega-title invisible">Hidden</h6>

                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Returns</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> E-Invoice</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> Input Tax Credit</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Penalties & Appeals</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Rates</a>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-md-4">
                <h6 class="mega-title invisible">Hidden</h6>

                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Invoicing</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> GST Payments & Appeals</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> Time, Place & Value of Supply</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> HSN Codes</a>
                <a class="mega-item" href="#"><i class="fa fa-check-circle"></i> TDS</a>
            </div>

        </div>
    </div>
</li>

        <!-- RESOURCES -->
        <li class="nav-item dropdown mega-dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                Resources & Guides
            </a>
             <div class="dropdown-menu mega-menu">
           <div class="row">

                        <!-- PLANS -->
                        <div class="col-md-4">
                            <h6 class="mega-title">RESOURCES</h6>
                            <a class="mega-item" href="#">DOWNLOAD</a>
                            <a class="mega-item" href="#">CASE STUDIES</a>
                            <a class="mega-item" href="#">FAQ</a>
                             <a class="mega-item" href="#">iNVOICE FORMATS</a>
                            <a class="mega-item" href="#">TALLY</a>
                            <a class="mega-item" href="#">BILLING SOFTWARE</a>
                            <a class="mega-item" href="#">CLOUD SERVICE</a>
                        </div>

                        <!-- FEATURES -->
                        <div class="col-md-4">
                            <h6 class="mega-title">GUIDES</h6>
                            <a class="mega-item" href="#">Accounting Guides</a>
                            <a class="mega-item" href="#">Invoicing Guides</a>
                            <a class="mega-item" href="#">Glossary</a>
                            <a class="mega-item" href="#">Buisness Updates</a>
                            <a class="mega-item" href="#">CAs in India</a>
                        </div>
                       
                    </div></div>
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

                <a href="{{ url('/freetrial') }}" class="btn busy-trial-btn">
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

                           <form action="https://dht.datahouseerp.com/addlead" method="POST">

    <!-- REQUIRED HIDDEN FIELDS -->
    <input type="hidden" name="lead_title" value="Website Lead">
    <input type="hidden" name="lead_product" value="DataHouse ERP Demo">
    <input type="hidden" name="lead_disc" value="Lead generated from external website demo form">
    <input type="hidden" name="lead_executive" value="0">

    <!-- VISIBLE FIELDS -->
    <div class="form-group">
        <label>Name *</label>
        <input type="text"
               name="lead_name"
               class="form-control"
               placeholder="Your Name"
               required>
    </div>

    <div class="form-group">
        <label>Phone Number *</label>
        <div class="d-flex">
            <span class="country-code">+91</span>
            <input type="text"
                   name="lead_mobile"
                   class="form-control"
                   placeholder="Phone Number"
                   required>
        </div>
    </div>

    <div class="form-group">
        <label>Email ID</label>
        <input type="email"
               name="lead_email"
               class="form-control"
               placeholder="Email ID">
    </div>

    <div class="form-group">
        <label>City</label>
        <input type="text"
               name="lead_city"
               class="form-control"
               placeholder="City">
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

        <!-- CTA SECTION -->
<section class="busy-cta">
    <div class="container text-center">
        <h2>Would You Like to Try {{ $softwarecompinfo->software_firm_name}}</h2>
        <a href="{{url('/freetrial')}}" class="btn btn-cta">
            GET FREE TRIAL <span>&raquo;</span>
        </a>
    </div>
</section><section class="faq-wrapper">
    <div class="container">
        <h2 class="faq-title text-center">Frequently Asked Questions</h2>

        <div class="faq-card mx-auto">

            <div class="faq-item">
                <button class="faq-question">
                    What is {{ $softwarecompinfo->software_firm_name }} Online, and how does it help businesses manage their finances?
                </button>
                <div class="faq-answer">
                    {{ $softwarecompinfo->software_firm_name }} Online helps businesses manage accounting, billing,
                    GST compliance, and financial reporting securely from anywhere.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Is {{ $softwarecompinfo->software_firm_name }} entirely cloud-based or does it offer offline access?
                </button>
                <div class="faq-answer">
                    It supports cloud-based access with secure backups and also allows offline usage
                    with data sync options.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How does cloud accounting differ from traditional accounting software?
                </button>
                <div class="faq-answer">
                    Cloud accounting allows real-time access, automatic updates, backups,
                    and collaboration from multiple locations.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What features make online accounting software essential for modern businesses?
                </button>
                <div class="faq-answer">
                    Remote accessibility, automatic backups, GST compliance,
                    multi-user access, and secure cloud storage.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                   What is {{ $softwarecompinfo->software_firm_name }} Billing Software?
                </button>
                <div class="faq-answer">
                   {{ $softwarecompinfo->software_firm_name }} billing software allows businesses to create, manage, and send invoices online , you can generate customizable invoices, apply 
                   discounts,and send them directly to your customers via email or WhatsApp. This eliminates the need for manual billing, saving time and reducing errors.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can {{ $softwarecompinfo->software_firm_name }} accounting software be used across multiple devices and locations?
                </button>
                <div class="faq-answer">
                   Yes, {{ $softwarecompinfo->software_firm_name }} Online allows you to access your data from any device anytime, making it ideal for businesses with multiple locations.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                   What makes {{ $softwarecompinfo->software_firm_name }} Accounting Software different from other solutions?
                </button>
                <div class="faq-answer">
{{ $softwarecompinfo->software_firm_name }} Online offers India-specific features like GST compliance,
 low bandwidth requirements, and 24/7 customer support, making it India's best cloud-based accounting software.
                </div>
            </div>
  
        </div>
<div class="text-center mt-4">
            <a href="#" class="btn view-faq-btn">View all FAQs</a>
        </div>
      
    </div>
</section>

     <!-- ================= CLIENTS SECTION ================= -->

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
                            Best Software for Business
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
<script>
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.parentElement;

            document.querySelectorAll('.faq-item').forEach(faq => {
                if (faq !== item) faq.classList.remove('active');
            });

            item.classList.toggle('active');
        });
    });
</script>


</body>
