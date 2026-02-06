<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
/* ================= BUSY FOOTER NAV ================= */
.busy-footer-nav {
    background: #062f52;
    color: #dbe7f3;
    padding: 50px 0 30px;
    font-size: 14px;
}

.busy-footer-nav h6 {
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 15px;
}

.busy-footer-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.busy-footer-nav ul li {
    margin-bottom: 8px;
}

.busy-footer-nav ul li a {
    color: #dbe7f3;
    text-decoration: none;
    transition: 0.2s;
}

.busy-footer-nav ul li a:hover {
    color: #ffffff;
    padding-left: 4px;
}

/* Divider */
.footer-divider {
    border-top: 1px solid rgba(255,255,255,0.15);
    margin: 30px 0 20px;
}

/* Bottom bar */
.busy-footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    font-size: 13px;
}

.busy-footer-bottom a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 600;
}

/* Login button */
.footer-login-btn {
    background: #e85b5b;
    color: #fff !important;
    padding: 6px 16px;
    border-radius: 6px;
    font-size: 13px;
}

.footer-login-btn:hover {
    background: #d94a4a;
}

/* Responsive */
@media (max-width: 768px) {
    .busy-footer-bottom {
        text-align: center;
        justify-content: center;
        gap: 10px;
    }
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
    

  <!-- ================= BUSY FOOTER NAVBAR ================= -->
<footer class="busy-footer-nav">
    <div class="container">

        <div class="row">

            <!-- Accounting Software -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h6>Accounting Software</h6>
                <ul>
                    <li><a href="#">BUSY</a></li>
                    <li><a href="#">CLOUD</a></li>
                    <li><a href="#">MARG</a></li>
                    <li><a href="#">SPEED PLUS</a></li>
                    <li><a href="#">TALLY</a></li>
                    <li><a href="#">BILLING SOFTWARE</a></li>
                </ul>
            </div>

            <!-- Mobile & Pricing -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h6>BILLING SOFTWARE</h6>
                <ul>
                    <li><a href="#">{{ $softwarecompinfo->software_firm_name }} Online</a></li>
                    <li><a href="#">{{ $softwarecompinfo->software_firm_name }} Accountee</a></li>
                    <li><a href="#">{{ $softwarecompinfo->software_firm_name }} for Mandi</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>

            <!-- Industry Software -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h6>Industry Software</h6>
                <ul>
                    <li><a href="#">Auto Parts Software</a></li>
                    <li><a href="#">Book Publishing Software</a></li>
                    <li><a href="#">Chemical Software</a></li>
                    <li><a href="#">Computer Hardware Software</a></li>
                    <li><a href="#">Electrical Software</a></li>
                    <li><a href="#">Electronics Goods Software</a></li>
                    <li><a href="#">Food & Beverage Software</a></li>
                    <li><a href="#">FMCG Software</a></li>
                </ul>
            </div>

            <!-- Company & Resources -->
            <div class="col-md-3 col-sm-6 mb-4">
                <h6>Company</h6>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">{{ $softwarecompinfo->software_firm_name }} in India</a></li>
                    <li><a href="#">{{ $softwarecompinfo->software_firm_name }} International</a></li>
                    <li><a href="#">Partner Network</a></li>
                </ul>

                <h6 class="mt-4">Resources</h6>
                <ul>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Webinars</a></li>
                    <li><a href="#">Invoice Formats</a></li>
                    {{-- <li><a href="#">BUSY Calculators</a></li> --}}
                </ul>
            </div>

        </div>

        <div class="footer-divider"></div>

        <!-- Bottom Row -->
        <div class="busy-footer-bottom">
            <div>
                © {{ date('Y') }} {{ $softwarecompinfo->software_firm_name }}. All rights reserved.
            </div>

            <div>
                @guest
                    <a href="{{ route('login') }}" class="footer-login-btn">Login</a>
                @else
                    <a href="{{ route('home') }}" class="footer-login-btn">Dashboard</a>
                @endguest
            </div>
        </div>

    </div>
</footer>

    
</body>
</html>