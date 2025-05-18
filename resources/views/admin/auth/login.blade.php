<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - admins Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset ('admins/lib/owlcarousel/assets/owl.carousel.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset ('admins/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css' ) }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('admins/css/bootstrap.min.css' ) }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('admins/css/style.css' ) }}" rel="stylesheet">
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner and other elements as before -->
        
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">adminsistration</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

   
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admins/lib/chart/chart.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/easing/easing.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/waypoints/waypoints.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/owlcarousel/owl.carousel.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/tempusdominus/js/moment.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/tempusdominus/js/moment-timezone.min.js' ) }}"></script>
    <script src="{{ asset('admins/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js' ) }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('admins/js/main.js' ) }}"></script>
</body>
</html>