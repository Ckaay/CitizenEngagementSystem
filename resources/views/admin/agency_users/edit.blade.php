@extends('admin.layout.app')
@section('title', 'Edit Agency User')

@section('content')
<div class="container">
   <form action="{{ route('admin.agency-users.update', $agencyUser->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-floating mb-3">
        <input name="name" type="text" class="form-control" id="floatingInput" value="{{ old('name', $agencyUser->name) }}" required>
        <label for="floatingInput">Full Names</label>
    </div>

    <div class="form-floating mb-3">
        <input name="email" type="email" class="form-control" id="floatingEmail" value="{{ old('email', $agencyUser->email) }}" required>
        <label for="floatingEmail">Email</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Update Agency User</button>
</form>

</div>
@endsection
