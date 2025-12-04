@extends('layouts.app')

@section('content')

    <div class="row mb-4 align-items-end">
        <div class="col-md-8">
            <h4 class="fw-bold text-dark">Visa Processing Center ✈️</h4>
            <p class="text-muted mb-0">Manage visa filings and embassy appointments.</p>
        </div>
    </div>

    <!-- 1. NEW ARRIVALS (Approved by Academic Team) -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-success-subtle py-3">
            <h6 class="card-title mb-0 text-success fw-bold">
                <i class="ri-user-received-line me-1"></i> New Cases (Ready for Visa)
            </h6>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th class="ps-4">App ID</th>
                        <th>Student</th>
                        <th>University & Country</th>
                        <th>Admitted Date</th>
                        <th class="text-end pe-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($newVisaCases as $app)
                        <tr>
                            <td class="ps-4 fw-medium">#{{ $app->application_number }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs bg-primary-subtle rounded-circle me-2 d-flex align-items-center justify-content-center">
                                        <span class="fw-bold text-primary">{{ substr($app->clientProfile->user->name, 0, 1) }}</span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fs-13 text-dark">{{ $app->clientProfile->user->name }}</h6>
                                        <small class="text-muted">{{ $app->clientProfile->user->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold text-dark">{{ $app->university_name }}</span>
                                    <span class="badge bg-light text-dark border w-max mt-1">
                                        <i class="ri-flag-line me-1"></i> {{ $app->destination_country }}
                                    </span>
                                </div>
                            </td>
                            <td class="text-muted">{{ $app->updated_at->format('d M, Y') }}</td>
                            <td class="text-end pe-4">
                                {{-- Start Process Button --}}
                                <form action="{{ route('visa.start', $app->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-dark shadow-sm">
                                        Start Filing <i class="ri-arrow-right-line ms-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="avatar-lg bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                    <i class="ri-passport-line fs-1 text-muted"></i>
                                </div>
                                <h5 class="text-muted">No new cases.</h5>
                                <p class="text-muted small">Waiting for Academic Advisors to approve students.</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- 2. ONGOING PROCESSING (Placeholder for next step) -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h6 class="card-title mb-0 text-dark">Processing Queue</h6>
        </div>
        <div class="card-body text-center py-5">
            <p class="text-muted">Active visa applications will appear here once started.</p>
        </div>
    </div>

@endsection
