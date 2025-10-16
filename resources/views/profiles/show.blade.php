<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta charset="utf-8">
    <title>Dunki | Profile Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Herozi is the top-selling Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta name="keywords" content="Herozi bootstrap dashboard, bootstrap, bootstrap 5, html dashboard, web dashboard, admin themes, web design, figma, web development, fullcalendar, datatables, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, frontend dashboard, responsive bootstrap theme">
    <meta content="SRBThemes" name="author">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Herozi - Bootstrap Admin & Dashboard Template">
    <meta property="og:description" content="Herozi is the top-selling Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta property="og:url" content="https://themeforest.net/user/srbthemes/portfolio">
    <meta property="og:site_name" content="Herozi by SRBThemes">

    <!-- External CDN CSS (keep as is, no need to wrap with asset) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.3.0/css/dataTables.checkboxes.min.css" rel="stylesheet">

    <!-- Layout JS -->
    <script src="{{ asset('assets/js/layout/layout-default.js') }}"></script>
    <script src="{{ asset('assets/js/layout/layout.js') }}"></script>

    <!-- Choice Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Simplebar Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Sweet Alert -->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">

    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    <!-- Custom Css -->
    <link href="{{ asset('assets/css/custom.min.css') }}" id="custom-style" rel="stylesheet" type="text/css">
</head>

<body>
@include('components.header')

<!-- START SIDEBAR -->
<aside class="app-sidebar">
    <!-- START BRAND LOGO -->
    <div class="app-sidebar-logo px-6 justify-content-center align-items-center">
        <a href="{{ url('/') }}">
            <img height="35" class="app-sidebar-logo-default" alt="Dunki Logo" loading="lazy" src="{{ asset('assets/images/light-logo.png') }}">
            <img height="40" class="app-sidebar-logo-minimize" alt="Dunki Logo" loading="lazy" src="{{ asset('assets/images/Favicon.png') }}">
        </a>
    </div>
    <!-- END BRAND LOGO -->
    <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" id="sidebarMenu" aria-label="Main navigation">
        <ul class="main-menu" id="all-menu-items" role="menu">
            <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-dashboards">Dashboards</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="index.html" class="side-menu__item" role="menuitem" data-lang="hr-dashboards-ecommerce">E-Commerce</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-project-management.html" data-lang="hr-dashboards-project-management" class="side-menu__item" role="menuitem">Project Management</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-online-course.html" data-lang="hr-dashboards-online-course" class="side-menu__item" role="menuitem">Online course</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-social-media.html" data-lang="hr-dashboards-social-media" class="side-menu__item" role="menuitem">Social Media</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-layout-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-layout">Layout</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="demo-layout-horizontal.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-horizontal">Horizontal</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-two-column.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-two-column">Two Column</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-semibox.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-semibox">Semibox</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-compact.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-compact">Compact</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-small-icon.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-small-icon">Small Icon</a>
                    </li>
                </ul>
            </li>
            <li class="menu-title" role="presentation" data-lang="hr-title-applications">Applications</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-gallery-view-2"></i></span>
                    <span class="side-menu__label" data-lang="hr-apps">Apps</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="apps-calendar.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-calendar">Calendar</a>
                    </li>
                    <li class="slide">
                        <a href="apps-tasks-kanban.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-kanban">Kanban</a>
                    </li>
                    <li class="slide">
                        <a href="apps-file-manager.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-file-manager">File Manager</a>
                    </li>
                    <li class="slide">
                        <a href="apps-todo.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-to-do">To Do</a>
                    </li>
                    <li class="slide">
                        <a href="apps-chat.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-chat">Chat</a>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-apps-email">Email</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-email-list.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-inbox">Inbox</a>
                            </li>
                            <li class="slide">
                                <a href="apps-email-view.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-view-reply">View & Reply</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-ecommerce">E-Commerce</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-products.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-products">Products</a>
                            </li>
                            <li class="slide">
                                <a href="apps-products-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-list">Product List</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-details">Product Details</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-create.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-add-product">Add Product</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-cart.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-cart">Cart</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-checkout.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-checkout">Checkout</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-category-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-categories">Categories</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-order-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-orders">Orders</a>
                            </li>
                            <li class="slide">
                                <a href="apps-product-order-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-order-details">Order Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-projects">Projects</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-projects-list.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-list">List</a>
                            </li>
                            <li class="slide">
                                <a href="apps-projects-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-overview">Overview</a>
                            </li>
                            <li class="slide">
                                <a href="apps-projects-create.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-create-project">Create Project</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-online-courses">Online Courses</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-course-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-overview">Overview</a>
                            </li>
                            <li class="slide">
                                <a href="apps-course-details.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-details">Course Details</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-teacher">Teacher</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-course-teacher-list.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-list">List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-course-teacher-details.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-details">Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-course-teacher-add.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-add">Add</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-student">Student</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-course-student-list.html" class="side-menu__item" role="menuitem" data-lang="hr-student-list">List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-course-student-details.html" class="side-menu__item" role="menuitem" data-lang="hr-student-details">Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-course-student-add.html" class="side-menu__item" role="menuitem" data-lang="hr-student-add">Add</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-social">Social Media</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-social-feeds.html" class="side-menu__item" role="menuitem" data-lang="hr-social-feeds">Feeds</a>
                            </li>
                            <li class="slide">
                                <a href="apps-social-friends.html" class="side-menu__item" role="menuitem" data-lang="hr-social-friends">Friends</a>
                            </li>
                            <li class="slide">
                                <a href="apps-social-events.html" class="side-menu__item" role="menuitem" data-lang="hr-social-events">Events</a>
                            </li>
                            <li class="slide">
                                <a href="apps-social-activity.html" class="side-menu__item" role="menuitem" data-lang="hr-social-activity">Activity</a>
                            </li>
                            <li class="slide">
                                <a href="apps-social-watch-video.html" class="side-menu__item" role="menuitem" data-lang="hr-social-watch-video">Watch Videos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-invoices">Invoices</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-invoices-list.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-list">List</a>
                            </li>
                            <li class="slide">
                                <a href="apps-invoices-details.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-details">Details</a>
                            </li>
                            <li class="slide">
                                <a href="apps-create-invoices.html" class="side-menu__item" role="menuitem" data-lang="hr-create-invoices">Create invoice</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-title" role="presentation" data-lang="hr-title-pages">Pages</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-file-text-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-pages">Pages</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="pages-starter.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-start">Start</a>
                    </li>
                    <li class="slide">
                        <a href="pages-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-timeline">Timeline</a>
                    </li>
                    <li class="slide">
                        <a href="pages-faqs.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-faqs">FAQs</a>
                    </li>
                    <li class="slide">
                        <a href="pages-pricing.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-pricing">Pricing</a>
                    </li>
                    <li class="slide">
                        <a href="pages-gallery.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-gallery">Gallery</a>
                    </li>
                    <li class="slide">
                        <a href="pages-search-result.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-search-result">Search Results</a>
                    </li>
                    <li class="slide">
                        <a href="pages-privacy-policy.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-privacy-policy">Privacy Policy</a>
                    </li>
                    <li class="slide">
                        <a href="pages-terms-conditions.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-terms-conditions">Terms & Conditions</a>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-blog">Blog</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="pages-blog-list.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-list">Blog List</a>
                            </li>
                            <li class="slide">
                                <a href="pages-blog-details.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-details">Blog Details</a>
                            </li>
                            <li class="slide">
                                <a href="pages-blog-create.html" class="side-menu__item" role="menuitem" data-lang="hr-create-blog">Create Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-user-profile">User Profile</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="pages-profile-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-overview">Overview</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-account-settings">Account Settings</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="pages-profile-edit-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-overview">Overview</a>
                            </li>
                            <li class="slide">
                                <a href="pages-profile-edit-security.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-security">Security</a>
                            </li>
                            <li class="slide">
                                <a href="pages-profile-edit-billing-plans.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-billing">Billing & Plans</a>
                            </li>
                            <li class="slide">
                                <a href="pages-profile-edit-notifications.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-notifications">Notifications</a>
                            </li>
                            <li class="slide">
                                <a href="pages-profile-edit-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-connections">Connections</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-authentication">Authentication</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="auth-lockscreen.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-lock-screen">Lock Screen</a>
                            </li>
                            <li class="slide">
                                <a href="auth-coming-soon.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-coming-soon">Coming Soon</a>
                            </li>
                            <li class="slide">
                                <a href="auth-create-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-create-password">Create Password</a>
                            </li>
                            <li class="slide">
                                <a href="auth-reset-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-reset-password">Reset Password</a>
                            </li>
                            <li class="slide">
                                <a href="auth-signup.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-up">Sign Up</a>
                            </li>
                            <li class="slide">
                                <a href="auth-signin.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-in">Sign in</a>
                            </li>
                            <li class="slide">
                                <a href="auth-two-step-verify.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-two-step-verification">Two Step Verification</a>
                            </li>
                            <li class="slide">
                                <a href="under-maintenance.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-maintenance">Under Maintenance</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-error-pages">Error Pages</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="auth-401.html" class="side-menu__item" role="menuitem" data-lang="hr-error-401">401</a>
                            </li>
                            <li class="slide">
                                <a href="auth-404.html" class="side-menu__item" role="menuitem" data-lang="hr-error-404">404</a>
                            </li>
                            <li class="slide">
                                <a href="auth-500.html" class="side-menu__item" role="menuitem" data-lang="hr-error-500">500</a>
                            </li>
                            <li class="slide">
                                <a href="auth-offine.html" class="side-menu__item" role="menuitem" data-lang="hr-error-offline">offline page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-pantone-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-base-ui">Base UI</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="ui-alert.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-alert">Alert</a>
                    </li>
                    <li class="slide">
                        <a href="ui-badges.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-badge">Badge</a>
                    </li>
                    <li class="slide">
                        <a href="ui-breadcrumbs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-breadcrumb">Breadcrumb</a>
                    </li>
                    <li class="slide">
                        <a href="ui-buttons.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button">Buttons</a>
                    </li>
                    <li class="slide">
                        <a href="ui-button-group.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button-group">Button Group</a>
                    </li>
                    <li class="slide">
                        <a href="ui-card.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-card">Cards</a>
                    </li>
                    <li class="slide">
                        <a href="ui-carousel.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-carousel">Carousel</a>
                    </li>
                    <li class="slide">
                        <a href="ui-cookie.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-cookie">Cookie</a>
                    </li>
                    <li class="slide">
                        <a href="ui-dropdowns.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-dropdown">Dropdown</a>
                    </li>
                    <li class="slide">
                        <a href="ui-images-figures.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-image-figure">Images & Figures</a>
                    </li>
                    <li class="slide">
                        <a href="ui-links.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-link">Links</a>
                    </li>
                    <li class="slide">
                        <a href="ui-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-list">List Group</a>
                    </li>
                    <li class="slide">
                        <a href="ui-modal.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-modal">Modal</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tabs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tab">Nav & Tabs</a>
                    </li>
                    <li class="slide">
                        <a href="ui-offcanvas.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-offcanvas">Off Canvas</a>
                    </li>
                    <li class="slide">
                        <a href="ui-pagination.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-pagination">Pagination</a>
                    </li>
                    <li class="slide">
                        <a href="ui-placeholders.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-placeholder">Placeholders</a>
                    </li>
                    <li class="slide">
                        <a href="ui-popover.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-popover">Popovers</a>
                    </li>
                    <li class="slide">
                        <a href="ui-progress.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-progress">Progress</a>
                    </li>
                    <li class="slide">
                        <a href="ui-spinner.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-spinner">Spinners</a>
                    </li>
                    <li class="slide">
                        <a href="ui-scrollspy.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-scrollspy">Scroll Spy</a>
                    </li>
                    <li class="slide">
                        <a href="ui-separator.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-separator">Separator</a>
                    </li>
                    <li class="slide">
                        <a href="ui-toast.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-toast">Toasts</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tooltips.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tooltip">Tooltips</a>
                    </li>
                    <li class="slide">
                        <a href="ui-typography.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-typography">Typography</a>
                    </li>
                    <li class="slide">
                        <a href="ui-utilities.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-utility">Utilities</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-inbox-unarchive-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-advanced-ui">Advanced UI</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="ui-accordions.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-accordion">Accordians</a>
                    </li>
                    <li class="slide">
                        <a href="ui-avatars.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-avatar">Avatar</a>
                    </li>
                    <li class="slide">
                        <a href="ui-block.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-block">Block</a>
                    </li>
                    <li class="slide">
                        <a href="ui-countup.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-countup">Count Up</a>
                    </li>
                    <li class="slide">
                        <a href="ui-draggable-cards.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-draggable-card">Draggable Cards</a>
                    </li>
                    <li class="slide">
                        <a href="ui-media-player.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-media-player">Media Player</a>
                    </li>
                    <li class="slide">
                        <a href="ui-ratings.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-rating">Rating</a>
                    </li>
                    <li class="slide">
                        <a href="ui-sortable-js.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sortablejs">Sortable JS</a>
                    </li>
                    <li class="slide">
                        <a href="ui-sweetalert2.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sweetalert2">Sweet Alert</a>
                    </li>
                    <li class="slide">
                        <a href="ui-advance-swiper.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-swiper">Swiper JS</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tour.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tour">Tour</a>
                    </li>
                    <li class="slide">
                        <a href="ui-treeview.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-treeview">Tree View</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-input-field"></i></span>
                    <span class="side-menu__label" data-lang="hr-forms">Forms</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-form-elements">Form Elements</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="ui-form-elements.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input">Input</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-checkboxs-radios.html" class="side-menu__item" role="menuitem" data-lang="hr-form-checkbox-radio">Checkbox & Radios</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-input-group.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-group">Inout Group</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-select.html" class="side-menu__item" role="menuitem" data-lang="hr-form-select">Form Select</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-range.html" class="side-menu__item" role="menuitem" data-lang="hr-form-range">Range Slider</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-input-masks.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-masks">Input Masks</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-file-uploads.html" class="side-menu__item" role="menuitem" data-lang="hr-form-file-upload">File Uploads</a>
                            </li>
                            <li class="slide">
                                <a href="ui-date-picker.html" class="side-menu__item" role="menuitem" data-lang="hr-form-date-time-picker">Date,Time Picker</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="ui-floating-labels.html" class="side-menu__item" role="menuitem" data-lang="hr-form-floating-label">Floating Label</a>
                    </li>
                    <li class="slide">
                        <a href="ui-form-layout.html" class="side-menu__item" role="menuitem" data-lang="hr-form-layout">Form Layout</a>
                    </li>
                    <li class="slide">
                        <a href="ui-form-editor.html" class="side-menu__item" role="menuitem" data-lang="hr-form-editor">Editor</a>
                    </li>
                    <li class="slide">
                        <a href="ui-form-validation.html" class="side-menu__item" role="menuitem" data-lang="hr-form-validation">Form Validation</a>
                    </li>
                    <li class="slide">
                        <a href="ui-form-wizards.html" class="side-menu__item" role="menuitem" data-lang="hr-form-wizard">Form Wizards</a>
                    </li>
                    <li class="slide">
                        <a href="ui-form-advanced.html" class="side-menu__item" role="menuitem" data-lang="hr-form-advanced">Form Advanced</a>
                    </li>
                </ul>
            </li>
            <li class="menu-title" role="presentation" data-lang="hr-title-tables">Other</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-table-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-tables">Tables</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="ui-tables-basic.html" class="side-menu__item" role="menuitem" data-lang="hr-basic-table">Basic Tables</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tables-listjs.html" class="side-menu__item" role="menuitem" data-lang="hr-listjs-table">List JS Table</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tables-gridjs.html" class="side-menu__item" role="menuitem" data-lang="hr-gridjs-table">Grid JS Table</a>
                    </li>
                    <li class="slide">
                        <a href="ui-tables-datatables.html" class="side-menu__item" role="menuitem" data-lang="hr-datatables">Datatables</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-pie-chart-2-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-charts">Charts</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-apexcharts">Apexcharts</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="chart-apex-line.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-line">Line</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-area">Area</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-column.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-column">Column</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-bar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bar">Bar</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-mixed.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-mixed">Mixed</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-range-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-range-area">Range Charts</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-timeline">Timeline</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-funnel.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-funnel">Funnel</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-candlestick.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-candlestick">Candlestick</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-boxplot.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-boxplot">Boxplot</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-pie.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-pie">Pie</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-radar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radar">Radar</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-polar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-polar">Polar</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-radialbar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radialbar">Radialbar</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-bubble.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bubble">Bubble</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-scatter.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-scatter">Scatter</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-heatmap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-heatmap">Heatmap</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-treemap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-treemap">Treemap</a>
                            </li>
                            <li class="slide">
                                <a href="charts-apex-slope.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-slope">Slope</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="chart-js-chart.html" class="side-menu__item" role="menuitem" data-lang="hr-chartjs">Chartjs</a>
                    </li>
                    <li class="slide">
                        <a href="charts-echarts.html" class="side-menu__item" role="menuitem" data-lang="hr-echarts">Echarts</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-map-2-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-maps">Maps</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="google-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-google-maps">Google Maps</a>
                    </li>
                    <li class="slide">
                        <a href="leaflet-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-leaflet-maps">Leaflet Maps</a>
                    </li>
                    <li class="slide">
                        <a href="vector-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-vector-maps">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-terminal-box-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-icons">Icons</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="icons-remix.html" class="side-menu__item" role="menuitem" data-lang="hr-remix">Remix Icons</a>
                    </li>
                    <li class="slide">
                        <a href="icons-bootstrap-icons.html" class="side-menu__item" role="menuitem" data-lang="hr-bootstrap-icons">Bootstrap Icons</a>
                    </li>
                </ul>
            </li>
            <li class="menu-title" role="presentation" data-lang="hr-title-other">Other</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-organization-chart"></i></span>
                    <span class="side-menu__label" data-lang="hr-menu-levels">Menu levels</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-2-1">Level 2.1</a>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-level-2-2">Level 2.2</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-1">Level 3.1</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-2">Level 3.2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side-menu__label" data-lang="hr-level-2-3">Level 2.3</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-3">Level 3.3</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-4">Level 3.4</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<!-- END SIDEBAR -->
<div class="horizontal-overlay"></div>

<!-- START SMALL SCREEN SIDEBAR -->
<div class="offcanvas offcanvas-md offcanvas-start small-screen-sidebar" data-bs-scroll="true" tabindex="-1" id="smallScreenSidebar" aria-labelledby="smallScreenSidebarLabel">
    <div class="offcanvas-header hstack border-bottom">
        <!-- START BRAND LOGO -->
        <div class="app-sidebar-logo">
            <a href="index.html">
                <img height="35" class="app-sidebar-logo-default h-25px" alt="Logo" src="assets/images/light-logo.png">
                <img height="40" class="app-sidebar-logo-minimize" alt="Logo" src="assets/images/Favicon.png">
            </a>
        </div>
        <button type="button" class="btn-close bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body p-0">
        <!-- START SIDEBAR -->
        <aside class="app-sidebar">
            <!-- END BRAND LOGO -->
            <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" aria-label="Main navigation">
                <ul class="main-menu" id="all-menu-items" role="menu">
                    <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-dashboards">Dashboards</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="index.html" class="side-menu__item" role="menuitem" data-lang="hr-dashboards-ecommerce">E-Commerce</a>
                            </li>
                            <li class="slide">
                                <a href="dashboard-project-management.html" data-lang="hr-dashboards-project-management" class="side-menu__item" role="menuitem">Project Management</a>
                            </li>
                            <li class="slide">
                                <a href="dashboard-online-course.html" data-lang="hr-dashboards-online-course" class="side-menu__item" role="menuitem">Online course</a>
                            </li>
                            <li class="slide">
                                <a href="dashboard-social-media.html" data-lang="hr-dashboards-social-media" class="side-menu__item" role="menuitem">Social Media</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-layout-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-layout">Layout</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="demo-layout-horizontal.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-horizontal">Horizontal</a>
                            </li>
                            <li class="slide">
                                <a href="demo-layout-two-column.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-two-column">Two Column</a>
                            </li>
                            <li class="slide">
                                <a href="demo-layout-semibox.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-semibox">Semibox</a>
                            </li>
                            <li class="slide">
                                <a href="demo-layout-compact.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-compact">Compact</a>
                            </li>
                            <li class="slide">
                                <a href="demo-layout-small-icon.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-small-icon">Small Icon</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title" role="presentation" data-lang="hr-title-applications">Applications</li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-gallery-view-2"></i></span>
                            <span class="side-menu__label" data-lang="hr-apps">Apps</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="apps-calendar.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-calendar">Calendar</a>
                            </li>
                            <li class="slide">
                                <a href="apps-tasks-kanban.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-kanban">Kanban</a>
                            </li>
                            <li class="slide">
                                <a href="apps-file-manager.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-file-manager">File Manager</a>
                            </li>
                            <li class="slide">
                                <a href="apps-todo.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-to-do">To Do</a>
                            </li>
                            <li class="slide">
                                <a href="apps-chat.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-chat">Chat</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-apps-email">Email</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-email-list.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-inbox">Inbox</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-email-view.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-view-reply">View & Reply</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-ecommerce">E-Commerce</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-products.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-products">Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-products-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-list">Product List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-details">Product Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-create.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-add-product">Add Product</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-cart.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-cart">Cart</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-checkout.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-checkout">Checkout</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-category-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-categories">Categories</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-order-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-orders">Orders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-product-order-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-order-details">Order Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-projects">Projects</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-projects-list.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-list">List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-projects-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-overview">Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-projects-create.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-create-project">Create Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-online-courses">Online Courses</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-course-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-overview">Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-course-details.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-details">Course Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem">
                                            <span class="side-menu__label" data-lang="hr-teacher">Teacher</span>
                                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu" role="menu">
                                            <li class="slide">
                                                <a href="apps-course-teacher-list.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-list">List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apps-course-teacher-details.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-details">Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apps-course-teacher-add.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-add">Add</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem">
                                            <span class="side-menu__label" data-lang="hr-student">Student</span>
                                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu" role="menu">
                                            <li class="slide">
                                                <a href="apps-course-student-list.html" class="side-menu__item" role="menuitem" data-lang="hr-student-list">List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apps-course-student-details.html" class="side-menu__item" role="menuitem" data-lang="hr-student-details">Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apps-course-student-add.html" class="side-menu__item" role="menuitem" data-lang="hr-student-add">Add</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-social">Social Media</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-social-feeds.html" class="side-menu__item" role="menuitem" data-lang="hr-social-feeds">Feeds</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-social-friends.html" class="side-menu__item" role="menuitem" data-lang="hr-social-friends">Friends</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-social-events.html" class="side-menu__item" role="menuitem" data-lang="hr-social-events">Events</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-social-activity.html" class="side-menu__item" role="menuitem" data-lang="hr-social-activity">Activity</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-social-watch-video.html" class="side-menu__item" role="menuitem" data-lang="hr-social-watch-video">Watch Videos</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-invoices">Invoices</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="apps-invoices-list.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-list">List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-invoices-details.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-details">Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apps-create-invoices.html" class="side-menu__item" role="menuitem" data-lang="hr-create-invoices">Create invoice</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title" role="presentation" data-lang="hr-title-pages">Pages</li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-file-text-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-pages">Pages</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="pages-starter.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-start">Start</a>
                            </li>
                            <li class="slide">
                                <a href="pages-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-timeline">Timeline</a>
                            </li>
                            <li class="slide">
                                <a href="pages-faqs.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-faqs">FAQs</a>
                            </li>
                            <li class="slide">
                                <a href="pages-pricing.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-pricing">Pricing</a>
                            </li>
                            <li class="slide">
                                <a href="pages-gallery.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-gallery">Gallery</a>
                            </li>
                            <li class="slide">
                                <a href="pages-search-result.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-search-result">Search Results</a>
                            </li>
                            <li class="slide">
                                <a href="pages-privacy-policy.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-privacy-policy">Privacy Policy</a>
                            </li>
                            <li class="slide">
                                <a href="pages-terms-conditions.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-terms-conditions">Terms & Conditions</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-blog">Blog</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="pages-blog-list.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-list">Blog List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-blog-details.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-details">Blog Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-blog-create.html" class="side-menu__item" role="menuitem" data-lang="hr-create-blog">Create Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-user-profile">User Profile</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="pages-profile-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-overview">Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-project.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-project">Project</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-documents.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-documents">Documents</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-connections">Connections</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-account-settings">Account Settings</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="pages-profile-edit-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-overview">Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-edit-security.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-security">Security</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-edit-billing-plans.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-billing">Billing & Plans</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-edit-notifications.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-notifications">Notifications</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pages-profile-edit-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-connections">Connections</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-authentication">Authentication</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="auth-lockscreen.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-lock-screen">Lock Screen</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-coming-soon.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-coming-soon">Coming Soon</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-create-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-create-password">Create Password</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-reset-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-reset-password">Reset Password</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-signup.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-up">Sign Up</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-signin.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-in">Sign in</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-two-step-verify.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-two-step-verification">Two Step Verification</a>
                                    </li>
                                    <li class="slide">
                                        <a href="under-maintenance.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-maintenance">Under Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-error-pages">Error Pages</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="auth-401.html" class="side-menu__item" role="menuitem" data-lang="hr-error-401">401</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-404.html" class="side-menu__item" role="menuitem" data-lang="hr-error-404">404</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-500.html" class="side-menu__item" role="menuitem" data-lang="hr-error-500">500</a>
                                    </li>
                                    <li class="slide">
                                        <a href="auth-offine.html" class="side-menu__item" role="menuitem" data-lang="hr-error-offline">offline page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-pantone-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-base-ui">Base UI</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="ui-alert.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-alert">Alert</a>
                            </li>
                            <li class="slide">
                                <a href="ui-badges.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-badge">Badge</a>
                            </li>
                            <li class="slide">
                                <a href="ui-breadcrumbs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-breadcrumb">Breadcrumb</a>
                            </li>
                            <li class="slide">
                                <a href="ui-buttons.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button">Buttons</a>
                            </li>
                            <li class="slide">
                                <a href="ui-button-group.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button-group">Button Group</a>
                            </li>
                            <li class="slide">
                                <a href="ui-card.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-card">Cards</a>
                            </li>
                            <li class="slide">
                                <a href="ui-carousel.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-carousel">Carousel</a>
                            </li>
                            <li class="slide">
                                <a href="ui-cookie.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-cookie">Cookie</a>
                            </li>
                            <li class="slide">
                                <a href="ui-dropdowns.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-dropdown">Dropdown</a>
                            </li>
                            <li class="slide">
                                <a href="ui-images-figures.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-image-figure">Images & Figures</a>
                            </li>
                            <li class="slide">
                                <a href="ui-links.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-link">Links</a>
                            </li>
                            <li class="slide">
                                <a href="ui-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-list">List Group</a>
                            </li>
                            <li class="slide">
                                <a href="ui-modal.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-modal">Modal</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tabs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tab">Nav & Tabs</a>
                            </li>
                            <li class="slide">
                                <a href="ui-offcanvas.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-offcanvas">Off Canvas</a>
                            </li>
                            <li class="slide">
                                <a href="ui-pagination.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-pagination">Pagination</a>
                            </li>
                            <li class="slide">
                                <a href="ui-placeholders.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-placeholder">Placeholders</a>
                            </li>
                            <li class="slide">
                                <a href="ui-popover.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-popover">Popovers</a>
                            </li>
                            <li class="slide">
                                <a href="ui-progress.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-progress">Progress</a>
                            </li>
                            <li class="slide">
                                <a href="ui-spinner.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-spinner">Spinners</a>
                            </li>
                            <li class="slide">
                                <a href="ui-scrollspy.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-scrollspy">Scroll Spy</a>
                            </li>
                            <li class="slide">
                                <a href="ui-separator.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-separator">Separator</a>
                            </li>
                            <li class="slide">
                                <a href="ui-toast.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-toast">Toasts</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tooltips.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tooltip">Tooltips</a>
                            </li>
                            <li class="slide">
                                <a href="ui-typography.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-typography">Typography</a>
                            </li>
                            <li class="slide">
                                <a href="ui-utilities.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-utility">Utilities</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-inbox-unarchive-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-advanced-ui">Advanced UI</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="ui-accordions.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-accordion">Accordians</a>
                            </li>
                            <li class="slide">
                                <a href="ui-avatars.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-avatar">Avatar</a>
                            </li>
                            <li class="slide">
                                <a href="ui-block.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-block">Block</a>
                            </li>
                            <li class="slide">
                                <a href="ui-countup.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-countup">Count Up</a>
                            </li>
                            <li class="slide">
                                <a href="ui-draggable-cards.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-draggable-card">Draggable Cards</a>
                            </li>
                            <li class="slide">
                                <a href="ui-media-player.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-media-player">Media Player</a>
                            </li>
                            <li class="slide">
                                <a href="ui-ratings.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-rating">Rating</a>
                            </li>
                            <li class="slide">
                                <a href="ui-sortable-js.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sortablejs">Sortable JS</a>
                            </li>
                            <li class="slide">
                                <a href="ui-sweetalert2.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sweetalert2">Sweet Alert</a>
                            </li>
                            <li class="slide">
                                <a href="ui-advance-swiper.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-swiper">Swiper JS</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tour.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tour">Tour</a>
                            </li>
                            <li class="slide">
                                <a href="ui-treeview.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-treeview">Tree View</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-input-field"></i></span>
                            <span class="side-menu__label" data-lang="hr-forms">Forms</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-form-elements">Form Elements</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="ui-form-elements.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input">Input</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-checkboxs-radios.html" class="side-menu__item" role="menuitem" data-lang="hr-form-checkbox-radio">Checkbox & Radios</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-input-group.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-group">Inout Group</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-select.html" class="side-menu__item" role="menuitem" data-lang="hr-form-select">Form Select</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-range.html" class="side-menu__item" role="menuitem" data-lang="hr-form-range">Range Slider</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-input-masks.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-masks">Input Masks</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-form-file-uploads.html" class="side-menu__item" role="menuitem" data-lang="hr-form-file-upload">File Uploads</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ui-date-picker.html" class="side-menu__item" role="menuitem" data-lang="hr-form-date-time-picker">Date,Time Picker</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="ui-floating-labels.html" class="side-menu__item" role="menuitem" data-lang="hr-form-floating-label">Floating Label</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-layout.html" class="side-menu__item" role="menuitem" data-lang="hr-form-layout">Form Layout</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-editor.html" class="side-menu__item" role="menuitem" data-lang="hr-form-editor">Editor</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-validation.html" class="side-menu__item" role="menuitem" data-lang="hr-form-validation">Form Validation</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-wizards.html" class="side-menu__item" role="menuitem" data-lang="hr-form-wizard">Form Wizards</a>
                            </li>
                            <li class="slide">
                                <a href="ui-form-advanced.html" class="side-menu__item" role="menuitem" data-lang="hr-form-advanced">Form Advanced</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title" role="presentation" data-lang="hr-title-tables">Other</li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-table-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-tables">Tables</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="ui-tables-basic.html" class="side-menu__item" role="menuitem" data-lang="hr-basic-table">Basic Tables</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tables-listjs.html" class="side-menu__item" role="menuitem" data-lang="hr-listjs-table">List JS Table</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tables-gridjs.html" class="side-menu__item" role="menuitem" data-lang="hr-gridjs-table">Grid JS Table</a>
                            </li>
                            <li class="slide">
                                <a href="ui-tables-datatables.html" class="side-menu__item" role="menuitem" data-lang="hr-datatables">Datatables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-pie-chart-2-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-charts">Charts</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-apexcharts">Apexcharts</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="chart-apex-line.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-line">Line</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-area">Area</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-column.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-column">Column</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-bar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bar">Bar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-mixed.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-mixed">Mixed</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-range-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-range-area">Range Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-timeline">Timeline</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-funnel.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-funnel">Funnel</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-candlestick.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-candlestick">Candlestick</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-boxplot.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-boxplot">Boxplot</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-pie.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-pie">Pie</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-radar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radar">Radar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-polar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-polar">Polar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-radialbar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radialbar">Radialbar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-bubble.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bubble">Bubble</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-scatter.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-scatter">Scatter</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-heatmap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-heatmap">Heatmap</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-treemap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-treemap">Treemap</a>
                                    </li>
                                    <li class="slide">
                                        <a href="charts-apex-slope.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-slope">Slope</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="chart-js-chart.html" class="side-menu__item" role="menuitem" data-lang="hr-chartjs">Chartjs</a>
                            </li>
                            <li class="slide">
                                <a href="charts-echarts.html" class="side-menu__item" role="menuitem" data-lang="hr-echarts">Echarts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-map-2-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-maps">Maps</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="google-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-google-maps">Google Maps</a>
                            </li>
                            <li class="slide">
                                <a href="leaflet-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-leaflet-maps">Leaflet Maps</a>
                            </li>
                            <li class="slide">
                                <a href="vector-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-vector-maps">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-terminal-box-line"></i></span>
                            <span class="side-menu__label" data-lang="hr-icons">Icons</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="icons-remix.html" class="side-menu__item" role="menuitem" data-lang="hr-remix">Remix Icons</a>
                            </li>
                            <li class="slide">
                                <a href="icons-bootstrap-icons.html" class="side-menu__item" role="menuitem" data-lang="hr-bootstrap-icons">Bootstrap Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title" role="presentation" data-lang="hr-title-other">Other</li>
                    <li class="slide">
                        <a href="#!" class="side-menu__item" role="menuitem">
                            <span class="side_menu_icon"><i class="ri-organization-chart"></i></span>
                            <span class="side-menu__label" data-lang="hr-menu-levels">Menu levels</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu" role="menu">
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-2-1">Level 2.1</a>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-level-2-2">Level 2.2</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-1">Level 3.1</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-2">Level 3.2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#!" class="side-menu__item" role="menuitem">
                                    <span class="side-menu__label" data-lang="hr-level-2-3">Level 2.3</span>
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu" role="menu">
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-3">Level 3.3</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-4">Level 3.4</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</div>
<!-- START PRELOADER -->
<div class="align-items-center justify-content-center" id="preloader">
    <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- END PRELOADER -->

<main class="app-wrapper">
    <div class="app-container">
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Profile Overview</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Overview</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body pb-0">
                <div class="hstack align-items-start justify-content-center text-center gap-4 flex-wrap">
                    <div class="position-relative w-max">
                        <div class="d-flex align-items-center" data-uploader>
                            <div class="avatar-item avatar-xl">
                                <img class="img-fluid avatar-xl" alt="avatar image"
                                     src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/images/default-avatar.png') }}"
                                     data-action="avatar-image">
                            </div>
                        </div>
                    </div>

                    <div class="flex-grow-1">
                        <div class="vstack gap-5 mb-5">
                            <div class="flex-grow-1">
                                <h4 class="mb-2 fs-5 fw-semibold">{{ $user->name }}</h4>
                                <ul class="d-flex flex-wrap gap-2 text-muted p-0 mb-0 justify-content-center">
                                    <li class="d-flex align-items-center gap-1">
                                        <i class="ri-mail-line"></i>
                                        <p class="mb-0">{{ $user->email }}</p>
                                    </li>

                                    <li class="d-flex align-items-center gap-1">
                                        <i class="ri-user-2-line"></i>
                                        <p class="mb-0 text-capitalize">{{ $user->user_type }}</p>
                                    </li>

                                    @if($user->phone)
                                        <li class="d-flex align-items-center gap-1">
                                            <i class="ri-phone-line"></i>
                                            <p class="mb-0">{{ $user->phone }}</p>
                                        </li>
                                    @endif

                                    @if($user->country)
                                        <li class="d-flex align-items-center gap-1">
                                            <i class="ri-flag-line"></i>
                                            <p class="mb-0">{{ $user->country }}</p>
                                        </li>
                                    @endif

                                    @if($user->location)
                                        <li class="d-flex align-items-center gap-1">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="mb-0">{{ $user->location }}</p>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                            <div class="hstack justify-content-center gap-2 flex-shrink-0">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="switcher">
    <button type="button" class="switcher-icon btn btn-dark" data-bs-toggle="offcanvas" data-bs-target="#switcher">
        <i class="bi-sliders fs-6 me-2"></i> Customize
    </button>

    <!-- OFFCANVAS -->
    <div class="offcanvas offcanvas-end" id="switcher" tabindex="-1" aria-labelledby="switcherLabel">
        <div class="offcanvas-header border-bottom hstack">
            <h1 class="offcanvas-title fs-5 flex-grow-1" id="switcherLabel">Preview Settings</h1>
            <button type="button" class="close btn btn-text-primary icon-btn-sm flex-shrink-0" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-large-line fw-semibold"></i>
            </button>
        </div>
        <div class="offcanvas-body">

            <!-- MAIN_LAYOUT -->
            <div class="d-none d-lg-block">
                <h6 class="mb-2 fs-5">Theme Layouts</h6>
                <p class="text-muted">Defines the admin panel\'s layout style, allowing you to choose from different design options.</p>
                <div class="row g-4 mb-5">
                    <div class="col-12 col-sm-4">
                        <!-- VERTICAL -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="vertical" type="radio" id="verticalLayouts">
                        <label for="verticalLayouts" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Vertical</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-4">
                        <!-- HORIZONTAL -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="horizontal" type="radio" id="horizontalLayouts">
                        <label for="horizontalLayouts" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="d-flex h-16px flex-shrink-0 border-end">
                        <span class="w-20px h-16px bg-light d-block"></span>
                        <span class="w-100 bg-primary-subtle d-flex justify-content-between p-1">
                          <span class="d-flex gap-2">
                            <span class="w-20px h-6px bg-light rounded d-block mb-1"></span>
                            <span class="w-20px h-6px bg-light rounded d-block mb-1"></span>
                          </span>
                          <span class="w-20px h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Horizontal</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-4">
                        <!-- 2 COLUMN -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="two-column" type="radio" id="2ColumnLayouts">
                        <label for="2ColumnLayouts" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="w-16px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 bg-light d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-primary-subtle rounded d-block mb-1"></span>
                          <span class="h-6px bg-primary-subtle rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-primary-subtle rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="w-30px ms-1 d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Two Column</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-4">
                        <!-- SEMI BOXED -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="semi-boxed" type="radio" id="semiBoxLayouts">
                        <label for="semiBoxLayouts" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden p-2">
                  <span class="d-flex h-100 rounded">
                    <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Semi Box</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-4">
                        <!-- COMPACT -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="compact" type="radio" id="compactSidebar">
                        <label for="compactSidebar" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="w-20px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-8px bg-light rounded d-block mb-1"></span>
                          <span class="h-8px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-8px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Compact</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-4">
                        <!-- SMALL ICON -->
                        <input class="form-check-input d-none" data-attribute="data-main-layout" name="layoutsModes" value="small-icon" type="radio" id="smallIconSidebar">
                        <label for="smallIconSidebar" class="switcher-card w-100">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="w-14px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Small Icon View</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- THEME -->
            <h6 class="mb-2 fs-5">Color Mode</h6>
            <p class="text-muted">Choose if app\'s appearance should be light or dark, or follow your computer\'s settings.</p>
            <div class="list-group flex-row gap-3 mb-3 template-customizer mb-5">
                <!-- LIGHT -->
                <label for="lightTheme" class="list-group-item p-2 form-check rounded m-0 hstack gap-3 w-max">
            <span class="form-check-label hstack gap-2">
              <i class="ri-sun-line"></i>
              <span class="fw-semibold fs-12">Light Theme</span>
            </span>
                    <input id="lightTheme" type="radio" data-attribute="data-bs-theme" class="form-check-input" name="layoutsModes" value="light">
                </label>
                <!-- DARK -->
                <label for="darkTheme" class="list-group-item p-2 form-check rounded m-0 hstack gap-3 w-max">
            <span class="form-check-label hstack gap-2">
              <i class="ri-moon-clear-line"></i>
              <span class="fw-semibold fs-12">Dark Theme</span>
            </span>
                    <input id="darkTheme" type="radio" data-attribute="data-bs-theme" class="form-check-input" name="layoutsModes" value="dark">
                </label>
                <!-- AUTO -->
                <label for="autoTheme" class="list-group-item p-2 form-check rounded m-0 hstack gap-3 w-max">
            <span class="form-check-label hstack gap-2">
              <i class="ri-computer-line"></i>
              <span class="fw-semibold fs-12">Auto Theme</span>
            </span>
                    <input id="autoTheme" type="radio" data-attribute="data-bs-theme" class="form-check-input cursor-pointer ms-auto" name="layoutsModes" value="auto">
                </label>
            </div>

            <!-- RTL MODE -->
            <h6 class="mb-2 fs-5">RTL Mode</h6>
            <p class="text-muted">Toggle between LTR and RTL layouts to support different language directions.</p>

            <div class="row g-4 mb-5">
                <div class="col-4">
                    <!-- LTR MODE -->
                    <input class="form-check-input d-none" data-attribute="dir" name="directionModes" value="ltr" type="radio" id="ltrLayouts">
                    <label for="ltrLayouts" class="switcher-card w-100">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">LTR Direction</span>
                    </label>
                </div>
                <div class="col-4">
                    <!-- RTL MODE -->
                    <input class="form-check-input d-none" data-attribute="dir" name="directionModes" value="rtl" type="radio" id="rtlLayouts">
                    <label for="rtlLayouts" class="switcher-card w-100">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2 vstack align-items-end">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px me-1"></span>
                    </span>
                  </span>
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">RTL Direction</span>
                    </label>
                </div>
            </div>

            <!-- THEME_COLOR -->
            <h6 class="mb-2 fs-5">Preset Themes</h6>
            <p class="text-muted">Choose a preset theme from out theme library.</p>
            <div class="list-group flex-row flex-wrap gap-2 mb-5 template-customizer">

                <!-- PRIMARY -->
                <label for="primary-variant-01" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="primary">
            <span class="form-check-label hstack avatar avatar-item theme-bg-primary rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-01" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="primary" checked>
                </label>

                <!-- SECONDARY -->
                <label for="primary-variant-02" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="secondary">
            <span class="form-check-label hstack avatar avatar-item theme-bg-secondary rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-02" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="secondary">
                </label>

                <!-- SUCCESS -->
                <label for="primary-variant-03" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="success">
            <span class="form-check-label hstack avatar avatar-item theme-bg-success rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-03" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="success">
                </label>

                <!-- INFO -->
                <label for="primary-variant-04" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="info">
            <span class="form-check-label hstack avatar avatar-item theme-bg-info rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-04" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="info">
                </label>

                <!-- WARNING -->
                <label for="primary-variant-05" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="warning">
            <span class="form-check-label hstack avatar avatar-item theme-bg-warning rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-05" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="warning">
                </label>

                <!-- DANGER -->
                <label for="primary-variant-06" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="danger">
            <span class="form-check-label hstack avatar avatar-item theme-bg-danger rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-06" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="danger">
                </label>

                <!-- BLUE -->
                <label for="primary-variant-09" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="blue">
            <span class="form-check-label hstack avatar avatar-item theme-bg-blue rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-09" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="blue">
                </label>

                <!-- PURPLE -->
                <label for="primary-variant-11" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="purple">
            <span class="form-check-label hstack avatar avatar-item theme-bg-purple rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-11" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="purple">
                </label>

                <!-- PINK -->
                <label for="primary-variant-12" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="pink">
            <span class="form-check-label hstack avatar avatar-item theme-bg-pink rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-12" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="pink">
                </label>

                <!-- ORANGE -->
                <label for="primary-variant-13" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="orange">
            <span class="form-check-label hstack avatar avatar-item theme-bg-orange rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-13" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="orange">
                </label>

                <!-- TEAL -->
                <label for="primary-variant-16" class="list-group-item form-check p-1 rounded-3 m-0" data-theme-color="teal">
            <span class="form-check-label hstack avatar avatar-item theme-bg-teal rounded-3 border-0">
              <i class="ri-palette-line"></i>
            </span>
                    <input id="primary-variant-16" type="radio" data-attribute="data-theme-color" class="form-check-input d-none" name="data-theme-color" value="teal">
                </label>

            </div>

            <!-- SIDEBAR -->
            <h6 class="mb-2 fs-5">Sidebar Colors</h6>
            <p class="text-muted text-sm">Sets the sidebar color scheme. Options include light, dark, or gradient styles.</p>
            <div class="row g-4 mb-5">

                <div class="col-4">
                    <!-- LIGHT SIDEBAR -->
                    <input class="form-check-input d-none" data-attribute="data-sidebar" name="sidebar-color" value="light-sidebar" type="radio" id="sidebar-color-light" checked>
                    <label for="sidebar-color-light" class="switcher-card w-100 active" data-sidebar="light-sidebar">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-20px bg-white border-bottom d-block"></span>
                    <span class="h-100 bg-white d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Light</span>
                    </label>
                </div>

                <div class="col-4">
                    <!-- DARK SIDEBAR -->
                    <input class="form-check-input d-none" data-attribute="data-sidebar" name="sidebar-color" value="dark-sidebar" type="radio" id="sidebar-color-dark">
                    <label for="sidebar-color-dark" class="switcher-card w-100" data-sidebar="dark-sidebar">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-20px bg-dark border-bottom d-block"></span>
                    <span class="h-100 bg-dark d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Dark</span>
                    </label>
                </div>

                <div class="col-4">
                    <!-- GRADIENT SIDEBAR -->
                    <input class="form-check-input d-none" data-attribute="data-sidebar" name="sidebar-color" value="gradient-sidebar" type="radio" id="sidebar-color-gradient">
                    <label for="sidebar-color-gradient" class="switcher-card w-100" data-sidebar="gradient-sidebar">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Gradient</span>
                    </label>
                </div>

            </div>

            <!-- NAV_POSITION -->
            <h6 class="mb-2 fs-5">Navbar Positions Options</h6>
            <p class="text-muted">Sets the navbar position: sticky, static, or hidden.</p>

            <div class="row g-4 mb-5">
                <div class="col-4">
                    <!-- STICKY -->
                    <input class="form-check-input d-none" data-attribute="data-nav-position" name="navbarPositionsOption" value="sticky" type="radio" id="navbarPositionsSticky">
                    <label for="navbarPositionsSticky" class="switcher-card w-100 active" data-nav-position="sticky">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Sticky</span>
                    </label>
                </div>
                <div class="col-4">
                    <!-- STATIC -->
                    <input class="form-check-input d-none" data-attribute="data-nav-position" name="navbarPositionsOption" value="static" type="radio" id="navbarPositionsStatic">
                    <label for="navbarPositionsStatic" class="switcher-card w-100" data-nav-position="static">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Static</span>
                    </label>
                </div>
                <div class="col-4 nav-hidden">
                    <!-- HIDDEN -->
                    <input class="form-check-input d-none" data-attribute="data-nav-position" name="navbarPositionsOption" value="hidden" type="radio" id="navbarPositionsHidden">
                    <label for="navbarPositionsHidden" class="switcher-card w-100" data-nav-position="hidden">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Hidden</span>
                    </label>
                </div>
            </div>

            <!-- NAV_TYPE -->
            <h6 class="mb-2 fs-5">Navbar Type Options</h6>
            <p class="text-muted">Sets the navbar style: default, dark, transparent, or glass.</p>

            <div class="row g-4 mb-5">
                <div class="col-4">
                    <!-- DEFAULT -->
                    <input class="form-check-input d-none" data-attribute="data-nav-type" name="navbarTypeOption" value="default" type="radio" id="data-nav-default" checked>
                    <label for="data-nav-default" class="switcher-card w-100 active" data-nav-type="default">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Default</span>
                    </label>
                </div>
                <div class="col-4">
                    <!-- DARK -->
                    <input class="form-check-input d-none" data-attribute="data-nav-type" name="navbarTypeOption" value="dark" type="radio" id="data-nav-dark">
                    <label for="data-nav-dark" class="switcher-card w-100" data-nav-type="dark">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between bg-dark">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Dark</span>
                    </label>
                </div>
                <div class="col-4">
                    <!-- GLASS -->
                    <input class="form-check-input d-none" data-attribute="data-nav-type" name="navbarTypeOption" value="glass" type="radio" id="data-nav-glass">
                    <label for="data-nav-glass" class="switcher-card w-100" data-nav-type="glass">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 h-20px bg-light border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-12px h-12px bg-secondary-subtle rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Glass</span>
                    </label>
                </div>
            </div>

            <!-- FONT  -->
            <h6 class="mb-2 fs-5">Font Options</h6>
            <p class="text-muted">Sets the fonts for headings and body text.</p>
            <div class="row g-4 mb-5">
                <div class="col-12 col-sm-6">
                    <!-- FONT_BODY -->
                    <label class="form-label text-muted fw-semibold fs-12 d-block" for="body-font-choice">Body Font</label>
                    <select class="form-select" id="body-font-choice" data-attribute="data-font-body">
                        <option value="Inter">Inter</option>
                        <option value="Poppins">Poppins</option>
                        <option value="Roboto">Roboto</option>
                        <option value="Open Sans">Open Sans</option>
                        <option value="Lato">Lato</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <!-- FONT_HEADING -->
                    <label class="form-label text-muted fw-semibold fs-12 d-block" for="heading-font-choice">Heading Font</label>
                    <select class="form-select" id="heading-font-choice" data-attribute="data-font-heading">
                        <option value="Inter">Inter</option>
                        <option value="Poppins">Poppins</option>
                        <option value="Roboto">Roboto</option>
                        <option value="Open Sans">Open Sans</option>
                        <option value="Lato">Lato</option>
                    </select>
                </div>
            </div>

            <!-- FONT_SIZE -->
            <h6 class="mb-2 fs-5">Font Size Options</h6>
            <p class="text-muted">Sets the font size: sm, md, or lg.</p>

            <div class="list-group flex-row gap-3 mb-3 template-customizer mb-5">
                <!-- SM -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">SM</span>
              </span>
              <input type="radio" data-attribute="data-font-size" class="form-check-input cursor-pointer ms-auto" name="font-size-options" value="sm">
            </span>
                </label>
                <!-- MD -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">MD</span>
              </span>
              <input type="radio" data-attribute="data-font-size" class="form-check-input cursor-pointer ms-auto" name="font-size-options" value="md">
            </span>
                </label>
                <!-- LG -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">LG</span>
              </span>
              <input type="radio" data-attribute="data-font-size" class="form-check-input cursor-pointer ms-auto" name="font-size-options" value="lg">
            </span>
                </label>
            </div>

            <!-- LAYOUT_ROUNDED -->
            <h6 class="mb-2 fs-5">Rounded Options</h6>
            <p class="text-muted">Sets the border radius size: xs, sm, md, lg, or xl.</p>

            <div class="list-group flex-row flex-wrap flex-sm-nowrap gap-3 mb-3 template-customizer mb-5">
                <!-- XS -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">XS</span>
              </span>
              <input type="radio" data-attribute="data-layout-rounded" class="form-check-input cursor-pointer ms-auto" name="rounded-options" value="xs">
            </span>
                </label>
                <!-- SM -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">SM</span>
              </span>
              <input type="radio" data-attribute="data-layout-rounded" class="form-check-input cursor-pointer ms-auto" name="rounded-options" value="sm">
            </span>
                </label>
                <!-- MD -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">MD</span>
              </span>
              <input type="radio" data-attribute="data-layout-rounded" class="form-check-input cursor-pointer ms-auto" name="rounded-options" value="md">
            </span>
                </label>
                <!-- LG -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">LG</span>
              </span>
              <input type="radio" data-attribute="data-layout-rounded" class="form-check-input cursor-pointer ms-auto" name="rounded-options" value="lg">
            </span>
                </label>
                <!-- XL -->
                <label class="list-group-item form-check rounded mb-0">
            <span class="d-flex flex-fill my-1">
              <span class="form-check-label d-flex">
                <span class="fw-semibold">XL</span>
              </span>
              <input type="radio" data-attribute="data-layout-rounded" class="form-check-input cursor-pointer ms-auto" name="rounded-options" value="xl">
            </span>
                </label>
            </div>

            <!-- LAYOUT_CONTAINER -->
            <div class="two-column-hidden">
                <h6 class="mb-2 fs-5">Container Options</h6>
                <p class="text-muted">Defines the container style: fluid (full-width) or boxed (fixed width).</p>
                <div class="row g-4 mb-5">
                    <div class="col-4">
                        <!-- FLUID -->
                        <input class="form-check-input d-none" data-attribute="data-layout-container" name="layoutsContainer" value="fluid" type="radio" id="fluidLayouts" checked>
                        <label for="fluidLayouts" class="switcher-card w-100 active" data-layout-container="fluid">
                <span class="border d-block rounded h-100px overflow-hidden">
                  <span class="d-flex h-100">
                    <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Default</span>
                        </label>
                    </div>
                    <div class="col-4">
                        <!-- BOXED -->
                        <input class="form-check-input d-none" data-attribute="data-layout-container" name="layoutsContainer" value="boxed" type="radio" id="boxedLayouts">
                        <label for="boxedLayouts" class="switcher-card w-100" data-layout-container="boxed">
                <span class="border d-block rounded h-100px overflow-hidden bg-secondary-subtle">
                  <span class="d-flex h-100 mx-3 bg-white">
                    <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                      <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                      <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                        <span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                          <span class="h-6px bg-light rounded d-block mb-1"></span>
                        </span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                    </span>
                    <span class="d-flex flex-column flex-grow-1">
                      <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                        <span class="d-flex align-items-center gap-1">
                          <span class="w-8px h-8px bg-danger rounded-pill"></span>
                          <span class="w-8px h-8px bg-success rounded-pill"></span>
                          <span class="w-8px h-8px bg-warning rounded-pill"></span>
                        </span>
                        <span class="w-8px h-8px bg-light rounded-pill"></span>
                      </span>
                      <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                        <span class="p-2">
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                          <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        </span>
                        <span class="w-100 bg-light h-6px ms-1"></span>
                      </span>
                    </span>
                  </span>
                </span>
                            <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Boxed</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- PAGE_LOADER -->
            <h6 class="mb-2 fs-5">Loader Options</h6>
            <p class="text-muted">Sets the page loader visibility: hidden or visible.</p>
            <div class="row g-4">
                <div class="col-4">
                    <!-- VISIBLE -->
                    <input class="form-check-input d-none" data-attribute="data-page-loader" name="page-loader" value="visible" type="radio" id="page-loader-visible">
                    <label for="page-loader-visible" class="switcher-card w-100" data-page-loader="visible">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1 h-100">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 d-flex flex-column justify-content-center align-items-center gap-3">
                      <span id="status" class="d-flex align-items-center justify-content-center">
                        <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </span>
                      </span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Loader</span>
                    </label>
                </div>
                <div class="col-4">
                    <!-- HIDDEN -->
                    <input class="form-check-input d-none" data-attribute="data-page-loader" name="page-loader" value="hidden" type="radio" id="page-loader-hidden">
                    <label for="page-loader-hidden" class="switcher-card w-100" data-page-loader="hidden">
              <span class="border d-block rounded h-100px overflow-hidden">
                <span class="d-flex h-100">
                  <span class="w-30px d-flex flex-column h-100 flex-shrink-0 border-end">
                    <span class="h-16px flex-shrink-0 bg-light d-block"></span>
                    <span class="h-100 flex-grow-1 bg-primary-subtle d-flex flex-column justify-content-between p-1">
                      <span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                        <span class="h-6px bg-light rounded d-block mb-1"></span>
                      </span>
                      <span class="h-6px bg-light rounded d-block mb-1"></span>
                    </span>
                  </span>
                  <span class="d-flex flex-column flex-grow-1">
                    <span class="px-2 flex-shrink-0 h-16px border-bottom d-flex align-items-center gap-3 justify-content-between">
                      <span class="d-flex align-items-center gap-1">
                        <span class="w-8px h-8px bg-danger rounded-pill"></span>
                        <span class="w-8px h-8px bg-success rounded-pill"></span>
                        <span class="w-8px h-8px bg-warning rounded-pill"></span>
                      </span>
                      <span class="w-8px h-8px bg-light rounded-pill"></span>
                    </span>
                    <span class="h-100 flex-grow-1 d-flex flex-column justify-content-between gap-1">
                      <span class="p-2">
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-50 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-100 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-75 d-block bg-light rounded-1 h-6px mb-1"></span>
                        <span class="w-25 d-block bg-light rounded-1 h-6px mb-1"></span>
                      </span>
                      <span class="w-100 bg-light h-6px ms-1"></span>
                    </span>
                  </span>
                </span>
              </span>
                        <span class="d-block shadow-none fs-12 fw-semibold text-center pt-2">Disable</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="offcanvas-header border-top hstack gap-3 justify-content-center">
            <button type="button" id="resetSettings" class="btn btn-dark">Reset Layouts</button>
            <button type="button" class="btn btn-danger">Buy Now</button>
        </div>
    </div>
</div>
<!-- END SWITCHER -->


<!-- Begin scroll top -->
<div class="progress-wrap d-flex align-items-center justify-content-center cursor-pointer h-40px w-40px position-fixed" id="progress-scroll">
    <svg class="progress-circle w-100 h-100 position-absolute" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="45" class="progress" />
    </svg>
    <i class="ri-arrow-up-line fs-16 z-1 position-relative text-primary"></i>
</div>
<!-- END scroll top -->
@include('components.footer')

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/js/sidebar.js') }}"></script>
<script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/scroll-top.init.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- jQuery (CDN + Integrity + SRI) -->
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous">
</script>

<!-- DataTables Core + Extensions -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.3.0/js/dataTables.checkboxes.min.js"></script>

<!-- ApexCharts (local preferred) -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Chart configs -->
<script src="{{ asset('assets/js/charts/apexcharts-config.init.js') }}"></script>

<!-- Dashboard init (only keep the correct one) -->
<script src="{{ asset('assets/js/dashboards/dashboard-ecommerce.init.js') }}"></script>
<!-- OR -->
<!-- <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script> -->

<!-- App JS -->
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>
