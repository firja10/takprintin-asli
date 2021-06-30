<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TAKPRINT.IN - Solusi Terbaik Untuk Anda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logotakprint.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />











    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style = "background-color:#4696e6;">
            <div class="container">
                <img src="{{asset('assets/img/logotakprint.png')}}" alt="" class="navbar-brand" style = "width:70px;" >
                <a class="navbar-brand" href="#page-top" style = "font-size:40px;margin-left:5px;">TAKPRINT.IN</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded btn btn-warning" href="{{url('pemesanan')}}" style = "color:black; border-radius:55px;"><strong>Pemesanan</strong></a></li>


                        @if(Auth::check())

                                            <br>

                                            <center>
                            <li class="nav-item mx-0 mx-lg-1">

                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle  py-3 px-0 px-lg-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <strong>   {{Auth::user()->name}} </strong>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">
                                      
                                      
                                 @if(Auth::user()->is_admin == 1)  
                                  <a class="dropdown-item" href="{{url('/admin')}}"> Halaman Admin</a>
                                 @endif


                                    <a class = "dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Logout</a>

                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>



                                  </a>
                                </div>
                              </div>

                        </li>

                    </center>



                        @else

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded btn btn-danger" href="{{url('login')}}" style = "color:black; border-radius:55px;"><strong>Anda Belum Login</strong></a></li>
                        @endif


                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background:url('assets/img/bg-takprint.png') ;background-size:cover">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                {{-- <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." /> --}}
                <h1 class="masthead-heading text-uppercase mb-3" style = "opacity:1.0;margin-top:120px;">TAKPRINT.IN</h1>
                <!-- Masthead Heading-->

                {{-- <p class="masthead mb-3" style = "font-size:25px;">Takprint.in menyediakan jasa print online berkualitas, cepat, dan terpercaya dengan harga terjangkau dimana para pembeli dapat melakukan pemesanan dengan mudah melalui website ini.</p> --}}

                <!-- Masthead Subheading-->
                <br>
                <p class="masthead-subheading font-weight-light mb-0" style = "margin-top:20px;margin-bottom:50px; padding-bottom:50px; font-size:40px; ">Takprint.in menyediakan jasa print online berkualitas, cepat, dan terpercaya dengan harga terjangkau dimana para pembeli dapat melakukan pemesanan dengan mudah melalui website ini.</p>
            </div>
        </header>



        <!-- Footer-->
        <footer class="footer text-center" id = "kontak" style = "background-color:#4696e6;">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6">
                        {{-- <h4 class="text-uppercase mb-4">INFORMASI PENTING !!</h4> --}}
                        {{-- <p class="lead mb-0" style = "font-size:25px;">
                            Untuk informasi lebih lanjut dapat menghubungi :
                        </p> --}}

                        <p style = "font-size:28px; text-align:left;">Untuk informasi lebih lanjut dapat menghubungi :</p>
                        <p style = "text-align:left; font-size:28px;"> <img src="{{asset('assets/img/telephone.png')}}" alt="" style = "text-align: left;" > 081358661504  </p>
                        <p style = "text-align:left; font-size:28px;"> <img src="{{asset('assets/img/email.png')}}" alt="" style = "text-align: left;" > takprint@gmail.com  </p>

                    </div>


                    <!-- Footer About Text-->
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; TAKPRINT.IN 2021</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>





    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>





        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
