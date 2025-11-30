@extends('layouts.app')

@section('content')

    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h4 class="fw-bold text-dark">University Management 🏛️</h4>
            <p class="text-muted mb-0">Manage your database of universities and courses.</p>
        </div>
        <div class="col-md-6 text-md-end gap-2 d-flex justify-content-md-end">
            <a href="#!" class="btn btn-light border">
                <i class="ri-add-line align-middle"></i> Add Manual
            </a>
            <a href="{{ route('admin.universities.import') }}" class="btn btn-dark">
                <i class="ri-cloud-download-line align-middle me-1"></i> Import via API
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>University Name</th>
                        <th>Location</th>
                        <th>Ranking</th>
                        <th>Fees (Avg)</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($universities as $uni)
                        <tr>
                            <td class="ps-4 text-muted">#{{ $uni->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-light rounded p-1 me-3 d-flex align-items-center justify-content-center">
                                        @if($uni->logo)
                                            <img src="{{ $uni->logo }}" class="img-fluid" style="max-height: 20px;">
                                        @else
                                            <i class="ri-bank-line text-muted"></i>
                                        @endif
                                    </div>
                                    <span class="fw-semibold text-dark">{{ $uni->name }}</span>
                                </div>
                            </td>
                            <td>{{ $uni->city }}, {{ $uni->country }}</td>
                            <td>
                                @if($uni->ranking)
                                    <span class="badge bg-info-subtle text-info">#{{ $uni->ranking }}</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>${{ number_format($uni->tuition_fee) }}</td>
                            <td class="text-end pe-4">
                                <a href="#!" class="btn btn-sm btn-light"><i class="ri-pencil-line"></i></a>
                                <button class="btn btn-sm btn-light text-danger"><i class="ri-delete-bin-line"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <i class="ri-inbox-line fs-1 text-muted"></i>
                                <p class="text-muted mt-2">No universities found.</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white py-3">
            {{ $universities->links() }}
        </div>
    </div>

@endsection
