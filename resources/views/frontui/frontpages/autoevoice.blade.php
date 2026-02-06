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
        /* ===== FINANCIAL ACCOUNTING SECTION ===== *//* ===== FINANCIAL PROCESS (IMAGE MATCH) ===== */

.finance-title {
    font-size: 26px;
    font-weight: 700;
    color: #003366;
}

.finance-subtitle {
    font-size: 14px;
    color: #666;
    max-width: 900px;
    margin: 10px auto 0;
}

.finance-row {
    display: flex;
    gap: 16px;
    margin-bottom: 26px;
}

.finance-icon-box {
    width: 34px;
    height: 34px;
    background: #f2f2f2;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    font-size: 16px;
    flex-shrink: 0;
}

.finance-link {
    font-size: 15px;
    font-weight: 600;
    color: #0056b3;
    text-decoration: none;
}

.finance-link:hover {
    text-decoration: underline;
}

.finance-row p {
    font-size: 13px;
    color: #666;
    margin: 4px 0 0;
    line-height: 1.5;
}
/* ===== OPTIMIZE FINANCE (ICON STYLE) ===== */

.optimize-title {
    font-size: 26px;
    font-weight: 700;
    color: #003366;
}

.optimize-block {
    padding: 70px 0;
}

.bg-soft {
    background: #fdeff2;
}

.optimize-heading {
    font-size: 18px;
    font-weight: 600;
    color: #222;
    margin-bottom: 15px;
}

/* ICON LOOK (replaces illustration) */
.optimize-icon {
    font-size: 120px;
    color: #0b5fa5;
}

.optimize-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 20px;
}

.optimize-list li {
    position: relative;
    padding-left: 18px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #555;
}

.optimize-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #e85b5b;
    font-size: 22px;
    line-height: 1;
}

.optimize-btn {
    background: #e85b5b;
    color: #fff;
    font-size: 14px;
    padding: 8px 18px;
    border-radius: 6px;
}

.optimize-btn:hover {
    background: #d84c4c;
    color: #fff;
}


        /* ===== BUSY TRANSFORMATION SECTION ===== */
.busy-transform {
    background: #ffffff;
    padding: 80px 15px;
}

.busy-transform-title {
    font-size: 32px;
    font-weight: 700;
    color: #0b1d33;
}

.busy-transform-title span {
    color: #0b5fa5;
}

.busy-transform-subtitle {
    max-width: 850px;
    margin: 10px auto 50px;
    font-size: 15px;
    color: #666;
}

/* Feature item */
.transform-item {
    display: flex;
    gap: 20px;
    margin-bottom: 40px;
}

.transform-icon {
    width: 52px;
    height: 52px;
    background: #fdecee;
    color: #e85b5b;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}

.transform-item h5 {
    font-size: 18px;
    font-weight: 600;
    color: #0b1d33;
    margin-bottom: 6px;
}

.transform-item p {
    font-size: 14px;
    color: #555;
    margin-bottom: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .busy-transform {
        padding: 60px 15px;
    }

    .busy-transform-title {
        font-size: 26px;
    }
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

    
        /* ===== NEW DEMO FORM STYLE (MATCH IMAGE) ===== */

.demo-card-new {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 10px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.12);
}

/* Heading */
.demo-card-new h4 {
    color: #0b1d33;
    font-size: 20px;
}

/* Labels */
.demo-label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

/* Input line style */
.demo-input-line {
    border-bottom: 1px solid #999;
    padding-bottom: 6px;
}

.demo-input-line input {
    border: none;
    outline: none;
    width: 100%;
    font-size: 14px;
    background: transparent;
}

/* Country code */
.country-code-new {
    margin-right: 8px;
    font-size: 14px;
    color: #333;
}

/* Submit button */
.demo-submit-btn {
    background: #e65b5b;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    padding: 14px;
    border-radius: 8px;
    border: none;
}

.demo-submit-btn:hover {
    background: #d84c4c;
    color: #fff;
}


  
    </style>
</head>

<body class="home"> 

         @include('admin.newheaderformainpage')
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
                           Automated E-invoice Software for Easy Compliance–
                          
                        </h1>

                        <p class="busy-subtitle">
                          Did you know? Reducing manual errors is now easier than ever with BUSY, 
                          a user-friendly software that automates the overall process saving you 
                          time and money. What’s the wait for? Join the family of 360000+ customers
                           in India who trust BUSY.
                        </p>

                       
                    </div>

                    <!-- RIGHT DEMO CARD -->
              <!-- RIGHT DEMO CARD -->
<div class="col-lg-5">
    <div class="demo-card-new">

        <h4 class="text-center mb-4 fw-bold">
            {{ $softwarecompinfo->software_firm_name }} Software Download – 15 Days Free Trial
        </h4>

        <form>

            <div class="row">
                <!-- Phone -->
                <div class="col-md-6 mb-4">
                    <label class="demo-label">Phone Number*</label>
                    <div class="d-flex demo-input-line">
                        <span class="country-code-new">+91</span>
                        <input type="text" placeholder="Phone Number">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-4">
                    <label class="demo-label">Email ID*</label>
                    <div class="demo-input-line">
                        <input type="email" placeholder="Email ID">
                    </div>
                </div>
            </div>

            <!-- City -->
            <div class="mb-4">
                <label class="demo-label">City*</label>
                <div class="demo-input-line">
                    <input type="text" placeholder="City">
                </div>
            </div>

            <button type="submit" class="btn demo-submit-btn w-100">
                Submit
            </button>

        </form>
    </div>
</div>

                </div>
            </div>
        </section><!-- ================= FINANCIAL ACCOUNTING (IMAGE MATCH) ================= -->
<section class="financial-process py-5 bg-white">
    <div class="container">

        <!-- Heading -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="finance-title">
                    How {{ $softwarecompinfo->software_firm_name }} Streamlines the Financial Accounting Process
                </h2>
                <p class="finance-subtitle">
                    With meticulous transaction tracking, rapid reporting, and insightful analysis,
                    simplify core financial accounting. Here’s how
                    {{ $softwarecompinfo->software_firm_name }} streamlines the financial accounting process:
                </p>
            </div>
        </div>

        <!-- LIST -->
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- ITEM -->
                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-book"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Complete Books of Accounting with Financial Software for Small Business
                        </a>
                        <p>
                            Access final accounts, inventory reports, ledgers, tax reports, trial balance and
                            more with {{ $softwarecompinfo->software_firm_name }}.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Analyse Sales & Purchases
                        </a>
                        <p>
                            Get an in-depth analysis of receivables, expenses, sales and segment-wise reports
                            by item, group or party.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-bank"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Bank Reconciliation with Software Financial Accounting
                        </a>
                        <p>
                            Fetch financial transactions securely and reconcile your accounts with bank
                            statements effortlessly.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-exchange"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Ledger Reconciliation Made Easy
                        </a>
                        <p>
                            Identify discrepancies, review reconciliations and avoid duplication of entries
                            with ease.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            GST Compliant Invoicing for Accurate Financial Reporting
                        </a>
                        <p>
                            Customise invoices with logo and formats of your choice and generate branded GST invoices.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Multi-Currency Support for Global Transactions
                        </a>
                        <p>
                            Maintain accounts in more than one currency and track export and import
                            transactions effortlessly.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- ================= GST INVOICING & REPORTING (ICON VERSION) ================= --><!-- ================= OPTIMIZE FINANCIAL OPERATIONS (ICON VERSION) ================= -->
<section class="optimize-finance">

    <!-- SECTION TITLE -->
    <div class="container text-center mb-5">
   <h2 class="optimize-title">
    Smart Invoicing Made Easy With
    {{ $softwarecompinfo->software_firm_name }} Auto E-Invoice Software
</h2>


    </div>

    <!-- BLOCK 1 -->
 <div class="optimize-block bg-soft">
    <div class="container">
        <div class="row align-items-center">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="optimize-icon">
                    <i class="fa fa-files-o"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="optimize-heading">Multiple E-Invoice Generation</h4>
                <ul class="optimize-list">
                    <li>Generate e-invoices for multiple vouchers</li>
                    <li>Filter vouchers according to invoice type</li>
                    <li>Eliminates duplicate errors</li>
                </ul>
                <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    Try Busy for Free
                </a>
            </div>

        </div>
    </div>
</div>

    <!-- BLOCK 2 --><div class="optimize-block">
    <div class="container">
        <div class="row align-items-center flex-md-row-reverse">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="optimize-icon">
                    <i class="fa fa-check-circle-o"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="optimize-heading">
                    Data Validation and Error Checking in Best E-Invoicing Software
                </h4>
                <ul class="optimize-list">
                    <li>Ensure 100% GST compliance & legal accuracy</li>
                    <li>Benefit from automated data validation</li>
                    <li>Generate fast & accurate e-invoices</li>
                    <li>Avoid penalties & maintain clean records</li>
                </ul>
                <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    Try Busy for Free
                </a>
            </div>

        </div>
    </div>
</div>


    <!-- BLOCK 3 --><div class="optimize-block bg-soft">
    <div class="container">
        <div class="row align-items-center">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="optimize-icon">
                    <i class="fa fa-magic"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="optimize-heading">
                    Auto Population in Sales Invoice with E-Invoicing Software
                </h4>
                <ul class="optimize-list">
                    <li>Automate e-invoice generation</li>
                    <li>Update sales records effortlessly</li>
                    <li>Ensure accurate, up-to-date records & seamless compliance</li>
                </ul>
                <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    Try Busy for Free
                </a>
            </div>

        </div>
    </div>
</div>

    <!-- BLOCK 4 -->
  <div class="optimize-block">
    <div class="container">
        <div class="row align-items-center flex-md-row-reverse">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="optimize-icon">
                    <i class="fa fa-qrcode"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="optimize-heading">
                    QR Code Generation in Electronic Invoicing Software
                </h4>
                <ul class="optimize-list">
                    <li>Verify e-invoice authenticity effortlessly</li>
                    <li>Generate & print QR codes during a one-time setup</li>
                    <li>QR codes are automatically added to sales invoices</li>
                </ul>
                <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    Try Busy for Free
                </a>
            </div>

        </div>
    </div>
</div>

</section>



        <!-- CTA SECTION -->

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
@include('admin.partials.footerformainpage')

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
