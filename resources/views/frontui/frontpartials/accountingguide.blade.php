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
        /* ===== GST FEATURE SECTION ===== */
.gst-feature-list {
    padding-left: 18px;
}

.gst-feature-list li {
    font-size: 14px;
    color: #555;
    margin-bottom: 12px;
    line-height: 1.6;
}

.gst-feature-section h4 {
    font-size: 20px;
}
/* ===== GST ICON BLOCK ===== */
.gst-icon-box {
    width: 160px;
    height: 160px;
    background: #eef5ff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
}

.gst-icon-box i {
    font-size: 72px;
    color: #0b5fa5;
}

/* Smaller screens */
@media (max-width: 768px) {
    .gst-icon-box {
        width: 120px;
        height: 120px;
    }

    .gst-icon-box i {
        font-size: 52px;
    }
}

/* ========================================== */
        .gst-simplified h5 {
    font-size: 16px;
}

.gst-simplified p {
    font-size: 14px;
    line-height: 1.6;
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
        </section>
        <!-- ================= GST SIMPLIFIED SECTION ================= -->
<section class="gst-simplified py-5 bg-white">
    <div class="container">

        <!-- Heading -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-primary">
                    How {{ $softwarecompinfo->software_firm_name }} Simplified GST Accounting
                </h2>
                <p class="text-muted mt-2">
                    Keeping up with the regulatory requirements can be a daunting task especially in the
                    ever-evolving space of GST accounting. Here’s how
                    {{ $softwarecompinfo->software_firm_name }} streamlines the GST accounting process:
                </p>
            </div>
        </div>

        <!-- Content -->
        <div class="row">

            <!-- Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <div class="me-3 text-primary fs-3">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">
                            Automated GST Compliance with the Best GST Software
                        </h5>
                        <p class="text-muted">
                            From seamless filing of <strong>GST Return</strong> to accurate input tax credit
                            calculations, {{ $softwarecompinfo->software_firm_name }} accelerates the entire
                            process, saving you time and reducing the risk of errors.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <div class="me-3 text-primary fs-3">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">
                            User-Friendly Interface in GST Accounting Software
                        </h5>
                        <p class="text-muted">
                            {{ $softwarecompinfo->software_firm_name }} makes tax calculations simple and
                            accessible for everyone through its intuitive interface that is completely
                            designed for managing GST-related tasks effortlessly.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <div class="me-3 text-primary fs-3">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">
                            Real-Time GST Insights with GST Return Software
                        </h5>
                        <p class="text-muted">
                            From monitoring tax liabilities to tracking <strong>input tax credits</strong>,
                            {{ $softwarecompinfo->software_firm_name }} gives you access to real-time GST insights
                            at your fingertips and critical GST-related data.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Link -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h6 class="text-primary fw-bold">
                    Send GST Invoices with {{ $softwarecompinfo->software_firm_name }} GST Filing Software
                </h6>
            </div>
        </div>

    </div>
</section>

<!-- ================= BUSY TRANSFORMATION SECTION ================= -->
<section class="busy-transform">
    <div class="container">

        <!-- Title -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="busy-transform-title">
                    How <span>{{ $softwarecompinfo->software_firm_name }}</span> Transforms Business Accounting Experience
                </h2>
                <p class="busy-transform-subtitle">
                    Streamline complex accounting tasks with <strong>{{ $softwarecompinfo->software_firm_name }}</strong>, which helps businesses
                    with day-to-day accounting without extensive accounting knowledge.
                </p>
            </div>
        </div>

        <!-- Features -->
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Item 1 -->
                <div class="transform-item">
                    <div class="transform-icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div>
                        <h5>Time-Saving Automation</h5>
                        <p>
                            Automate routine business accounting tasks like billing, discount & tax calculations,
                            bank reconciliation, reporting, etc.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="transform-item">
                    <div class="transform-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div>
                        <h5>Send Payment Reminders Automatically</h5>
                        <p>
                            Automate daily, weekly, or monthly payment reminders to ensure timely collections
                            and improve cash flow.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="transform-item">
                    <div class="transform-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div>
                        <h5>P&amp;L Analysis by Bill-wise / SKU-wise / Batch-wise</h5>
                        <p>
                            Profit &amp; Loss analysis by Bill, SKU, or Batch-wise to get a clear overview
                            of revenues and expenditures for any selected period.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ================= GST INVOICING & REPORTING SECTION ================= -->
<!-- ================= GST INVOICING & REPORTING (ICON VERSION) ================= -->
<section class="gst-feature-section py-5 bg-white">
    <div class="container">

        <!-- ===== SECTION 1 ===== -->
        <div class="row align-items-center mb-5">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="gst-icon-box">
                    <i class="fa fa-file-text-o"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="fw-bold text-primary mb-3">
                    GST Compliance and Accounting with Top GST Software
                </h4>

                <ul class="gst-feature-list">
                    <li>
                        Stay GST compliant anytime, anywhere and send customized
                        <strong>GST invoices</strong> for faster payments.
                    </li>
                    <li>
                        Generate GST return reports effortlessly to know tax liabilities
                        and make payments faster.
                    </li>
                    <li>
                        Record every receipt in {{ $softwarecompinfo->software_firm_name }}
                        to stay updated with tax payment deadlines.
                    </li>
                </ul>

                <a href="{{ url('/freetrial') }}" class="btn btn-danger mt-3">
                    Try {{ $softwarecompinfo->software_firm_name }} for Free
                </a>
            </div>
        </div>

        <!-- ===== SECTION 2 ===== -->
        <div class="row align-items-center flex-md-row-reverse">

            <!-- ICON -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="gst-icon-box">
                    <i class="fa fa-bar-chart"></i>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-md-6">
                <h4 class="fw-bold text-primary mb-3">
                    GST Reporting Features
                </h4>

                <ul class="gst-feature-list">
                    <li>
                        Generate GST return reports to file taxes seamlessly and
                        track liabilities.
                    </li>
                    <li>
                        Export <strong>GST return files in JSON</strong> and sync
                        them directly with the GST portal.
                    </li>
                    <li>
                        Reconcile purchases and track mismatches by adding supplier
                        invoices in {{ $softwarecompinfo->software_firm_name }}.
                    </li>
                </ul>

                <a href="{{ url('/freetrial') }}" class="btn btn-danger mt-3">
                    Try {{ $softwarecompinfo->software_firm_name }} for Free
                </a>
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
