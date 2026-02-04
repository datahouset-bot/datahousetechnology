<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Hardware Billing Software Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }
        .carousel-item img {
            max-height: 500px;
            object-fit: contain;
            width: 100%;
        }
        .demo-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .btn-demo {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 10px 20px;
        }
        /* Bigger navigation arrows */
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: none; /* hide default Bootstrap icons */
        }
        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 2rem;
            color: black;
            background: rgba(255,255,255,0.8);
            padding: 8px;
            border-radius: 50%;
        }
        .carousel-control-prev i:hover,
        .carousel-control-next i:hover {
            background: rgba(0,0,0,0.8);
            color: white;
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
        
    </style>
</head>
<body>
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
                            {{-- @forelse($itemgroup as $group)
                                <a class="dropdown-item" href="#">
                                    {{ $group->item_group }}
                                </a> 
                            @empty
                                <span class="dropdown-item text-muted">No Products</span>
                            @endforelse--}}
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
<div class="container py-4">
    <h1 class="text-center demo-title">{{ $softwarecompinfo->software_firm_name }} Billing Software Demo</h1>

    <!-- Image Slideshow -->
    <div id="garmentDemoCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/item.png" alt="Item Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/item2.jpg" alt="Item2 Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/sale.bmp" alt="Sale Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/purchase.png" alt="Purchase Screen">
            </div>
        </div>

        <!-- Custom Font Awesome Arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#garmentDemoCarousel" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#garmentDemoCarousel" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Demo Links -->
    <div class="text-center mt-4">
         <a href="{{ url('/youtube') }}" target="_blank" class="btn btn-danger btn-demo">
            <i class="fas fa-play-circle"></i> Watch Demo Video
        </a>
        <a href="{{url("garment_download")}}" class="btn btn-success btn-demo">
            <i class="fas fa-download"></i> Download Demo
        </a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 


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


</body>
</html>
