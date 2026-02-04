<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>

    <!-- EXISTING CSS (UNCHANGED) -->
    <link href="{{ global_asset('admin_assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- UI ENHANCEMENT CSS (ADDED ONLY) -->
    <style>
        body.bg-primary {
            background: linear-gradient(135deg, #0b1d33, #1e88e5) !important;
            min-height: 100vh;
        }

        .auth-brand {
            text-align: center;
            margin-bottom: 20px;
        }

        .auth-brand h2 {
            font-weight: 700;
            color: #0b1d33;
            margin-bottom: 5px;
        }

        .auth-brand p {
            font-size: 14px;
            color: #666;
        }

        .card {
            border-radius: 16px !important;
            box-shadow: 0 25px 60px rgba(0,0,0,0.25) !important;
        }

        .card-header {
            background: transparent;
            border-bottom: none;
        }

        .form-control {
            height: 45px;
            border-radius: 8px;
        }

        .form-floating label {
            font-size: 14px;
        }

        .btn-primary {
            background: #1e88e5;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #1565c0;
        }

        .btn-warning {
            border-radius: 8px;
            font-size: 14px;
        }

        .btn-success {
            border-radius: 8px;
        }

        .form-check-label {
            font-size: 14px;
            color: #444;
        }

        .invalid-feedback {
            font-size: 13px;
        }

        footer {
            border-top: 1px solid #e5e5e5;
        }
    </style>
</head>

<body class="bg-primary">

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-5">

                        <!-- BRAND HEADER -->
                        <div class="auth-brand mt-5">
                            <h2>Welcome Back</h2>
                            <p>Login to continue to your dashboard</p>
                        </div>

                        <div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-3">
                                    Login
                                </h3>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- EMAIL -->
                                    <div class="form-floating mb-3">
                                        <input id="inputEmail"
                                               type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}"
                                               required
                                               autofocus>

                                        <label for="inputEmail">
                                            <i class="fa fa-envelope me-1"></i> Email address
                                        </label>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- PASSWORD -->
                                    <div class="form-floating mb-3">
                                        <input id="inputPassword"
                                               type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required>

                                        <label for="inputPassword">
                                            <i class="fa fa-lock me-1"></i> Password
                                        </label>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- REMEMBER -->
                                    <div class="form-check mb-3">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               name="remember"
                                               {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <!-- ACTIONS -->
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-warning"
                                               href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                </form>
                            </div>

                            <!-- FOOTER -->
                            <div class="card-footer text-center py-3">
                                <div class="small">
                                    @if (Route::has('register'))
                                        <a class="btn btn-success"
                                           href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- PAGE FOOTER -->
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">
                        Copyright © Data House 24–25
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- EXISTING SCRIPTS (UNCHANGED) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ global_asset('admin_assets/js/scripts.js') }}"></script>

</body>
</html>
