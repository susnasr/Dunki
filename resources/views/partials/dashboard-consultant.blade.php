<div class="card mb-4 border-warning-subtle">
    <div class="card-body">
        <h4 class="fw-semibold mb-3 text-warning">Welcome, {{ Auth::user()->name }} (Visa Consultant)</h4>
        <p class="text-muted mb-3">Assist students with visa documentation and ensure compliance with embassy requirements.</p>

        <div class="d-flex gap-2">
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-warning btn-sm">
                <i class="ri-briefcase-line"></i> Assigned Tasks
            </a>
            <a href="{{ route('applications.index') }}" class="btn btn-outline-primary btn-sm">
                <i class="ri-passport-line"></i> Visa Applications
            </a>
        </div>
    </div>
</div>
