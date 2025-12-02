@extends('layouts.app')

@section('content')

    <!-- PAGE HEADER -->
    <div class="hstack flex-wrap gap-3 mb-5">
        <div class="flex-grow-1">
            <h4 class="mb-1 fw-bold text-dark">Document Vault</h4>
            <nav>
                <ol class="breadcrumb breadcrumb-arrow mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documents</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto align-items-center flex-wrap flex-shrink-0">
            <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">
                <i class="ri-upload-cloud-2-line me-1 align-middle"></i> Upload New Document
            </button>
        </div>
    </div>

    <div class="row g-5 file-manager">

        <!-- SIDEBAR: STATS -->
        <div class="col-lg-4 col-xl-3">
            <div class="file-manager-sidebar">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom p-3">
                        <h5 class="card-title mb-0 fw-bold">My Profile</h5>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3 border-bottom border-block-end-dashed">
                        <div class="avatar-item">
                            <img class="img-fluid avatar-lg rounded-circle"
                                 src="{{ auth()->user()->profile_pic ? asset('storage/' . auth()->user()->profile_pic) : asset('assets/images/users/avatar-1.jpg') }}"
                                 alt="avatar">
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">{{ auth()->user()->name }}</h6>
                            <p class="mb-0 fs-12 text-muted">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group list-group-flush">
                            <!-- TOTAL -->
                            <li class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <span class="fw-medium text-dark"><i class="ri-folder-open-line me-2 text-primary"></i> Total Files</span>
                                <span class="badge bg-primary-subtle text-primary rounded-pill">{{ $files->count() }}</span>
                            </li>
                            <!-- VERIFIED -->
                            <li class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <span class="fw-medium text-dark"><i class="ri-checkbox-circle-line me-2 text-success"></i> Verified</span>
                                <span class="badge bg-success-subtle text-success rounded-pill">{{ $files->where('status', 'verified')->count() }}</span>
                            </li>
                            <!-- REJECTED -->
                            <li class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <span class="fw-medium text-dark"><i class="ri-close-circle-line me-2 text-danger"></i> Rejected</span>
                                <span class="badge bg-danger-subtle text-danger rounded-pill">{{ $files->where('status', 'rejected')->count() }}</span>
                            </li>
                            <!-- PENDING -->
                            <li class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <span class="fw-medium text-dark"><i class="ri-time-line me-2 text-warning"></i> Pending</span>
                                <span class="badge bg-warning-subtle text-warning rounded-pill">{{ $files->where('status', 'pending')->count() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN: FILE GRID -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="card-title mb-0 fw-bold">Uploaded Files</h5>
                </div>
                <div class="card-body p-4">

                    <!-- ALERTS -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <i class="ri-check-double-line me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger shadow-sm">
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- FILES ROW -->
                    <div class="row g-4">
                        @forelse($files as $file)
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                {{--
                                    ✅ VISUAL CUE:
                                    If Rejected, add a Red Border so the student notices instantly.
                                --}}
                                <div class="card shadow-none h-100 {{ $file->status == 'rejected' ? 'border border-danger border-2' : 'bg-light border border-light' }}">

                                    <div class="card-body text-center p-4">
                                        <!-- Dynamic Icon -->
                                        @php
                                            $icon = match($file->file_type) {
                                                'passport' => 'ri-passport-line text-primary',
                                                'transcript' => 'ri-book-open-line text-info',
                                                'photo' => 'ri-image-line text-success',
                                                'cv' => 'ri-file-user-line text-warning',
                                                'ielts' => 'ri-global-line text-danger',
                                                default => 'ri-file-text-line text-secondary'
                                            };
                                        @endphp

                                        <div class="avatar-md bg-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow-sm">
                                            <i class="{{ $icon }} fs-2"></i>
                                        </div>

                                        <h6 class="fw-semibold text-truncate mb-1" title="{{ $file->original_name }}">
                                            {{ $file->original_name }}
                                        </h6>
                                        <p class="text-muted fs-12 mb-3">
                                            {{ ucwords(str_replace('_', ' ', $file->file_type)) }} •
                                            {{ number_format($file->file_size / 1024, 1) }} KB
                                        </p>

                                        <!-- Status Badge -->
                                        <div>
                                            @if($file->status === 'verified')
                                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill">Verified</span>
                                            @elseif($file->status === 'rejected')
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-1 rounded-pill">Rejected</span>
                                            @else
                                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-3 py-1 rounded-pill">Pending</span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- View Link -->
                                    <div class="card-footer bg-transparent border-top text-center py-2">
                                        <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="btn btn-link btn-sm text-decoration-none fw-medium">
                                            View Document <i class="ri-arrow-right-up-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <div class="avatar-lg bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-add-line fs-1 text-muted"></i>
                                </div>
                                <h5 class="text-muted">Your vault is empty!</h5>
                                <p class="text-muted small">Upload your passport and transcripts to get started.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ UPLOAD MODAL -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data" class="modal-content border-0 shadow">
                @csrf
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="uploadModalLabel">Upload Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Document Type <span class="text-danger">*</span></label>
                        <select name="file_type" class="form-select" required>
                            <option value="" selected disabled>Select document type...</option>
                            <option value="passport">Passport Front Page</option>
                            <option value="transcript">Academic Transcript</option>
                            <option value="photo">Passport Size Photo</option>
                            <option value="cv">CV / Resume</option>
                            <option value="sop">Statement of Purpose (SOP)</option>
                            <option value="ielts">IELTS / English Test</option>
                            <option value="financial_proof">Bank Statement</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select File <span class="text-danger">*</span></label>
                        <input type="file" name="file" class="form-control" required>
                        <div class="form-text text-muted mt-2">
                            <i class="ri-information-line me-1"></i> Max size: 5MB. Formats: PDF, JPG, PNG.
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary px-4">Upload Now</button>
                </div>
            </form>
        </div>
    </div>

@endsection
