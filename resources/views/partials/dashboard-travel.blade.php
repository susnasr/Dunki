<div class="card mb-4 border-info-subtle">
    <div class="card-body">
        <h4 class="fw-semibold mb-3 text-info">Welcome, {{ Auth::user()->name }} (Travel Agent)</h4>
        <p class="text-muted mb-3">Coordinate student travel bookings, accommodations, and post-visa logistics.</p>

        <div class="d-flex gap-2">
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-info btn-sm">
                <i class="ri-plane-line"></i> Manage Travel Tasks
            </a>
            <a href="{{ route('applications.index') }}" class="btn btn-outline-primary btn-sm">
                <i class="ri-map-pin-line"></i> Linked Applications
            </a>
        </div>
    </div>
</div>
