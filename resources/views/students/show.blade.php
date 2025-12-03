@extends('layouts.app')

@section('content')

    <!-- PAGE HEADER -->
    <div class="hstack flex-wrap gap-3 mb-5">
        <div class="flex-grow-1">
            <h4 class="mb-1 fw-bold text-dark">Profile Overview</h4>
            <nav>
                <ol class="breadcrumb breadcrumb-arrow mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- PROFILE CARD -->
    <div class="card border-0 shadow-sm">
        <div class="card-body pb-0">
            <div class="hstack align-items-start justify-content-center text-center gap-4 flex-wrap p-5">

                <!-- Avatar Section -->
                <div class="position-relative w-max">
                    <div class="d-flex align-items-center">
                        <div class="avatar-item avatar-xl bg-light rounded-circle p-1 border border-2 border-light shadow-sm">
                            @if(auth()->user()->profile_pic)
                                <img class="img-fluid rounded-circle" alt="{{ auth()->user()->name }}"
                                     src="{{ asset('storage/' . auth()->user()->profile_pic) }}"
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div class="avatar-title rounded-circle bg-primary text-white fs-1 fw-bold d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
                                    {{ substr(auth()->user()->name, 0, 1) }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Details Section -->
                <div class="flex-grow-1">
                    <div class="vstack gap-4 mb-4">
                        <div class="flex-grow-1">
                            <h4 class="mb-2 fs-3 fw-bold text-dark">{{ auth()->user()->name }}</h4>
                            <p class="text-muted mb-4">{{ ucfirst(str_replace('_', ' ', auth()->user()->user_type)) }}</p>

                            <div class="d-flex justify-content-center flex-wrap gap-3">
                                <div class="badge bg-light text-dark border px-3 py-2 fs-13">
                                    <i class="ri-mail-line text-primary me-1 align-middle"></i> {{ auth()->user()->email }}
                                </div>

                                @if(auth()->user()->phone)
                                    <div class="badge bg-light text-dark border px-3 py-2 fs-13">
                                        <i class="ri-phone-line text-info me-1 align-middle"></i> {{ auth()->user()->phone }}
                                    </div>
                                @endif

                                @if(auth()->user()->country)
                                    <div class="badge bg-light text-dark border px-3 py-2 fs-13">
                                        <i class="ri-flag-line text-danger me-1 align-middle"></i> {{ auth()->user()->country }}
                                    </div>
                                @endif

                                @if(auth()->user()->location)
                                    <div class="badge bg-light text-dark border px-3 py-2 fs-13">
                                        <i class="ri-map-pin-line text-warning me-1 align-middle"></i> {{ auth()->user()->location }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <hr class="border-dashed">

                        <!-- Action Buttons -->
                        <div class="hstack justify-content-center gap-2 flex-shrink-0">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary px-4 shadow-sm">
                                <i class="ri-edit-box-line me-1 align-middle"></i> Edit Profile
                            </a>

                            {{-- Shortcut to Documents for Students --}}
                            @if(auth()->user()->user_type == 'student')
                                <a href="{{ route('files.index') }}" class="btn btn-light border shadow-sm">
                                    <i class="ri-folder-shield-2-line me-1 align-middle"></i> My Documents
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Meta -->
        <div class="card-footer bg-light border-top py-3">
            <div class="row text-center">
                <div class="col">
                    <h6 class="mb-0 fw-bold text-dark">{{ auth()->user()->created_at->format('d M, Y') }}</h6>
                    <small class="text-muted text-uppercase fs-10">Member Since</small>
                </div>
            </div>
        </div>
    </div>

@endsection
