<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TAKPRINTIN - Silakan Pilih Pesanan Anda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logotakprint.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style = "background-color:white;">
            <div class="container">
                <img src="{{asset('assets/img/logotakprint.png')}}" alt="" class="navbar-brand" style = "width:70px;" >
                <a class="navbar-brand" href="{{url('/')}}" style = "font-size:40px;margin-left:5px; color:black;">TAKPRINT.IN</a>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/')}}">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/pemesanan')}}">Pemesanan</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/keranjang')}}">Keranjang <sup>
                            </sup> </a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/#kontak')}}">Kontak</a></li>
                        
                                             
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


                        
                    </ul>
                </div>
            </div>
        </nav>






        @yield('content')




        


   



        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; TAKPRINTIN 2021</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

            <script>

$("#bintang_rating").each(function () {
    $(this).webwidget_rating_simple({
        rating_star_length: '5',
        rating_initial_value: '',
        rating_function_name: ''
    });
 });


            $('#bintang_rating').change(function () {
    $(".webwidget_rating_simple > li").css('background-image', 'url(http://www.jhwebdesigner.com/rating-system/rating-system//nst.gif)')

    $(".webwidget_rating_simple > li").slice(0,this.value).css('background-image', 'url(http://www.jhwebdesigner.com/rating-system/rating-system//sth.gif)')

});
            </script>












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
    
    

        <script src="{{asset('js/scripts.js')}}"></script>









    </body>
</html>
