<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Demo Video Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
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
        body {
            background: #f8f9fa;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background: black;
            border-radius: 8px;
            box-shadow: 0px 2px 15px rgba(0,0,0,0.1);
        }
        .video-container iframe {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
        }
        .section-title {
            font-weight: bold;
            margin: 30px 0 15px;
            text-align: center;
        }
        .subscribe-btn {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 12px 20px;
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
    <h1 class="text-center fw-bold mb-4">🎥 Demo Video Gallery / डेमो वीडियो गैलरी</h1>
    
    <div class="text-center my-4">
        <p class="fw-bold fs-5">🙏 Please Subscribe to My Channel / कृपया मेरे चैनल को सब्सक्राइब करें</p>
        <div class="g-ytsubscribe" 
             data-channelid="UCArw9uq7lQNVMyWSLO9XzuQ" 
             data-layout="full" 
             data-theme="default" 
             data-count="default">
        </div>
    </div>

    <script src="https://apis.google.com/js/platform.js"></script>

    <div class="row g-4">
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/7e_3Gpk76fs" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/XDt_w7gz-Bk" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/xD484zJvf9I" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/-rJTrAYU1lU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/Lm9WL0eIiMM" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <h2 class="section-title">📺 Full Playlist / पूरी प्लेलिस्ट</h2>
<div class="video-container mb-4">
    <iframe 
src="https://www.youtube.com/embed/7e_3Gpk76fs" 
        frameborder="0" 
        allowfullscreen>
    </iframe>
</div>

    <div class="text-center my-4">
        <p class="fw-bold fs-5">🙏 Please Subscribe to My Channel / कृपया मेरे चैनल को सब्सक्राइब करें</p>
        <div class="g-ytsubscribe" 
             data-channelid="UCArw9uq7lQNVMyWSLO9XzuQ" 
             data-layout="full" 
             data-theme="default" 
             data-count="default">
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>