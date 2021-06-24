<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TAKPRINTIN - Solusi Terbaik Untuk Anda</title>
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
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style = "background-color:white;">
            <div class="container">
                <img src="{{asset('assets/img/logotakprint.png')}}" alt="" class="navbar-brand" style = "width:70px;" >
                <a class="navbar-brand" href="{{url('/')}}" style = "font-size:40px;margin-left:5px; color:black;">TAKPRINTIN</a>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/')}}">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/pemesanan')}}">Pemesanan</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/keranjang')}}">Keranjang <sup>
                            </sup> </a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/#kontak')}}">Kontak</a></li>
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

    </body>
</html>
