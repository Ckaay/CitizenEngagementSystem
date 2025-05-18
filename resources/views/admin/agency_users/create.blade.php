@extends('admin.layout.app')
@section('title', "Add Agency")
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <form action="{{ route('admin.agency-users.store') }}" method="POST">
            @csrf

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Agency User</h6>

                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" required placeholder="John Doe">
                        <label>Full Names</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" required placeholder="Email">
                        <label>Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" required placeholder="Password">
                        <label>Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="password_confirmation" type="password" class="form-control" required placeholder="Confirm Password">
                        <label>Confirm Password</label>
                    </div>

                    <div class="m-n2">
                        <button class="btn btn-primary w-100 m-2" type="submit">Add Agency User</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
