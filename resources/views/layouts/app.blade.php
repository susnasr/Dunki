<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>Dunki | The ultimate way to get outta country</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.3.0/css/dataTables.checkboxes.min.css" rel="stylesheet">

    <script src="{{ asset('assets/js/layout/layout-default.js') }}"></script>
    <script src="{{ asset('assets/js/layout/layout.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom.min.css') }}" id="custom-style" rel="stylesheet" type="text/css">
</head>

<body>
@include('components.header')

<aside class="app-sidebar">
    <div class="app-sidebar-logo px-6 justify-content-center align-items-center">
        <a href="{{ url('/') }}">
            <img height="35" class="app-sidebar-logo-default" alt="Logo" src="{{ asset('assets/images/light-logo.png') }}">
            <img height="40" class="app-sidebar-logo-minimize" alt="Logo" src="{{ asset('assets/images/Favicon.png') }}">
        </a>
    </div>

    <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" id="sidebarMenu" aria-label="Main navigation">
        <ul class="main-menu" id="all-menu-items" role="menu">

            {{-- ================================================= --}}
            {{-- 🎓 STUDENT MENU --}}
            {{-- ================================================= --}}
            @if(auth()->user()->user_type === 'student')
                <li class="slide">
                    <a href="{{ route('student.dashboard') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('profile.edit') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-user-line"></i></span>
                        <span class="side-menu__label">My Profile</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('universities.index') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-bank-line"></i></span>
                        <span class="side-menu__label">Find Universities</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('applications.index') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-file-list-3-line"></i></span>
                        <span class="side-menu__label">My Applications</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('files.index') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-folder-shield-2-line"></i></span>
                        <span class="side-menu__label">Documents</span>
                    </a>
                </li>
            @endif

            {{-- ================================================= --}}
            {{-- 🛡️ ADMIN MENU --}}
            {{-- ================================================= --}}
            @if(auth()->user()->user_type === 'admin')
                <li class="menu-title">System Overview</li>

                <li class="slide">
                    <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-dashboard-line"></i></span>
                        <span class="side-menu__label">Admin Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Management</li>

                <li class="slide">
                    {{-- We will create this route for the "Import" feature later --}}
                    <a href="{{ route('admin.universities.index') }}" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-building-4-line"></i></span>
                        <span class="side-menu__label">Manage Universities</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="#!" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-group-line"></i></span>
                        <span class="side-menu__label">Users & Staff</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="#!" class="side-menu__item">
                        <span class="side_menu_icon"><i class="ri-file-settings-line"></i></span>
                        <span class="side-menu__label">All Applications</span>
                    </a>
                </li>
            @endif

        </ul>
    </nav>
</aside>
<div class="horizontal-overlay"></div>

<main class="app-wrapper">
    <div class="app-container">
        {{--
            👇 THIS IS THE MAGIC PART
            This tells Laravel: "Put the specific page content right here."
        --}}
        @yield('content')
    </div>
</main>

@include('components.footer')

<script src="{{ asset('assets/js/sidebar.js') }}"></script>
<script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/scroll-top.init.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.3.0/js/dataTables.checkboxes.min.js"></script>

<script type="module" src="{{ asset('assets/js/app.js') }}"></script>

@stack('scripts')
</body>
</html>
