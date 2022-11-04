<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Login - Mentoring system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/user/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">


        <!-- Page Content -->
        <div class="bg-pattern-style">
            <div class="content">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="account-box">
                        <div class="login-right">
                            <div class="login-header">
                                <h3>Login</h3>
                                <p class="text-muted">Access to our dashboard</p>
                            </div>
                            <form method="POST" action="{{ route('login.post') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" name="password">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    {{-- <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a> --}}
                                </div>
                                <button class="btn btn-primary login-btn" type="submit">Login </button>
                                <div class="text-center dont-have">Don’t have an account? <a
                                        href="{{ route('register') }}">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/user/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/user/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('type'))
            @if (session('type') == 'success')
                toastr.success(@json(session('message')))
            @elseif (session('type') == 'error')
                toastr.error(@json(session('message')))
            @elseif (session('type') == 'warning')
                toastr.warning(@json(session('message')))
            @endif
        @endif
    </script>
</body>

</html>
