<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">


        <!-- Page Content -->
        <div class="bg-pattern-style bg-pattern-style-register">
            <div class="content">

                <!-- Register Content -->
                <div class="account-content">
                    <div class="account-box">
                        <div class="login-right">
                            <div class="login-header">
                                <h3>Register</h3>
                                <p class="text-muted">Access to our dashboard</p>
                            </div>

                            <!-- Register Form -->
                            <form method="POST" action="{{ route('register.post') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input id="first-name" type="text" class="form-control" name="first_name"
                                                autofocus="" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input id="last-name" type="text" class="form-control" name="last_name"
                                                value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input id="email" type="email" name="email" class="form-control"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value>Select gender</option>
                                            <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="F"{{ old('gender') == 'F' ? 'selected' : '' }}>Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Subscription</label>
                                        <select class="form-select" name="subscription">
                                            <option value>Select subscription</option>
                                            <option value="M" {{ old('subscription') == 'free' ? 'selected' : '' }}>Free
                                            </option>
                                            <option value="F"{{ old('subscription') == 'paid' ? 'selected' : '' }}>Paid
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Select type to be applied</label>
                                            <select class="form-select" name="role_id" id="role">
                                                <option value>Select type</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                                        {{ $role->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="teacher_col" style="display:{{ old('role_id') == 2 ? 'block' : 'none' }};">
                                        <div class="form-group">
                                            <label class="form-control-label">Select courses you want to
                                                teach</label>
                                            <select class="form-select" name="courses[]" id="courses" multiple>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">
                                                        {{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-xs custom-checkbox">
                                        <input type="checkbox" class="form-check-input" name="agreeCheckboxUser"
                                            id="agree_checkbox_user">
                                        <label class="form-check-label" for="agree_checkbox_user">I agree to </label>
                                        <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a
                                            tabindex="-1" href="javascript:void(0);"> Terms.</a>
                                    </div>
                                </div>
                                <button class="btn btn-primary login-btn" type="submit">Create Account</button>
                                <div class="account-footer text-center mt-3">
                                    Already have an account? <a class="forgot-link mb-0"
                                        href="{{ route('login') }}">Login</a>
                                </div>
                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Register Content -->

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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $("#courses").select2({
            width: '100%'
        });
        role.addEventListener('change', function() {
            if (this.value == 2) {
                teacher_col.style.display = 'block';
            } else {
                teacher_col.style.display = 'none';
            }
        })
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
