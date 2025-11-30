@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">Edit University</h5>
                    <a href="{{ route('admin.universities.index') }}" class="btn btn-sm btn-light">Back</a>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('admin.universities.update', $university->id) }}" method="POST">
                        @csrf
                        @method('PUT') <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-semibold">University Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $university->name }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Country</label>
                                <input type="text" name="country" class="form-control" value="{{ $university->country }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">City</label>
                                <input type="text" name="city" class="form-control" value="{{ $university->city }}" placeholder="e.g. London">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Ranking</label>
                                <input type="number" name="ranking" class="form-control" value="{{ $university->ranking }}" placeholder="e.g. 10">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Tuition Fee ($)</label>
                                <input type="number" name="tuition_fee" class="form-control" value="{{ $university->tuition_fee }}" placeholder="e.g. 25000">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">IELTS Required?</label>
                                <select name="accepts_without_ielts" class="form-select">
                                    <option value="0" {{ !$university->accepts_without_ielts ? 'selected' : '' }}>Yes (Required)</option>
                                    <option value="1" {{ $university->accepts_without_ielts ? 'selected' : '' }}>No (Optional)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Description / Website</label>
                                <textarea name="description" class="form-control" rows="3">{{ $university->description }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Logo URL</label>
                                <input type="text" name="logo" class="form-control" value="{{ $university->logo }}" placeholder="https://...">
                            </div>
                        </div>

                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="ri-save-line me-1"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
