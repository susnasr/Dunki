@extends('layouts.app')

@section('content')

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Application Details</h4>
            <p class="text-muted mb-0">ID: <span class="fw-medium text-dark">#{{ $application->application_number }}</span></p>
        </div>
        <div>
            {{-- Smart Back Button: Sends Advisor to Workspace, Student to Dashboard --}}
            @if(Auth::user()->user_type == 'academic_advisor')
                <a href="{{ route('academic.dashboard') }}" class="btn btn-white border shadow-sm">
                    <i class="ri-arrow-left-line me-1"></i> Back to Queue
                </a>
            @else
                <a href="{{ route('applications.index') }}" class="btn btn-white border shadow-sm">
                    <i class="ri-arrow-left-line me-1"></i> Back to List
                </a>
            @endif
        </div>
    </div>

    <div class="row">
        <!-- LEFT COLUMN: MAIN INFO -->
        <div class="col-lg-8">

            <!-- 1. University Info -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <div class="avatar-md bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center me-3">
                            <i class="ri-bank-line fs-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-1">{{ $application->university_name }}</h5>
                            <p class="text-muted mb-2"><i class="ri-map-pin-line me-1"></i> {{ $application->destination_country }}</p>

                            <div class="hstack gap-3 mt-3">
                                <div class="border-end pe-3">
                                    <small class="text-muted d-block">Course</small>
                                    <span class="fw-medium">{{ $application->course_name ?? 'General Admission' }}</span>
                                </div>
                                <div class="border-end pe-3">
                                    <small class="text-muted d-block">Intake</small>
                                    <span class="fw-medium">{{ $application->intake ?? 'Fall 2025' }}</span>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Type</small>
                                    <span class="fw-medium">{{ ucwords(str_replace('_', ' ', $application->type)) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Applicant Info (Visible to Advisor) -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3 border-bottom">
                    <h6 class="card-title mb-0">Applicant Information</h6>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <small class="text-muted text-uppercase fw-bold fs-11">Full Name</small>
                            <p class="fw-medium mb-0">{{ $application->clientProfile->user->name ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted text-uppercase fw-bold fs-11">Email Address</small>
                            <p class="fw-medium mb-0">{{ $application->clientProfile->user->email ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted text-uppercase fw-bold fs-11">Phone Number</small>
                            <p class="fw-medium mb-0">{{ $application->clientProfile->user->phone ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted text-uppercase fw-bold fs-11">Citizenship</small>
                            <p class="fw-medium mb-0">{{ $application->clientProfile->user->country ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Documents -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 border-bottom">
                    <h6 class="card-title mb-0">Attached Documents</h6>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="bg-light">
                            <tr>
                                <th class="ps-4">File Name</th>
                                <th>Type</th>
                                <th class="text-end pe-4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                // Fetch files belonging to the student
                                $files = \App\Models\File::where('uploaded_by', $application->clientProfile->user_id)->get();
                            @endphp

                            @forelse($files as $file)
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <i class="ri-file-text-line fs-4 text-primary me-2"></i>
                                            <span class="fw-medium">{{ $file->original_name }}</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark border">{{ strtoupper($file->file_type) }}</span></td>
                                    <td class="text-end pe-4">
                                        <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="btn btn-sm btn-soft-primary">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4 text-muted">No documents found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- RIGHT COLUMN: STATUS & TIMELINE -->
        <div class="col-lg-4">

            {{--
                ✅ DYNAMIC STATUS BANNER logic
                Changing colors based on decision
            --}}
            @php
                $statusColor = match($application->status) {
                    'approved' => 'bg-success text-white',
                    'rejected' => 'bg-danger text-white',
                    default => 'bg-primary text-white' // submitted or under_review
                };
            @endphp

                <!-- Status Card -->
            <div class="card border-0 shadow-sm mb-4 {{ $statusColor }}">
                <div class="card-body p-4">
                    <h6 class="text-white-50 text-uppercase fs-11 fw-bold mb-2">Current Status</h6>
                    <div class="d-flex align-items-center mb-3">
                        <i class="ri-loader-4-line fs-3 me-2 {{ $application->status == 'under_review' ? 'spin' : '' }}"></i>
                        <h2 class="mb-0 fw-bold">{{ ucwords(str_replace('_', ' ', $application->status)) }}</h2>
                    </div>

                    @if($application->status == 'submitted')
                        <p class="mb-0 small text-white-50">Your application has been received and is waiting for an advisor to review it.</p>
                    @elseif($application->status == 'approved')
                        <p class="mb-0 small text-white-50">Congratulations! Your application has been approved. Proceed to Visa steps.</p>
                    @elseif($application->status == 'rejected')
                        <p class="mb-0 small text-white-50">Please check the notes below for why your application was returned.</p>
                    @endif
                </div>
            </div>

            <!-- Notes / Feedback (If Rejected) -->
            @if($application->notes)
                <div class="card border-0 shadow-sm mb-4 border-start border-4 border-danger">
                    <div class="card-body">
                        <h6 class="fw-bold text-danger mb-2">Advisor Feedback</h6>
                        <p class="text-muted mb-0">{{ $application->notes }}</p>
                    </div>
                </div>
            @endif

            {{-- ================================================= --}}
            {{-- 🛡️ ADVISOR ACTION ZONE (Only for Staff) --}}
            {{-- HIDDEN if already approved or rejected --}}
            {{-- ================================================= --}}
            @if(in_array(Auth::user()->user_type, ['academic_advisor', 'admin']) && !in_array($application->status, ['approved', 'rejected']))
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h6 class="card-title mb-0">Advisor Actions</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <!-- Approve -->
                            <form action="{{ route('applications.updateStatus', $application->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="status" value="approved">
                                <button class="btn btn-success w-100">
                                    <i class="ri-check-double-line me-1"></i> Approve & Process
                                </button>
                            </form>

                            <!-- Reject -->
                            <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#rejectReason">
                                <i class="ri-close-line me-1"></i> Reject / Request Info
                            </button>

                            <div class="collapse mt-2" id="rejectReason">
                                <form action="{{ route('applications.updateStatus', $application->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="rejected">
                                    <textarea name="reason" class="form-control mb-2" rows="3" placeholder="Reason for rejection..." required></textarea>
                                    <button class="btn btn-danger btn-sm w-100">Confirm Rejection</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <style>
        /* Spin animation for loading icons */
        .spin { animation: spin 2s linear infinite; }
        @keyframes spin { 100% { transform: rotate(360deg); } }
    </style>

@endsection
