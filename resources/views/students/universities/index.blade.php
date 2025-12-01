@extends('layouts.app')

@section('content')

    <!-- 1. STUDENT HEADER (Search Only) -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-8">
            <h4 class="fw-bold text-primary">Find Universities 🎓</h4>
            <p class="text-muted mb-0">Search and apply to your dream study destination.</p>
        </div>
        <div class="col-md-4">
            <form action="{{ route('universities.index') }}" method="GET">
                <div class="input-group shadow-sm">
                    <input type="text" name="search" class="form-control border-end-0" placeholder="Search by Name or Country..." value="{{ request('search') }}">
                    <button class="btn btn-white border-start-0 border" type="submit">
                        <i class="ri-search-line text-muted"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- 2. STUDENT GRID (Cards, NOT Table) -->
    <div class="row g-4">
        @forelse($universities as $uni)
            <div class="col-xl-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="avatar-lg bg-light rounded p-2 d-flex align-items-center justify-content-center">
                                @if($uni->logo)
                                    <img src="{{ $uni->logo }}" class="img-fluid" style="max-height: 40px;" alt="logo">
                                @else
                                    <i class="ri-bank-line fs-1 text-primary-subtle"></i>
                                @endif
                            </div>
                            @if($uni->ranking)
                                <span class="badge bg-info-subtle text-info">
                                <i class="ri-trophy-line me-1"></i> #{{ $uni->ranking }}
                            </span>
                            @endif
                        </div>

                        <h5 class="fw-bold mb-1">{{ $uni->name }}</h5>
                        <p class="text-muted small mb-3">
                            <i class="ri-map-pin-line me-1"></i> {{ $uni->city }}, {{ $uni->country }}
                        </p>

                        <div class="row text-center border-top border-bottom py-2 my-3">
                            <div class="col-6 border-end">
                                <small class="text-muted text-uppercase fs-10">Avg. Fees</small>
                                <div class="fw-bold text-dark">${{ number_format($uni->tuition_fee) }}</div>
                            </div>
                            <div class="col-6">
                                <small class="text-muted text-uppercase fs-10">IELTS</small>
                                <div class="fw-bold {{ $uni->accepts_without_ielts ? 'text-success' : 'text-dark' }}">
                                    {{ $uni->accepts_without_ielts ? 'Optional' : 'Required' }}
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            {{-- APPLY BUTTON (Triggers Modal) --}}
                            <button type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#applyModal"
                                    data-uni-id="{{ $uni->id }}"
                                    data-uni-name="{{ $uni->name }}">
                                Apply Now <i class="ri-arrow-right-line ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h5 class="text-muted">No universities found matching your search.</h5>
            </div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $universities->links() }}
    </div>

    <!-- 3. APPLICATION MODAL -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('applications.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="university_id" id="modal_uni_id">

                    <div class="modal-header bg-light">
                        <h5 class="modal-title">Apply to <span id="modal_uni_name" class="fw-bold text-primary"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-4">
                        <div class="alert alert-info py-2 fs-13">
                            <i class="ri-information-line me-1"></i>
                            Your documents from the vault will be attached automatically.
                        </div>

                        <!-- Course Input -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Which Course are you interested in?</label>
                            <input type="text" name="course_name" class="form-control" placeholder="e.g. Bachelors in Computer Science" required>
                        </div>

                        <!-- Intake Selection -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Preferred Intake</label>
                            <select name="intake" class="form-select" required>
                                <option value="Spring 2025">Spring 2025</option>
                                <option value="Fall 2025">Fall 2025</option>
                                <option value="Spring 2026">Spring 2026</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var applyModal = document.getElementById('applyModal');
            applyModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var uniId = button.getAttribute('data-uni-id');
                var uniName = button.getAttribute('data-uni-name');

                document.getElementById('modal_uni_id').value = uniId;
                document.getElementById('modal_uni_name').textContent = uniName;
            });
        });
    </script>

    <style>
        .hover-lift:hover { transform: translateY(-5px); transition: transform 0.2s ease; }
    </style>

@endsection
