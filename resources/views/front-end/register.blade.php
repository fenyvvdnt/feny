<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <div class="register-box">
                    <div class="text-center mb-4">
                        <h2>Create Account</h2>
                        <p>Join our community today</p>
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
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('name') }}" required />
                            </div>
                        </div>
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
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-register">
                            DAFTAR
                        </button>
                        <div class="text-center mt-4">
                            <p>Sudah punya akun? 
                                <a href="{{ route('login') }}" class="auth-link">
                                    Login disini
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
</body>
</html> 