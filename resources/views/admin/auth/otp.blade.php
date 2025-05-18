<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
    <!-- Add your styles if needed -->
    <link href="{{ asset('admins/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Verify OTP</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('admin.otp.verify') }}">
                            @csrf
                            <div class="form-group">
                                <label>Enter OTP sent to your email:</label>
                                <input type="text" name="otp" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Verify</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>