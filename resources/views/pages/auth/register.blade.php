<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TAKPRINT.IN | Register</title>

  <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logotakprint.png')}}" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style = "background-color: #4696e6;">
<div class="login-box">
  <div class="login-logo">
      <img src="{{asset('assets/img/logotakprint.png')}}" alt="" style = "width:30%;">
      <br>
    <a href="#" style = "color:white;"><b>TAKPRINT.IN </b>REGISTER</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan Sign In Terlebih Dahulu</p>
      
      @error('password')
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>Password Anda Kurang dari 8</strong>
</div>
@enderror
      
      
      
      

      <form action="{{route('register')}}" method="POST">
      @csrf
        <div class="input-group mb-3">
          <input type="name" class="form-control" name = "name" placeholder="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name = "email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

        <div class="row">

            <!-- <input type="submit" class ="btn btn-success btn-block" placeholder="Registrasi"> -->
            <button type="submit" class="btn btn-success btn-block">Registrasi</button>

          <!-- /.col -->
        </div>
      </form>

      <br>
      <p class="mb-0">
        <a href="{{url('login')}}" class="text-center">Sudah Punya Akun ? Silakan Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
