<div class="card mb-4 border-primary-subtle">
    <div class="card-body">
        <h4 class="fw-semibold mb-3 text-primary">Welcome, {{ Auth::user()->name }} (Academic Advisor)</h4>
        <p class="text-muted mb-3">Guide students in course selection and academic document verification.</p>

        <div class="d-flex gap-2">
            <a href="{{ route('applications.index') }}" class="btn btn-outline-primary btn-sm">
                <i class="ri-book-open-line"></i> View Student Applications
            </a>
            <a href="{{ route('files.index') }}" class="btn btn-outline-success btn-sm">
                <i class="ri-file-search-line"></i> Review Uploaded Files
            </a>
        </div>
    </div>
</div>
