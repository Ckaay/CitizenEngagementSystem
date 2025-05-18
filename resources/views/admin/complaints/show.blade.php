@extends('admin.layout.app')

@section('content')
    <div class="container">
        <h2>Complaint Details</h2>

        <div class="card mb-3">
            <div class="card-body">
                <p><strong>Tracking ID:</strong> {{ $complaint->tracking_id }}</p>
                <p><strong>Full Name:</strong> {{ $complaint->full_name }}</p>
                <p><strong>Address:</strong> {{ $complaint->address }}</p>
                <p><strong>Email:</strong> {{ $complaint->email ?? 'N/A' }}</p>
                <p><strong>Phone:</strong> {{ $complaint->phone ?? 'N/A' }}</p>
                <p><strong>Category:</strong> {{ $complaint->category }}</p>
                <p><strong>Status:</strong> {{ ucfirst($complaint->status) }}</p>
                <p><strong>Details:</strong><br>{{ $complaint->complaint_details }}</p>
                @if ($complaint->feedback)
                    <p><strong>Agency Feedback:</strong><br>{{ $complaint->feedback }}</p>
                @endif
            </div>
        </div>

        <form action="{{ route('admin.complaints.response', $complaint->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="status">Update Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="pending" {{ $complaint->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="resolved" {{ $complaint->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                    <option value="rejected" {{ $complaint->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="feedback">Agency Feedback (saved in DB)</label>
                <textarea name="feedback" id="feedback" class="form-control" rows="3" required>{{ old('feedback') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="response_message">Email Message (sent to citizen)</label>
                <textarea name="response_message" id="response_message" class="form-control" rows="4" required>{{ old('response_message') }}</textarea>
            </div>

            <button class="btn btn-success">Submit Response</button>
            <a href="{{ route('admin.complaints.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
