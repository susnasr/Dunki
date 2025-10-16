<div class="card mb-4">
    <div class="card-body">
        <h4 class="fw-semibold mb-3">Welcome, {{ Auth::user()->name }} (Student)</h4>
        <p class="text-muted mb-4">You can create, view, and track your study abroad applications here.</p>

        <div class="d-flex gap-2">
            <a href="{{ route('applications.create') }}" class="btn btn-primary btn-sm">
                <i class="ri-add-line"></i> New Application
            </a>
            <a href="{{ route('applications.index') }}" class="btn btn-light btn-sm">
                <i class="ri-file-list-line"></i> My Applications
            </a>
            <a href="{{ route('files.index') }}" class="btn btn-light btn-sm">
                <i class="ri-upload-line"></i> Upload Documents
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><h5 class="mb-0">Recent Applications</h5></div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
            <tr><th>ID</th><th>Title</th><th>Status</th><th>Date</th></tr>
            </thead>
            <tbody>
            @forelse($recentApplications as $app)
                <tr>
                    <td>#A{{ $app->id }}</td>
                    <td>{{ $app->title ?? 'Untitled' }}</td>
                    <td><span class="badge bg-success">{{ ucfirst($app->status ?? 'pending') }}</span></td>
                    <td>{{ $app->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center text-muted">No applications yet</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
