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
     /* ===== INSTALLATION STEPS (IMAGE STYLE) ===== */
.installation-section {
    background: #ffffff;
    padding: 60px 15px 40px;
}

.installation-container {
    max-width: 1100px;
    margin: 0 auto;
}

.installation-title {
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    color: #0b5fa5;
    margin-bottom: 10px;
}

.installation-subtitle {
    text-align: center;
    font-size: 15px;
    color: #555;
    margin-bottom: 30px;
}

/* BUTTONS */
.installation-actions {
    text-align: center;
    margin-bottom: 35px;
}

.installation-actions a {
    margin: 6px;
    font-weight: 600;
}

/* STEPS */
.installation-steps {
    max-width: 900px;
    margin: 0 auto;
}

.installation-step {
    margin-bottom: 18px;
}

.installation-step h6 {
    font-size: 14px;
    font-weight: 600;
    color: #0b5fa5;
    margin-bottom: 4px;
}

.installation-step p {
    font-size: 13px;
    color: #555;
    margin: 0;
    line-height: 1.6;
}

/* VIDEO */
.installation-video {
    text-align: center;
    margin-top: 35px;
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


        /* ===== FEATURE SECTION ===== */
    

        /* ==========================corousel main part================================ */
      
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

        <!-- ================= SOFTWARE SETUP & INSTALLATION ================= -->
<section class="installation-section">
    <div class="installation-container">

        <h3 class="installation-title">
            Software Setup & Installation
        </h3>
        <p class="installation-subtitle">
            {{ $softwarecompinfo->software_firm_name }}
        </p>

        <!-- ACTION BUTTONS -->
        <div class="installation-actions">
            <a href="https://drive.google.com/file/d/1UUPmKUF65G6aYCW970x4yL5I-DyWkwOA/view"
               class="btn btn-primary">
                <i class="fa fa-download"></i> Download Software
            </a>

            <a href="#" class="btn btn-secondary">
                <i class="fa fa-database"></i> Download Demo Data
            </a>

           <a href="{{ url('/browser') }}"
               class="btn btn-success">
                <i class="fa fa-desktop"></i> Browser & Screen
            </a>

            <a href="{{ url('/features') }}"
               class="btn btn-warning">
                <i class="fa fa-list"></i> Features List
            </a>

            <a href="{{ url('/youtube') }}"
               class="btn btn-info">
                <i class="fa fa-video-camera"></i> Demo Video
            </a>
        </div>

        <!-- STEPS (IMAGE STYLE) -->
        <div class="installation-steps">

            <div class="installation-step">
                <h6>Step 1: फ़ाइलें डाउनलोड करें (Download Files)</h6>
                <p>
                    ऊपर दिए गए बटन पर क्लिक करके सॉफ्टवेयर पैकेज और डेमो डेटा डाउनलोड करें।
                </p>
            </div>

            <div class="installation-step">
                <h6>Step 2: ज़िप फ़ाइल निकालें (Extract the ZIP)</h6>
                <p>
                    ज़िप फ़ाइल को अपनी पसंदीदा डायरेक्टरी में अनज़िप करें।
                </p>
            </div>

            <div class="installation-step">
                <h6>Step 3: Provider इंस्टॉल करें (Install Provider)</h6>
                <p>
                    सॉफ्टवेयर की डायरेक्टरी में आवश्यक provider इंस्टॉल करें।
                </p>
            </div>

            <div class="installation-step">
                <h6>Step 4: Support Files इंस्टॉल करें</h6>
                <p>
                    सभी आवश्यक समर्थन फ़ाइलें इंस्टॉल करें।
                </p>
            </div>

            <div class="installation-step">
                <h6>Step 5: Crystal Reports इंस्टॉल करें</h6>
                <p>
                    Key दर्ज करें: <strong>AVS50-81SG00S-G61002U</strong> ।  
                    Restart पूछे तो <strong>No</strong> करें और अंत में
                    <strong>Register Later</strong> चुनें।
                </p>
            </div>

            <div class="installation-step">
                <h6>Step 6: Company बनाएँ या Demo Data Import करें</h6>
                <p>
                    Demo data को <strong>Speed Plus</strong> folder में paste करें
                    और replace पूछे तो <strong>Yes</strong> करें।
                </p>
            </div>

            <div class="installation-step">
                <p>
                    समस्या आने पर कॉल करें:
                    <strong>7999663696</strong>
                    या <a href="{{ url('todo_by_customer') }}">Instant Support</a>
                </p>
            </div>

        </div>

       <!-- VIDEO -->
<div class="installation-video">
    <h3 class="text-primary mb-3">Installation Video Tutorial</h3>

    <div class="ratio ratio-16x9 mb-3">
        <iframe
            src="https://www.youtube.com/embed/rSjeR3LHQUY"
            title="Installation Video"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

    <a href="https://www.youtube.com/watch?v=rSjeR3LHQUY"
       target="_blank"
       class="btn btn-primary">
        <i class="fa fa-youtube-play"></i> Watch on YouTube
    </a>
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
