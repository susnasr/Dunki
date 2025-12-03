<!-- START HEADER -->
<header class="app-header">
    <div class="container-fluid">
        <div class="nav-header">
            <div class="header-left hstack gap-3">
                <!-- HORIZONTAL BRAND LOGO -->
                <div class="app-sidebar-logo app-horizontal-logo justify-content-center align-items-center">
                    <a href="{{ route('home') }}">
                        <img height="35" class="app-sidebar-logo-default" alt="Dunki Logo" loading="lazy" src="{{ asset('assets/images/light-logo.png') }}">
                        <img height="40" class="app-sidebar-logo-minimize" alt="Dunki Logo" loading="lazy" src="{{ asset('assets/images/Favicon.png') }}">
                    </a>
                </div>
                <!-- Sidebar Toggle Btn -->
                <button type="button" class="btn btn-light-light icon-btn sidebar-toggle d-none d-md-block" aria-expanded="false" aria-controls="main-menu">
                    <span class="visually-hidden">Toggle sidebar</span>
                    <i class="ri-menu-2-fill"></i>
                </button>

                <!-- Sidebar Toggle for Mobile -->
                <button class="btn btn-light-light icon-btn d-md-none small-screen-toggle" id="smallScreenSidebarLabel" type="button" data-bs-toggle="offcanvas" data-bs-target="#smallScreenSidebar" aria-controls="smallScreenSidebar">
                    <span class="visually-hidden">Sidebar toggle for mobile</span>
                    <i class="ri-arrow-right-fill"></i>
                </button>
            </div>

            <div class="header-right hstack gap-3">
                <div class="hstack gap-0 gap-sm-1">
                    <!-- Theme Toggle -->
                    <div class="dropdown features-dropdown d-none d-sm-block">
                        <button type="button" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Light or Dark Mode Switch</span>
                            <i class="ri-sun-line fs-20"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end header-language-scrollable" data-simplebar>
                            <div class="dropdown-item cursor-pointer" id="light-theme">
                                <span class="hstack gap-2 align-middle"><i class="ri-sun-line"></i>Light</span>
                            </div>
                            <div class="dropdown-item cursor-pointer" id="dark-theme">
                                <span class="hstack gap-2 align-middle"><i class="ri-moon-clear-line"></i>Dark</span>
                            </div>
                            <div class="dropdown-item cursor-pointer" id="system-theme">
                                <span class="hstack gap-2 align-middle"><i class="ri-computer-line"></i>System</span>
                            </div>
                        </div>
                    </div>

                    <!-- Fullscreen -->
                    <button type="button" id="fullscreen-button" class="btn icon-btn btn-text-primary rounded-circle custom-toggle d-none d-sm-block" aria-pressed="false">
                        <span class="visually-hidden">Toggle Fullscreen</span>
                        <span class="icon-on">
                            <i class="ri-fullscreen-exit-line fs-16"></i>
                        </span>
                        <span class="icon-off">
                            <i class="ri-fullscreen-line fs-16"></i>
                        </span>
                    </button>
                </div>

                <!-- Dynamic Profile Section -->
                @auth
                    <div class="dropdown profile-dropdown features-dropdown">
                        <button type="button" id="accountNavbarDropdown" class="btn profile-btn shadow-none px-0 hstack gap-0 gap-sm-3" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                            <span class="position-relative">
                                <span class="avatar-item avatar overflow-hidden">
                                    @if (auth()->user()->profile_pic)
                                        <img class="img-fluid" src="{{ asset('storage/' . auth()->user()->profile_pic) }}" alt="{{ auth()->user()->name }}">
                                    @else
                                        <div class="avatar-item avatar avatar-title text-white bg-primary border-0 fs-12">
                                            {{ substr(auth()->user()->name, 0, 1) }}
                                        </div>
                                    @endif
                                </span>
                                <span class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 bottom-0"></span>
                            </span>
                            <span>
                                <span class="h6 d-none d-xl-inline-block text-start fw-semibold mb-0">{{ auth()->user()->name }}</span>
                                <span class="d-none d-xl-block fs-12 text-start text-muted">{{ ucfirst(str_replace('_', ' ', auth()->user()->user_type)) }}</span>
                            </span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end header-language-scrollable" aria-labelledby="accountNavbarDropdown">

                            {{-- 1. HEADINGS --}}
                            <div class="dropdown-header d-flex align-items-center py-2">
                                <h6 class="mb-0 me-auto small text-uppercase text-muted">Shortcuts</h6>
                            </div>

                            @php $role = auth()->user()->user_type; @endphp

                            {{-- 2. STUDENT MENU --}}
                            @if($role === 'student')
                                <a class="dropdown-item" href="{{ route('student.dashboard') }}">
                                    <i class="ri-home-4-line me-2 align-middle"></i> Dashboard
                                </a>
                                <a class="dropdown-item" href="{{ route('applications.index') }}">
                                    <i class="ri-file-list-3-line me-2 align-middle"></i> My Applications
                                </a>
                                <a class="dropdown-item" href="{{ route('files.index') }}">
                                    <i class="ri-folder-shield-2-line me-2 align-middle"></i> Documents
                                </a>
                            @endif

                            {{-- 3. ADVISOR MENU --}}
                            @if($role === 'academic_advisor')
                                <a class="dropdown-item" href="{{ route('academic.dashboard') }}">
                                    <i class="ri-dashboard-line me-2 align-middle"></i> Advisor Workspace
                                </a>
                                <a class="dropdown-item" href="{{ route('applications.index') }}">
                                    <i class="ri-file-search-line me-2 align-middle"></i> Review Applications
                                </a>
                            @endif

                            {{-- 4. ADMIN MENU --}}
                            @if($role === 'admin')
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    <i class="ri-dashboard-fill me-2 align-middle"></i> Admin Panel
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.universities.index') }}">
                                    <i class="ri-building-4-line me-2 align-middle"></i> Manage Universities
                                </a>
                            @endif

                            {{-- 5. SHARED (Chat & Settings) --}}
                            @if(in_array($role, ['student', 'academic_advisor']))
                                <a class="dropdown-item" href="{{ route('chat.index') }}">
                                    <i class="ri-chat-1-line me-2 align-middle"></i> Messages
                                </a>
                            @endif

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="ri-settings-3-line me-2 align-middle"></i> Account Settings
                            </a>

                            <div class="dropdown-divider"></div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a class="dropdown-item text-danger" href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ri-logout-box-line me-2 align-middle"></i> Sign out
                            </a>
                        </div>
                    </div>
                @else
                    <!-- Guest: Login/Register Links -->
                    <div class="hstack gap-2">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->
