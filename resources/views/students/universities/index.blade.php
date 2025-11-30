@extends('layouts.app')

@section('content')

    <div class="row mb-4 align-items-end">
        <div class="col-md-8">
            <h4 class="fw-bold text-primary">Find Your Future</h4>
            <p class="text-muted">Browse top universities and start your application journey today.</p>
        </div>
        <div class="col-md-4">
            <form action="{{ route('universities.index') }}" method="GET">
                <div class="input-group shadow-sm">
                    <span class="input-group-text bg-white border-end-0"><i class="ri-search-line text-muted"></i></span>
                    <input type="text" name="search" class="form-control border-start-0 ps-0" placeholder="Search by name or country..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-4">
        @forelse($universities as $uni)
            <div class="col-xl-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-lift transition-all">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="avatar-lg bg-light rounded p-2 d-flex align-items-center justify-content-center">
                                @if($uni->logo)
                                    <img src="{{ asset($uni->logo) }}" class="img-fluid" alt="logo">
                                @else
                                    <i class="ri-bank-line fs-1 text-primary-subtle"></i>
                                @endif
                            </div>
                            @if($uni->ranking)
                                <span class="badge bg-info-subtle text-info">
                                <i class="ri-trophy-line me-1"></i> Rank #{{ $uni->ranking }}
                            </span>
                            @endif
                        </div>

                        <h5 class="fw-bold mb-1">{{ $uni->name }}</h5>
                        <p class="text-muted small mb-3">
                            <i class="ri-map-pin-line me-1"></i> {{ $uni->city }}, {{ $uni->country }}
                        </p>

                        <hr class="border-dashed my-3">

                        <div class="row text-center">
                            <div class="col-6 border-end">
                                <small class="text-muted d-block text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Avg. Fees</small>
                                <span class="fw-bold text-dark">${{ number_format($uni->tuition_fee ?? 0) }}</span>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block text-uppercase" style="font-size: 10px; letter-spacing: 1px;">IELTS</small>
                                <span class="fw-bold {{ $uni->accepts_without_ielts ? 'text-success' : 'text-dark' }}">
                                {{ $uni->accepts_without_ielts ? 'Optional' : 'Required' }}
                            </span>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            {{--
                               This button will trigger the Application Logic.
                               We pass the University ID to the route.
                            --}}
                            <form action="{{ route('applications.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="university_id" value="{{ $uni->id }}">
                                <input type="hidden" name="type" value="university_application">

                                <button type="submit" class="btn btn-primary w-100">
                                    Apply Now <i class="ri-arrow-right-line ms-1"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="mb-3">
                    <i class="ri-search-eye-line fs-1 text-muted opacity-50"></i>
                </div>
                <h5>No universities found.</h5>
                <p class="text-muted">Try adjusting your search terms.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $universities->links() }}
    </div>

    <style>
        /* Simple hover effect for cards */
        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.2s ease;
        }
    </style>

@endsection
