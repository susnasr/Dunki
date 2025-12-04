<!-- START FOOTER -->
<footer class="footer mt-auto py-4 bg-body border-top border-light shadow-sm position-relative overflow-hidden">
    <!-- Optional: Subtle Background Decoration -->
    {{-- FIX: Using bg-body-tertiary for the subtle background which adapts to dark/light mode --}}
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary opacity-25" style="pointer-events: none;"></div>

    <div class="container-fluid position-relative z-1">
        <div class="row align-items-center gy-3">

            <!-- Left: Empty Spacer to Balance Layout -->
            <div class="col-md-4 d-none d-md-block"></div>

            <!-- Center: Copyright & Branding (Lavish & Authentic) -->
            <div class="col-md-4 text-center">
                {{-- FIX: Using adaptive classes for the background and text --}}
                <div class="d-inline-block px-4 py-2 rounded-pill bg-body-tertiary bg-opacity-50 border border-body-tertiary shadow-sm">
                    <p class="mb-0 text-body-secondary fs-13 fw-medium text-nowrap">
                        <span class="text-body fw-bold">&copy; {{ date('Y') }} Dunki.</span>
                        <span class="mx-2 text-secondary opacity-50">|</span>
                        Crafted with <i class="ri-heart-3-fill text-danger align-middle fs-15 animate-pulse mx-1"></i> by
                        <a href="#!" class="text-primary fw-bold text-decoration-none hover-underline position-relative">
                            @nsr
                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle" style="width: 6px; height: 6px;"></span>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Right: Navigation Links -->
            <div class="col-md-4">
                <div class="d-flex justify-content-center justify-content-md-end gap-4">
                    {{-- FIX: All links use adaptive text-body-secondary for visibility --}}
                    <a href="javascript:void(0);" class="text-body-secondary text-decoration-none fs-13 fw-medium hover-text-primary transition-all d-flex align-items-center gap-1">
                        <i class="ri-information-line fs-14"></i> About Us
                    </a>
                    <a href="javascript:void(0);" class="text-body-secondary text-decoration-none fs-13 fw-medium hover-text-primary transition-all d-flex align-items-center gap-1">
                        <i class="ri-shield-keyhole-line fs-14"></i> Privacy
                    </a>
                    <a href="javascript:void(0);" class="text-body-secondary text-decoration-none fs-13 fw-medium hover-text-primary transition-all d-flex align-items-center gap-1">
                        <i class="ri-customer-service-2-line fs-14"></i> Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS for Footer Animations (Keep for visual effects) -->
<style>
    .hover-text-primary:hover {
        color: var(--bs-primary) !important;
        transform: translateY(-1px);
    }
    .transition-all {
        transition: all 0.3s ease;
    }
    .animate-pulse {
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
    .hover-underline:hover {
        text-decoration: underline !important;
    }
</style>
<!-- END FOOTER -->
