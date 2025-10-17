<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>Sign Up | Dunki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Herozi is the top-selling Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta name="keywords" content="Herozi bootstrap dashboard, bootstrap, bootstrap 5, html dashboard, web dashboard, admin themes, web design, figma, web development, fullcalendar, datatables, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, frontend dashboard, responsive bootstrap theme">
    <meta content="SRBThemes" name="author">
    <link rel="shortcut icon" href="assets/images/Favicon.png">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Herozi - Bootstrap Admin & Dashboard Template">
    <meta property="og:description" content="Herozi is the top-selling Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta property="og:url" content="https://themeforest.net/user/srbthemes/portfolio">
    <meta property="og:site_name" content="Herozi by SRBThemes">
    <script>
        const AUTH_LAYOUT = true;
    </script>
    <!-- Layout JS -->
    <script src="assets/js/layout/layout-auth.js"></script>

    <script src="assets/js/layout/layout.js"></script>

    <!-- Choice Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!--icons css-->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- Sweet Alert -->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    <link href="assets/css/custom.min.css" id="custom-style" rel="stylesheet" type="text/css">
</head>

<body>
<!-- START -->
<div class="account-pages">
    <img src="{{ asset('assets/images/auth/auth_bg.jpg') }}" alt="auth_bg" class="auth-bg light">
    <img src="{{ asset('assets/images/auth/auth_bg_dark.jpg') }}" alt="auth_bg_dark" class="auth-bg dark">

    <div class="container">
        <div class="justify-content-center row gy-0">

            <!-- Left Banner Section -->
            <div class="col-lg-6 auth-banners">
                <div class="bg-login card card-body m-0 h-100 border-0">
                    <img src="{{ asset('assets/images/auth/IMG-20250927-WA0004.jpg') }}" class="img-fluid auth-banner" alt="Dunki - Study Abroad Journey">
                    <div class="auth-contain">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="text-center text-white my-4 p-4">
                                        <h3 class="text-white">Start Your Study Abroad Journey</h3>
                                        <p class="mt-3">Create your profile and explore personalized guidance for universities, visas, and target countries. Join Dunki today!</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="text-center text-white my-4 p-4">
                                        <h3 class="text-white">Track Applications Seamlessly</h3>
                                        <p class="mt-3">Monitor your study visa and university applications in real-time. Stay updated on status, tasks, and consultant assignments with ease.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="text-center text-white my-4 p-4">
                                        <h3 class="text-white">Secure Document Management</h3>
                                        <p class="mt-3">Upload and verify passports, transcripts, and SOPs safely. Manage roles for students, consultants, and admins with full privacy control.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Signup Section -->

            <div class="col-lg-6">
                <div class="auth-box card card-body m-0 h-100 border-0 justify-content-center">
                    <div class="mb-5 text-center">
                        <h4 class="fw-normal">Welcome to <span class="fw-bold text-primary">Dunki</span></h4>
                        <p class="text-muted mb-0">Please enter your details to create an account.</p>
                    </div>


                    <!-- ✅ Laravel Registration Form -->
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <label class="form-label" for="name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone number">
                        </div>

                        <!-- User Type -->
                        <div class="mb-4">
                            <label class="form-label" for="user_type">Select Role <span class="text-danger">*</span></label>
                            <select class="form-select" name="user_type" required>
                                <option value="">-- Choose your role --</option>
                                <option value="admin">Admin</option>
                                <option value="hr">HR</option>
                                <option value="visa_consultant">Visa Consultant</option>
                                <option value="travel_agent">Travel Agent</option>
                                <option value="academic_advisor">Academic Advisor</option>
                                <option value="student">Student</option>
                            </select>
                        </div>

                        <!-- Country -->
                        <div class="mb-4">
                            <label class="form-label" for="country">Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Enter your country" required>
                        </div>

                        <!-- Location -->
                        <div class="mb-4">
                            <label class="form-label" for="location">Location <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="Enter your city/location" required>
                        </div>

                        <!-- Profile Picture -->
                        <div class="mb-4">
                            <label class="form-label" for="profile_pic">Profile Picture</label>
                            <input type="file" class="form-control" name="profile_pic" accept="image/*">
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-5">
                            <label class="form-label" for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                        </div>

                        <div class="mb-5">
                            <p class="mb-0 fs-xs text-muted fst-italic">
                                By registering you agree to the Dunki
                                <a href="#!" class="text-primary text-decoration-underline">Terms of Use</a>
                            </p>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-2 w-100 btn-loader">
                            <span class="indicator-label">Sign Up</span>
                            <span class="indicator-progress flex gap-2 justify-content-center w-100">
                                <span>Please Wait...</span>
                                <i class="ri-loader-2-fill"></i>
                            </span>
                        </button>

                        <p class="mb-0 mt-5 text-muted text-center">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary fw-medium text-decoration-underline ms-1">Sign In</a>
                        </p>
                    </form>
                    <!-- ✅ End of Laravel Registration Form -->
                </div>
            </div>

        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
{{--<script src="assets/js/sidebar.js"></script>--}}
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/pages/scroll-top.init.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- App js -->
{{--<script src="assets/js/app.js"></script>--}}

</body>

</html>
