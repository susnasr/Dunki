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

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-danger-subtle text-danger py-3 border-bottom border-danger-subtle">
                    <h5 class="card-title mb-0 fs-16"><i class="ri-error-warning-line me-1 align-middle"></i> Action Required</h5>
                </div>
                <div class="card-body p-4">

                    <!-- Feedback Section -->
                    <div class="alert alert-warning border-warning border-opacity-25 bg-warning-subtle text-warning-emphasis mb-4">
                        <h6 class="fw-bold mb-1"><i class="ri-chat-quote-line me-1"></i> Advisor Feedback:</h6>
                        <p class="mb-0">{{ $application->notes ?? 'No specific feedback provided. Please check your details.' }}</p>
                    </div>

                    <hr class="border-dashed my-4">

                    <!-- Edit Form -->
                    <form action="{{ route('applications.update', $application->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="form-label fw-bold text-muted text-uppercase fs-11">University</label>
                            <input type="text" class="form-control bg-light" value="{{ $application->university_name }}" readonly>
                            <div class="form-text">You cannot change the university for this application. To apply elsewhere, start a new application.</div>
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

                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                <i class="ri-send-plane-fill me-2"></i> Update & Resubmit Application
                            </button>
                            <small class="text-center text-muted mt-2">
                                This will send the application back to your advisor for review.
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
