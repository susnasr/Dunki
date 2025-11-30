@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="fw-bold mb-1">Import Universities 🌍</h4>
                    <p class="text-muted">Search the global database and add universities instantly.</p>
                </div>
                <a href="{{ route('admin.universities.index') }}" class="btn btn-light">Back to List</a>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <form action="{{ route('admin.universities.search') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control form-control-lg"
                                   placeholder="e.g. Harvard, Oxford, Berlin..."
                                   value="{{ $search ?? '' }}" required>
                        </div>
                        <div class="col-md-3 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="ri-search-cloud-line me-1"></i> Search API
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @if(isset($results))
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Found {{ count($results) }} results for "{{ $search }}"</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">Name</th>
                                    <th>Country</th>
                                    <th>Website</th>
                                    <th class="text-end pe-4">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($results as $item)
                                    <tr>
                                        <td class="ps-4 fw-semibold">{{ $item['name'] }}</td>
                                        <td>{{ $item['country'] }}</td>
                                        <td>
                                            @if(!empty($item['web_pages']))
                                                <a href="{{ $item['web_pages'][0] }}" target="_blank" class="small">
                                                    {{ parse_url($item['web_pages'][0], PHP_URL_HOST) }}
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-end pe-4">
                                            {{-- FORM TO ADD SPECIFIC UNI --}}
                                            <form action="{{ route('admin.universities.storeApi') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="name" value="{{ $item['name'] }}">
                                                <input type="hidden" name="country" value="{{ $item['country'] }}">
                                                <input type="hidden" name="web_page" value="{{ $item['web_pages'][0] ?? '' }}">

                                                <button type="submit" class="btn btn-sm btn-outline-success">
                                                    <i class="ri-add-line"></i> Add
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-5 text-muted">
                                            No universities found. Try a broader search term.
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

@endsection
