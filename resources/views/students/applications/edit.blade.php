@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Header -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('applications.show', $application->id) }}" class="btn btn-light btn-sm me-3 shadow-sm border">
                    <i class="ri-arrow-left-line"></i> Back
                </a>
                <h4 class="fw-bold mb-0">Resubmit Application 📝</h4>
            </div>

            <!-- MAIN FORM -->
            <form action="{{ route('applications.update', $application->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- 1. FEEDBACK SECTION (Why was it rejected?) -->
                <div class="card border-0 shadow-sm mb-4 border-start border-4 border-warning">
                    <div class="card-header bg-warning-subtle text-warning-emphasis py-3">
                        <h5 class="card-title mb-0 fs-16"><i class="ri-chat-quote-line me-1 align-middle"></i> Advisor Feedback</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0 fw-medium">{{ $application->notes ?? 'Please review your application details and resubmit.' }}</p>
                    </div>
                </div>

                <!-- 2. APPLICANT DETAILS (ReadOnly with Link) -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0">Applicant Information</h6>
                        <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-soft-primary">
                            <i class="ri-edit-box-line me-1"></i> Update Profile
                        </a>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="small text-muted text-uppercase fw-bold">Full Name</label>
                                <p class="fw-medium mb-0">{{ $application->clientProfile->user->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-muted text-uppercase fw-bold">Email</label>
                                <p class="fw-medium mb-0">{{ $application->clientProfile->user->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-muted text-uppercase fw-bold">Phone</label>
                                <p class="fw-medium mb-0">{{ $application->clientProfile->user->phone ?? 'N/A' }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-muted text-uppercase fw-bold">Citizenship</label>
                                <p class="fw-medium mb-0">{{ $application->clientProfile->user->country ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="form-text mt-2"><i class="ri-information-line"></i> If these details are incorrect, click "Update Profile" above.</div>
                    </div>
                </div>

                <!-- 3. DOCUMENTS (ReadOnly with Link) -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0">Attached Documents</h6>
                        <a href="{{ route('files.index') }}" class="btn btn-sm btn-soft-primary">
                            <i class="ri-folder-open-line me-1"></i> Manage Documents
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm align-middle mb-0 table-borderless table-striped">
                                <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Document Type</th>
                                    <th class="text-end pe-3">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $files = \App\Models\File::where('uploaded_by', $application->clientProfile->user_id)->get();
                                @endphp
                                @forelse($files as $file)
                                    <tr>
                                        <td class="ps-3">
                                            <i class="ri-file-text-line text-muted me-1"></i> {{ strtoupper($file->file_type) }}
                                        </td>
                                        <td class="text-end pe-3">
                                            @if($file->status == 'verified')
                                                <span class="text-success small fw-bold"><i class="ri-check-line"></i> Verified</span>
                                            @elseif($file->status == 'rejected')
                                                <span class="text-danger small fw-bold"><i class="ri-close-line"></i> Rejected</span>
                                            @else
                                                <span class="text-warning small fw-bold"><i class="ri-time-line"></i> Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="2" class="text-center text-muted py-2">No documents uploaded.</td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 4. APPLICATION DETAILS (Editable) -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white py-3 border-bottom">
                        <h6 class="card-title mb-0">Application Details</h6>
                    </div>
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <label class="form-label fw-bold text-muted text-uppercase fs-11">Target University</label>
                            <input type="text" class="form-control bg-light" value="{{ $application->university_name }}" readonly>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Course Name <span class="text-danger">*</span></label>
                                <input type="text" name="course_name"
                                       class="form-control @error('course_name') is-invalid @enderror"
                                       value="{{ old('course_name', $application->course_name) }}"
                                       placeholder="e.g. Bachelors in Computer Science" required>
                                @error('course_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Intake <span class="text-danger">*</span></label>
                                <select name="intake" class="form-select @error('intake') is-invalid @enderror" required>
                                    <option value="" disabled>Select Intake</option>
                                    <option value="Spring 2025" {{ old('intake', $application->intake) == 'Spring 2025' ? 'selected' : '' }}>Spring 2025</option>
                                    <option value="Fall 2025" {{ old('intake', $application->intake) == 'Fall 2025' ? 'selected' : '' }}>Fall 2025</option>
                                    <option value="Spring 2026" {{ old('intake', $application->intake) == 'Spring 2026' ? 'selected' : '' }}>Spring 2026</option>
                                </select>
                                @error('intake')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <!-- SUBMIT BUTTON -->
                    <div class="card-footer bg-white py-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                <i class="ri-send-plane-fill me-2"></i> Confirm & Resubmit Application
                            </button>
                            <small class="text-center text-muted mt-2">
                                This will send the application back to your advisor for review.
                            </small>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
