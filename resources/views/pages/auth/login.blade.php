<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TAKPRINTIN | Log in</title>

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
      <img src="{{asset('assets/img/logotakprint.png')}}" alt="" style = "witdh:30%;">
      <br>
    <a href="#" style = "color:white;"><b>TAKPRINT.IN </b>LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan Sign In Terlebih Dahulu</p>
      
<!--    @error('email')-->
<!--<div class="alert alert-danger alert-block">-->
<!--    <button type="button" class="close" data-dismiss="alert">×</button>    -->
<!--    <strong>Email Anda Salah / Belum Terdaftar</strong>-->
<!--</div>-->
<!--    @enderror-->
    
    
    
  @if ($message = Session::get('error'))
  
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>Email / Password Anda Salah / Belum Terdaftar</strong>
</div>
  
  @endif
    
    
    

      <form action="{{route('login')}}" method="post">
      @csrf
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
               Ingat Saya ?
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- Atau -</p>
        <a href="{{url('auth/facebook')}}" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Masuk Dengan Facebook
        </a>
        <!--{{-- <a href="{{route('google.login')}}" class="btn btn-block btn-danger"> --}}-->
            <a href="{{url('auth/google')}}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Masuk Dengan Google+
        </a>
        
               <a href="{{url('auth/github')}}" class="btn btn-block btn-dark">
          <i class="fab fa-github-alt mr-2"></i> Masuk Dengan Github
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ route('password.request') }}">Lupa Password</a>
      </p>
      <p class="mb-0">
        <a href="{{url('register')}}" class="text-center">Belum Punya Akun ? Silakan Daftar</a>
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
