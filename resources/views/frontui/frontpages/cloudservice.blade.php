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
    /* Intro Title */
.busy-intro-title {
    font-size: 18px;
    font-weight: 600;
    color: #0b5ed7;
    margin-bottom: 15px;
}

/* Intro Video */
.busy-intro-video {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
}

.busy-intro-video iframe {
    width: 560px;
    height: 315px;
    border-radius: 12px;
    box-shadow: 0 10px 28px rgba(0,0,0,0.15);
    border: none;
}

/* Demo Video Title */
.busy-testimonial-title {
    font-size: 17px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #444;
}

/* Demo Videos Row */
.busy-video-row {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 45px;
    flex-wrap: wrap;
}

.busy-video-card {
    width: 300px;
    height: 180px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

.busy-video-card iframe {
    width: 100%;
    height: 100%;
    border: none;
}

/* Responsive */
@media (max-width: 768px) {
    .busy-intro-video iframe {
        width: 100%;
        height: 220px;
    }
}

/* Main Title */
.busy-main-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 8px;
}

.busy-main-desc {
    font-size: 13px;
    color: #777;
    margin-bottom: 35px;
}

/* Industry Grid */
.busy-industries {
    background: #f5f9ff;
    padding: 25px;
    border-radius: 12px;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 25px 10px;
    max-width: 900px;
    margin: auto;
}

.busy-industry {
    text-align: center;
    font-size: 12px;
}

.busy-industry i {
    font-size: 22px;
    color: #1e63e9;
    display: block;
    margin-bottom: 6px;
}

/* Explore Section */
.busy-explore {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 45px;
    flex-wrap: wrap;
}

.busy-explore-title {
    font-weight: 600;
}

/* Cards */
.busy-card {
    background: #fff;
    border-radius: 10px;
    padding: 18px;
    width: 180px;
    text-align: center;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.busy-card i {
    font-size: 26px;
    color: #1e63e9;
    margin-bottom: 8px;
}

/* Button */
.busy-btn {
    font-size: 11px;
    padding: 5px 16px;
    border-radius: 20px;
    border: 1px solid #e63946;
    color: #e63946;
    text-decoration: none;
    font-weight: 600;
}

.busy-btn:hover {
    background: #e63946;
    color: #fff;
}

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
        </section><!-- ================= FINANCIAL ACCOUNTING (IMAGE MATCH) ================= -->
<section class="financial-process py-5 bg-white">
    <div class="container">
                <!-- SUB HEADING -->
                <div class="text-center mt-5 mb-3">
                    <h3 class="finance-title">
                        Benefits of  CLOUD  Software
                    </h3>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Zero Cost Accounting Software
                        </a>
                        <p>
                            Get started with accounting at absolutely no cost.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-files-o"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            100 Free Vouchers Every Financial Year
                        </a>
                        <p>
                            Create up to 100 vouchers free of charge each year.
                        </p>
                    </div>
                </div>

                <div class="finance-row">
                    <div class="finance-icon-box">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <div>
                        <a href="#" class="finance-link">
                            Hands-On Experience with Cloud Features
                        </a>
                        <p>
                            Explore core Cloud features and understand real-world accounting workflows.
                        </p>
                    </div>
                </div>

                <!-- CTA -->
                <div class="text-center mt-5">
                    <a href="{{url('https://drive.google.com/file/d/1scrOJee4vkT9x35UgefxpU_gajwNyzeX/view?usp=sharing') }}" class="btn btn-danger px-4 py-2">
                     Download cloud software
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>
<section class="optimize-finance">

    <!-- SECTION TITLE -->
    <div class="container text-center mb-5">
        <h2 class="optimize-title">
            Why CLOUD Software
        </h2>
    </div>

    <!-- BLOCK 1 : ACCOUNTING -->
    <div class="optimize-block bg-soft">
        <div class="container">
            <div class="row align-items-center">

                <!-- ICON -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="optimize-icon">
                        <i class="fa fa-book"></i>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <h4 class="optimize-heading">Accounting</h4>
                    <ul class="optimize-list">
                        <li>Multi-Company / Multi-Financial Year</li>
                        <li>All Books of Accounts</li>
                        <li>Balance Sheet with various schedules</li>
                        <li>Daily / Monthly summaries of accounts & groups</li>
                        <li>Aging analysis on FIFO basis</li>
                        <li>Depreciation chart (As per Company Act / IT Act)</li>
                        <li>Interest calculation (only product basis & month wise)</li>
                        <li>Printing of bank deposit slip</li>
                    </ul>
                    <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    book free trial
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK 2 : STOCK MANAGEMENT -->
    <div class="optimize-block">
        <div class="container">
            <div class="row align-items-center flex-md-row-reverse">

                <!-- ICON -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="optimize-icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <h4 class="optimize-heading">Stock Management</h4>
                    <ul class="optimize-list">
                        <li>Stock Ledger</li>
                        <li>Stock valuation on multiple methods</li>
                        <li>Daily / Monthly summaries of items & item groups</li>
                    </ul>
                    <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                    book free trial
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK 3 : BILLING & INVOICING -->
    <div class="optimize-block bg-soft">
        <div class="container">
            <div class="row align-items-center">

                <!-- ICON -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="optimize-icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <h4 class="optimize-heading">Billing & Invoicing</h4>
                    <ul class="optimize-list">
                        <li>Multiple taxes in single invoice</li>
                        <li>Tax inclusive / MRP billing</li>
                        <li>Voucher cancellation</li>
                        <li>Multiple voucher series for each voucher type</li>
                    </ul>
                    <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                        book free trial
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK 4 : GST REPORTS -->
    <div class="optimize-block">
        <div class="container">
            <div class="row align-items-center flex-md-row-reverse">

                <!-- ICON -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="optimize-icon">
                        <i class="fa fa-balance-scale"></i>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <h4 class="optimize-heading">GST Reports</h4>
                    <ul class="optimize-list">
                        <li>GST Summary</li>
                        <li>GST Registers</li>
                        <li>Party / Item wise GST summary</li>
                        <li>Bill-wise ITC reversal</li>
                    </ul>
                    <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                        book free trial
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- BLOCK 5 : UTILITIES -->
    <div class="optimize-block bg-soft">
        <div class="container">
            <div class="row align-items-center">

                <!-- ICON -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="optimize-icon">
                        <i class="fa fa-wrench"></i>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <h4 class="optimize-heading">Utilities</h4>
                    <ul class="optimize-list">
                        <li>Pop-up calculator</li>
                        <li>Year-wise data backup & restore</li>
                        <li>Price list printing</li>
                        <li>Voucher duplication</li>
                    </ul>
                    <a href="{{ url('/freetrial') }}" class="btn optimize-btn">
                        book free trial 
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- ================= BUSY – AN ACCOUNTING SOLUTION FOR EVERYONE ================= -->
<section class="busy-solution py-5 bg-white">

    <div class="container text-center">

        <!-- INTRO VIDEO TITLE -->
        <h3 class="busy-intro-title">
            Watch the CLOUD Introduction – #1 GST Accounting Software
        </h3>

        <!-- INTRO VIDEO -->
        <div class="busy-intro-video">
            <iframe
                src="https://www.youtube.com/embed/PqrmBtvOeXk"
                allowfullscreen>
            </iframe>
        </div>
  
        <!-- DEMO VIDEO TITLE -->
        <h4 class="busy-testimonial-title">
            CLOUD Software DEMO Videos – See CLOUD in Action
        </h4>

        <!-- DEMO VIDEOS -->
        <div class="busy-video-row">

            <div class="busy-video-card">
                <iframe src="https://youtube.com/embed/IkDgA5BYMek" allowfullscreen></iframe>
            </div>

            <div class="busy-video-card">
                <iframe src="https://www.youtube.com/embed/teOPkpLubK0" allowfullscreen></iframe>
            </div>

            <div class="busy-video-card">
                <iframe src="https://www.youtube.com/embed/FasZVbktL8s" allowfullscreen></iframe>
            </div>

        </div>
        <!-- MAIN HEADING -->
        <h2 class="busy-main-title">
            CLOUD – An Accounting Solution For Everyone
        </h2>

        <p class="busy-main-desc">
            CLOUD accounting software helps small and medium businesses and caters to a wide
            range of industries, making financial management easier for them.
        </p>


        <!-- INDUSTRY GRID -->
        <div class="busy-industries">

            <div class="busy-industry"><i class="fa fa-cogs"></i><span>Auto Parts</span></div>
            <div class="busy-industry"><i class="fa fa-shopping-cart"></i><span>Retail</span></div>
            <div class="busy-industry"><i class="fa fa-flask"></i><span>Chemicals</span></div>
            <div class="busy-industry"><i class="fa fa-cube"></i><span>FMCG</span></div>
            <div class="busy-industry"><i class="fa fa-cutlery"></i><span>Food & Beverage</span></div>
            <div class="busy-industry"><i class="fa fa-laptop"></i><span>Computer Hardware</span></div>

            <div class="busy-industry"><i class="fa fa-book"></i><span>Book Publishing</span></div>
            <div class="busy-industry"><i class="fa fa-bolt"></i><span>Electrical Goods</span></div>
            <div class="busy-industry"><i class="fa fa-file-text-o"></i><span>Paper</span></div>
            <div class="busy-industry"><i class="fa fa-plane"></i><span>Travel</span></div>
            <div class="busy-industry"><i class="fa fa-bed"></i><span>Furniture</span></div>
            <div class="busy-industry"><i class="fa fa-medkit"></i><span>Pharma</span></div>

            <div class="busy-industry"><i class="fa fa-paint-brush"></i><span>Paint</span></div>
            <div class="busy-industry"><i class="fa fa-mobile"></i><span>Mobile Store</span></div>
            <div class="busy-industry"><i class="fa fa-tags"></i><span>Garments</span></div>
            <div class="busy-industry"><i class="fa fa-diamond"></i><span>Gems & Jewellery</span></div>
            <div class="busy-industry"><i class="fa fa-leaf"></i><span>Agriculture</span></div>
            <div class="busy-industry"><i class="fa fa-pencil"></i><span>Stationery</span></div>

        </div>

        <!-- EXPLORE MORE -->
        <div class="busy-explore">

            <div class="busy-explore-title">Want to explore more?</div>

            <div class="busy-card">
                <i class="fa fa-mobile"></i>
                <h6>CLOUD Mobile</h6>
                <a href="#" class="busy-btn">VIEW PLAN</a>
            </div>

            <div class="busy-card">
                <i class="fa fa-globe"></i>
                <h6>CLOUD Online</h6>
                <a href="#" class="busy-btn">VIEW PLAN</a>
            </div>

            <div class="busy-card">
                <i class="fa fa-shopping-bag"></i>
                <h6>CLOUD Recom</h6>
                <a href="#" class="busy-btn">VIEW PLAN</a>
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
