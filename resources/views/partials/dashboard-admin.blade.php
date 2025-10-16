<div class="card mb-4 border-danger-subtle">
    <div class="card-body">
        <h4 class="fw-semibold mb-3 text-danger">Welcome, {{ Auth::user()->name }} (Administrator)</h4>
        <p class="text-muted mb-3">Monitor all system activities, manage users, and review overall performance.</p>

        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('students.index') }}" class="btn btn-outline-danger btn-sm">
                <i class="ri-group-line"></i> Manage Users
            </a>
            <a href="{{ route('applications.index') }}" class="btn btn-outline-primary btn-sm">
                <i class="ri-file-list-3-line"></i> All Applications
            </a>
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-success btn-sm">
                <i class="ri-task-line"></i> All Tasks
            </a>
        </div>
    </div>
</div>

<div class="alert alert-light border-start border-4 border-danger mt-3">
    <strong>System Summary:</strong> {{ $totalStudents }} students, {{ $totalApplications }} applications, and {{ $totalCompletedTasks }} completed tasks.
</div>
