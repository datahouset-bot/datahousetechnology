<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data House Technology</title>
    <style>
        /* ================= RESPONSIVE HEADER FIX ================= */

/* Prevent horizontal scroll */
html, body {
    overflow-x: hidden;
}

/* Navbar base fix */
.busy-header .container {
    flex-wrap: wrap;
}

/* Mobile navbar toggle */
.navbar-toggler {
    border: none;
    font-size: 22px;
}

/* Mobile menu */
@media (max-width: 991px) {

    /* Stack header content */
    .busy-header .container {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    /* Logo center */
    .busy-logo {
        width: 100%;
        justify-content: center;
        text-align: center;
    }

    /* Nav full width */
    .busy-nav {
        width: 100%;
    }

    /* Nav items stacked */
    .busy-nav .navbar-nav {
        width: 100%;
        background: #062f52;
        padding: 10px 0;
        border-radius: 8px;
    }

    .busy-nav .nav-link {
        color: #ffffff !important;
        padding: 12px 20px;
        border-bottom: 1px solid rgba(255,255,255,0.15);
    }

    .busy-nav .nav-link:hover {
        background: rgba(255,255,255,0.1);
    }

    /* Disable hover mega menu */
    .mega-dropdown:hover .mega-menu {
        display: none;
    }

    /* Mega menu mobile style */
    .mega-menu {
        position: static;
        background: #073b67;
        padding: 20px;
        box-shadow: none;
    }

    .mega-menu .row {
        flex-direction: column;
        gap: 20px;
    }

    .mega-title {
        font-size: 14px;
        border-bottom: 1px solid rgba(255,255,255,0.3);
    }

    /* Actions stack */
    .busy-actions {
        width: 100%;
        justify-content: center;
        margin-top: 10px;
    }

    /* Support icon center */
    .busy-support {
        margin: 10px auto 0;
    }
}

/* Extra small screens */
@media (max-width: 575px) {

    .busy-strip {
        font-size: 14px;
        padding: 8px 0;
    }

    .busy-logo span {
        font-size: 16px;
    }

    .busy-logo small {
        font-size: 12px;
    }

    .busy-trial-btn {
        width: 100%;
        text-align: center;
    }
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

        /* ===== HELP & SUPPORT ICON ===== */

.busy-support {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: #f1f6fb;
    color: #0b5fa5;
    font-size: 18px;
    text-decoration: none;
    transition: all 0.25s ease;
}

.busy-support:hover {
    background: #0b5fa5;
    color: #ffffff;
    transform: translateY(-2px);
}

    </style>
</head>
<body>
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
                <img src="{{$pic->logo}}" alt="Logo"
                    onerror="this.style.display='none'">
                <span>
                    {{ $softwarecompinfo->software_firm_name ?? 'BUSY ERP' }}
                    <small>Business Accounting Software</small>
                </span>
            </div>

            <!-- NAVIGATION -->
         <nav class="busy-nav navbar navbar-expand-lg">
            <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#busyMenu">
    <i class="fa fa-bars"></i>
</button>
<div class="collapse navbar-collapse" id="busyMenu">
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
                            <a class="mega-item" href="{{ route('speedplus') }}">SPEED PLUS</a>
                            <a class="mega-item" href="{{ route('marg') }}">MARG</a>
                            <a class="mega-item" href="{{ route('tally') }}">TALLY</a>
                            <a class="mega-item" href="{{ route('busy') }}">BUSY</a>
                            <a class="mega-item" href="{{ route('billingsoftware') }}">BILLING SOFTWARE</a>
                            <a class="mega-item" href="{{ route('cloudservice') }}">CLOUD SERVICE</a>
                        </div>

                        <!-- FEATURES -->
                        <div class="col-md-4">
                            <h6 class="mega-title">FEATURES & FAQ</h6>
                            <a class="mega-item" href="{{ route('accounting') }}">Accounting</a>
                            <a class="mega-item" href="{{ route('accountingguide') }}">GST Accounting</a>
                            <a class="mega-item" href="{{ route('financialaccounting') }}">Financial Accounting</a>
                            <a class="mega-item" href="{{ route('auto_eway_bill') }}">Auto E-Way Bill</a>
                            <a class="mega-item" href="{{ route('auto_e_invoice') }}">Auto E-Invoice</a>
                            <a class="mega-item" href="{{ route('auto_gst_reconcillation') }}">GSTR Reconciliation</a>
                            <a class="mega-item" href="{{ route('inventory') }}">Inventory</a>
                            <a class="mega-item" href="">FAQs</a>
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
        </ul></div>
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
               {{-- @guest

                            @if (Route::has('login'))
                                <a class="btn btn-info"  href="{{ route('login') }}">{{ __('Login') }}</a>
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
                            @endguest --}}

                <a href="{{ url('/freetrial') }}" class="btn busy-trial-btn">
                    Free Trial
                </a>
                 <!-- HELP & SUPPORT -->
    
            </div>

            <a href="{{ url('/support') }}" class="busy-support" title="Help & Support">
        <i class="fa fa-life-ring"></i>
    </a>
        </div>
    </header>
</body>
</html>