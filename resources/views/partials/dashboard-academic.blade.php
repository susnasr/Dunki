@extends('layouts.app')

@section('content')

    <div class="row mb-4 align-items-end">
        <div class="col-md-12">
            <h4 class="fw-bold text-dark">Advisor Workspace</h4>
            <p class="text-muted mb-0">Review student applications and guide them to their dream university.</p>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm border-start border-4 border-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Pending Review</p>
                            <h3 class="mb-0 fw-bold">{{ $pendingReview ?? 0 }}</h3>
                        </div>
                        <div class="avatar-sm bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center">
                            <i class="ri-time-line fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm border-start border-4 border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Assigned Students</p>
                            <h3 class="mb-0 fw-bold">{{ $myStudents ?? 0 }}</h3>
                        </div>
                        <div class="avatar-sm bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center">
                            <i class="ri-group-line fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm border-start border-4 border-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Offers Secured</p>
                            <h3 class="mb-0 fw-bold">8</h3> </div>
                        <div class="avatar-sm bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center">
                            <i class="ri-trophy-line fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">All Applications</h5>
            <button class="btn btn-sm btn-light"><i class="ri-filter-3-line"></i> Filter</button>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th class="ps-4">App ID</th>
                        <th>Student Name</th>
                        <th>Target University</th>
                        <th>Applied On</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($applications as $app)
                        <tr>
                            <td class="ps-4 text-primary fw-medium">#{{ $app->application_number }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                                        <span class="fs-10">{{ substr($app->clientProfile->user->name ?? 'U', 0, 1) }}</span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fs-13">{{ $app->clientProfile->user->name ?? 'Unknown' }}</h6>
                                        <small class="text-muted">{{ $app->clientProfile->user->email ?? '' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="fw-semibold text-dark">{{ $app->university_name }}</span>
                                <small class="d-block text-muted">{{ $app->destination_country }}</small>
                            </td>
                            <td>{{ $app->created_at->format('d M, Y') }}</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle">
                                    {{ ucfirst($app->status) }}
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                {{-- We will build this 'Review' page next --}}
                                <a href="{{ route('applications.show', $app->id) }}" class="btn btn-sm btn-primary">
                                    Review <i class="ri-arrow-right-line ms-1"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <div class="avatar-lg bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                    <i class="ri-inbox-line fs-1 text-muted"></i>
                                </div>
                                <h5 class="text-muted">All caught up!</h5>
                                <p class="text-muted small">No new applications pending review.</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
