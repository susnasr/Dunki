<div class="card mb-4 border-success-subtle">
    <div class="card-body">
        <h4 class="fw-semibold mb-3 text-success">Welcome, {{ Auth::user()->name }} (HR)</h4>
        <p class="text-muted mb-3">Manage tasks and review student applications for internal approval.</p>

        <div class="d-flex gap-2">
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-success btn-sm">
                <i class="ri-task-line"></i> Manage Tasks
            </a>
            <a href="{{ route('hr.applications.index') }}" class="btn btn-outline-primary btn-sm">
                <i class="ri-file-list-2-line"></i> Review Applications
            </a>
        </div>
    </div>
</div>
