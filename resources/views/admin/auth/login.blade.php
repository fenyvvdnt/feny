<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('assets/template/admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan login untuk masuk ke panel admin</p>

      <form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf

    {{-- Email --}}
    <div class="input-group mb-3">
      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
      <div class="input-group-append">
        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
      </div>
    </div>

    {{-- Password --}}
    <div class="input-group mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <div class="input-group-append">
        <div class="input-group-text"><span class="fas fa-lock"></span></div>
      </div>
    </div>

    {{-- Remember me & Submit --}}
    <div class="row">
      <div class="col-8">
        <div class="icheck-primary">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember">Ingat saya</label>
        </div>
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
      </div>
    </div>
  </form>

  {{-- Error Alert --}}
  @if ($errors->any())
    <div class="alert alert-danger mt-3 mb-0">
      <ul class="mb-0 pl-3">
        @foreach ($errors->all() as $error)
          <li style="font-size: 0.875rem">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

</div>

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/template/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/template/admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>