@extends('admin.layout.app')

@section('content')
<div class="container">
    <h2>All Complaints</h2>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Filter & Search Form --}}
    <form method="GET" action="{{ route('admin.complaints.index') }}" class="mb-4 d-flex gap-3 flex-wrap align-items-center">

        {{-- Status filter --}}
        <select name="status" class="form-select" style="width: 150px;">
            <option value="">-- Filter by Status --</option>
            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="resolved" {{ request('status') == 'resolved' ? 'selected' : '' }}>Resolved</option>
            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
        </select>

        {{-- Category filter --}}
        <select name="category" class="form-select" style="width: 150px;">
            <option value="">-- Filter by Category --</option>
            @foreach($categories as $category)
                <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
            @endforeach
        </select>

        {{-- Search by text --}}
        <input
            type="text"
            name="search"
            placeholder="Search by name or tracking ID"
            class="form-control"
            style="width: 250px;"
            value="{{ request('search') }}"
        />

        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary">Filter</button>

        {{-- Reset filters --}}
        <a href="{{ route('admin.complaints.index') }}" class="btn btn-secondary">Reset</a>
    </form>

    {{-- Complaints Table --}}
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tracking ID</th>
                <th>Full Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Submitted At</th>
                <th>Actions</th>
            </tr>
        </thead>
      <tbody>
    @forelse ($complaints as $index => $complaint)
        <tr>
            <td>{{ $index + 1 + ($complaints->currentPage() - 1) * $complaints->perPage() }}</td>
            <td>{{ $complaint->tracking_id }}</td>
            <td>{{ $complaint->full_name }}</td>
            <td>{{ $complaint->category }}</td>
            <td>
                @php
                    $status = strtolower($complaint->status);
                    $badgeClass = match($status) {
                        'pending' => 'badge bg-warning text-dark',
                        'resolved' => 'badge bg-success',
                        'rejected' => 'badge bg-danger',
                        default => 'badge bg-secondary'
                    };
                @endphp
                <span class="{{ $badgeClass }}">{{ ucfirst($status) }}</span>
            </td>
            <td>{{ $complaint->created_at->format('Y-m-d H:i') }}</td>
            <td>
                <a href="{{ route('admin.complaints.show', $complaint->id) }}" class="btn btn-sm btn-primary">View</a>
            </td>
        </tr>
    @empty
        <tr><td colspan="7" class="text-center">No complaints found.</td></tr>
    @endforelse
</tbody>

    </table>
 
</div>
@endsection
