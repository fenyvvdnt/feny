<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-end/css/bootstrap.css') }}" />
    <link href="{{ asset('assets/front-end/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front-end/css/responsive.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/front-end/images/favicon.png') }}" type="image/x-icon">
</head>
<body>
<section class="login_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="javascript:history.back()" class="btn btn-secondary mb-3">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-box">
                    <div class="text-center mb-4">
                        <h2>Welcome Back</h2>
                        <p>Login to your account</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login">
                            LOGIN
                        </button>
                        <div class="text-center mt-4">
                            <p>Belum punya akun? 
                                <a href="{{ route('register') }}" class="auth-link">
                                    Daftar disini
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/front-end/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('assets/front-end/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#28a745'
        });
    @endif
    @if(session('login_success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('login_success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#28a745'
        });
    @endif
</script>
</body>
</html> 