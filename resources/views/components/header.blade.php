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

                <!-- Sidebar Toggle for Horizontal Menu -->
                <button class="btn btn-light-light icon-btn d-lg-none small-screen-horizontal-toggle" type="button" aria-expanded="false" aria-controls="main-menu">
                    <span class="visually-hidden">Sidebar toggle for horizontal</span>
                    <i class="ri-arrow-right-fill"></i>
                </button>

                <!-- Search Dropdown (Static for now—make dynamic later if needed) -->
                <div class="dropdown features-dropdown">
                    <!-- Search Input for Desktop -->
                    <form class="d-none d-sm-block header-search" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="form-icon">
                            <input type="search" class="form-control form-control-icon" id="firstNameLayout4" placeholder="Search in Dunki" required>
                            <i class="ri-search-2-line text-muted"></i>
                        </div>
                    </form>

                    <!-- Search Button for Mobile -->
                    <button type="button" class="btn btn-light-light icon-btn d-sm-none" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Search</span>
                        <i class="ri-search-2-line text-muted"></i>
                    </button>

                    <div class="dropdown-menu">
                        <span class="dropdown-header fs-12">Recent searches</span>
                        <div class="dropdown-item text-wrap bg-transparent">
                            <span class="badge bg-light text-muted me-2">Students</span>
                            <span class="badge bg-light text-muted me-2">Applications</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header fs-12">Quick Links</span>
                        <div class="dropdown-item">
                            <div class="hstack gap-2 overflow-hidden">
                                <button type="button" class="btn btn-light-light rounded-pill icon-btn-sm flex-shrink-0">
                                    <span class="visually-hidden">Students</span>
                                    <i class="ri-user-line m-0"></i>
                                </button>
                                <div class="flex-grow-1 text-truncate">
                                    <span>Manage Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="hstack gap-2 overflow-hidden">
                                <button type="button" class="btn btn-light-light rounded-pill icon-btn-sm flex-shrink-0">
                                    <span class="visually-hidden">Applications</span>
                                    <i class="ri-file-line m-0"></i>
                                </button>
                                <div class="flex-grow-1 text-truncate">
                                    <span>Track Applications</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header fs-12">Users</span>
                        <div class="dropdown-item">
                            <div class="hstack gap-2 overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid avatar-sm avatar-item" src="{{ asset('assets/images/avatar/avatar-10.jpg') }}" alt="avatar image">
                                </div>
                                <div class="flex-grow-1 text-truncate">
                                    <span>John Doe <i class="bi-patch-check-fill text-primary"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="hstack gap-2 overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid avatar-sm avatar-item" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="avatar image">
                                </div>
                                <div class="flex-grow-1 text-truncate">
                                    <span>Admin User</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="px-5 py-2 d-block text-center link-primary" href="{{ route('students.index') }}">
                            See all results
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="header-right hstack gap-3">
                <div class="hstack gap-0 gap-sm-1">
                    <!-- Cart (Repurposed for Dunki - Static for now) -->
                    <div class="dropdown features-dropdown">
                        <button type="button" class="btn icon-btn btn-text-primary rounded-circle position-relative" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-bag fs-2xl"></i>
                            <span class="position-absolute translate-middle badge rounded-pill p-1 min-w-20px badge text-bg-primary">0</span> <!-- Dynamic count later -->
                        </button>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0" aria-labelledby="page-header-cart-dropdown">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="m-0 fs-5 fw-semibold">Quick Actions <span class="badge bg-secondary ms-1">3</span></h6>
                                        <a href="{{ route('applications.index') }}" class="text-muted fs-6">View All</a>
                                    </div>
                                </div>
                                <div class="header-cart-scrollable card-body px-0 py-2" data-simplebar>
                                    <p class="text-center py-4 text-muted">No actions yet. Start managing!</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="{{ route('home') }}" class="btn btn-primary text-center w-100 mt-3">Go to Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Apps Dropdown (Dynamic Links) -->
                    <div class="dropdown features-dropdown">
                        <button type="button" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Browse by Apps</span>
                            <i class="bi bi-grid"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                            <div class="card shadow-none mb-0 border-0">
                                <div class="card-header hstack gap-2">
                                    <h5 class="card-title mb-0 flex-grow-1">Dunki Apps</h5>
                                    <a href="{{ route('home') }}" class="btn btn-sm btn-subtle-info flex-shrink-0">View All
                                        <i class="ri-arrow-right-s-line align-middle"></i>
                                    </a>
                                </div>
                                <div class="card-body px-3">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('tasks.index') }}">
                                                <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                                                    <i class="bi bi-calendar-event align-middle text-muted"></i>
                                                </div>
                                                <p class="mb-1 h6 fw-medium">Tasks</p>
                                                <p class="mb-0 text-muted fs-11">Manage Tasks</p>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('applications.index') }}">
                                                <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                                                    <i class="bi bi-view-stacked align-middle text-muted"></i>
                                                </div>
                                                <p class="mb-1 h6 fw-medium">Applications</p>
                                                <p class="mb-0 text-muted fs-11">Track Apps</p>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('students.index') }}">
                                                <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                                                    <i class="ri-check-double-line align-middle text-muted"></i>
                                                </div>
                                                <p class="mb-1 h6 fw-medium">Students</p>
                                                <p class="mb-0 text-muted fs-11">Profiles</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Language (Static for now) -->
                    <div class="dropdown features-dropdown" id="language-dropdown">
                        <a href="#!" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar-item avatar-xs">
                                <img class="img-fluid avatar-xs" src="{{ asset('assets/images/flags/us.svg') }}" loading="lazy" alt="English">
                            </div>
                        </a>
                        <div class="dropdown-menu header-language-scrollable dropdown-menu-end" data-simplebar>
                            <a href="#!" class="dropdown-item py-2">
                                <img src="{{ asset('assets/images/flags/us.svg') }}" alt="en" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                                <span class="align-middle">English</span>
                            </a>
                            <!-- Add more languages -->
                        </div>
                    </div>

                    <!-- Theme (Static) -->
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

                    <!-- Notification (Static for now) -->
                    <div class="dropdown features-dropdown">
                        <button type="button" class="btn icon-btn btn-text-primary rounded-circle position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-notification-2-line fs-20"></i>
                            <span class="position-absolute translate-middle badge rounded-pill p-1 min-w-20px badge text-bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Notifications</h6>
                                <div class="d-flex align-items-center h6 mb-0">
                                    <span class="badge bg-primary me-2">8 New</span>
                                    <!-- Settings dropdown (static) -->
                                    <div class="dropdown">
                                        <a href="#!" class="btn btn-text-primary rounded-pill icon-btn-sm" id="remix-cion-notifications-dropdown-settings" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Notification Settings</span>
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="remix-cion-notifications-dropdown-settings">
                                            <span class="dropdown-header fw-medium text-body">Settings</span>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ri-archive-line"></i> Archive all
                                            </a>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ri-checkbox-circle-line"></i> Mark all as read
                                            </a>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ri-notification-off-line"></i> Disable notifications
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <span class="dropdown-header fw-medium text-body">Feedback</span>
                                            <a class="dropdown-item" href="#!">
                                                <i class="ri-chat-1-line"></i> Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush header-notification-scrollable" data-simplebar>
                                <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-item avatar avatar-title bg-danger-subtle text-danger">CF</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New Application Submitted</h6>
                                            <small class="mb-1 d-block text-body">John Doe applied for study visa.</small>
                                            <small class="text-muted">2 min ago</small>
                                        </div>
                                    </div>
                                </li>
                                <!-- Add more static/dynamic notifications -->
                            </ul>
                        </div>
                    </div>

                    <!-- Fullscreen (Static) -->
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
                    <!-- Logged In: Profile Dropdown -->
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
                                <span class="d-none d-xl-block fs-12 text-start text-muted">{{ ucfirst(auth()->user()->user_type) }}</span>
                            </span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end header-language-scrollable" aria-labelledby="accountNavbarDropdown">
                            <div class="dropdown dropstart d-block">
                                <a class="dropdown-item d-block w-100 text-start" href="#!" data-bs-toggle="dropdown" aria-expanded="false">
                                    Set status
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <span class="h-8px w-8px rounded-pill bg-success me-2"></span>
                                        Available
                                    </li>
                                    <li class="dropdown-item">
                                        <span class="h-8px w-8px rounded-pill bg-danger me-2"></span>
                                        Busy
                                    </li>
                                    <li class="dropdown-item">
                                        <span class="h-8px w-8px rounded-pill bg-warning me-2"></span>
                                        Away
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        Reset status
                                    </li>
                                </ul>
                            </div>

                            <a class="dropdown-item" href="{{ route('students.show', auth()->user()->clientProfile->id ?? 'profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('applications.index') }}">Applications</a>
                            <a class="dropdown-item" href="{{ route('tasks.index') }}">My Tasks</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#!">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-item avatar avatar-title text-white bg-primary border-0 fs-12">
                                            {{ substr(auth()->user()->name, 0, 2) }}
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 lh-1">{{ auth()->user()->name }} <span class="badge bg-primary-subtle text-primary rounded-pill text-uppercase ms-1 mb-0 py-1 fs-10">{{ ucfirst(auth()->user()->user_type) }}</span></h6>
                                        <span class="card-text text-muted">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ route('students.edit', auth()->user()->id) }}">Settings</a>

                            <div class="dropdown-divider"></div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign out
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
