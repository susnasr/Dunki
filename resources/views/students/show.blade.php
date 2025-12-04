@extends('layouts.app')

@section('content')

    <!-- PAGE HEADER -->
    <div class="hstack flex-wrap gap-3 mb-5">
        <div class="flex-grow-1">
            <h4 class="mb-1 fw-bold text-body">Profile Overview</h4>
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
        <div class="card-body p-4">

            {{-- Main Layout Container (Row with two columns) --}}
            <div class="row g-4">

                <!-- LEFT COLUMN: Avatar, Name, Role -->
                <div class="col-lg-3 col-md-4 text-center">
                    <div class="d-flex flex-column align-items-center">
                        {{-- Avatar --}}
                        <div class="avatar-item avatar-xl bg-body-tertiary rounded-circle p-1 border border-2 border-light shadow-sm mb-3">
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

                        {{-- Name and Role --}}
                        <h5 class="mb-0 fs-4 fw-bold text-body">{{ auth()->user()->name }}</h5>
                        <p class="text-body-secondary mb-0">{{ ucfirst(str_replace('_', ' ', auth()->user()->user_type)) }}</p>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Contact Details and Actions -->
                <div class="col-lg-9 col-md-8 border-start ps-md-4">

                    <h6 class="fw-bold text-body mb-3"><i class="ri-information-line me-1"></i> Contact & System Details</h6>

                    <!-- Information Badges (Grid Layout) -->
                    <div class="row g-3">

                        <div class="col-sm-6 col-md-4">
                            <label class="text-muted text-uppercase fw-bold fs-11 d-block mb-1">Email</label>
                            <div class="badge bg-body-tertiary text-body border px-3 py-2 fs-13">
                                <i class="ri-mail-line text-primary me-1 align-middle"></i> {{ auth()->user()->email }}
                            </div>
                        </div>

                        @if(auth()->user()->phone)
                            <div class="col-sm-6 col-md-4">
                                <label class="text-muted text-uppercase fw-bold fs-11 d-block mb-1">Phone</label>
                                <div class="badge bg-body-tertiary text-body border px-3 py-2 fs-13">
                                    <i class="ri-phone-line text-info me-1 align-middle"></i> {{ auth()->user()->phone }}
                                </div>
                            </div>
                        @endif

                        @if(auth()->user()->country)
                            <div class="col-sm-6 col-md-4">
                                <label class="text-muted text-uppercase fw-bold fs-11 d-block mb-1">Citizenship</label>
                                <div class="badge bg-body-tertiary text-body border px-3 py-2 fs-13">
                                    <i class="ri-flag-line text-danger me-1 align-middle"></i> {{ auth()->user()->country }}
                                </div>
                            </div>
                        @endif

                        @if(auth()->user()->location)
                            <div class="col-sm-6 col-md-4">
                                <label class="text-muted text-uppercase fw-bold fs-11 d-block mb-1">Current City</label>
                                <div class="badge bg-body-tertiary text-body border px-3 py-2 fs-13">
                                    <i class="ri-map-pin-line text-warning me-1 align-middle"></i> {{ auth()->user()->location }}
                                </div>
                            </div>
                        @endif

                        {{-- Member Since Data Point --}}
                        <div class="col-sm-6 col-md-4">
                            <label class="text-muted text-uppercase fw-bold fs-11 d-block mb-1">Member Since</label>
                            <h6 class="mb-0 fw-bold text-body fs-14">{{ auth()->user()->created_at->format('d M, Y') }}</h6>
                        </div>
                    </div>

                    <hr class="border-dashed my-4">

                    <!-- Action Buttons (Right Aligned) -->
                    <div class="hstack justify-content-end gap-2 flex-shrink-0">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary px-4 shadow-sm">
                            <i class="ri-edit-box-line me-1 align-middle"></i> Edit Profile
                        </a>

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

@endsection
