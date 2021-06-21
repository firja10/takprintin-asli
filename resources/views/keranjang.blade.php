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
                <a class="navbar-brand" href="#page-top" style = "font-size:40px;margin-left:5px; color:black;">TAKPRINTIN</a>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Pemesanaan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Keranjang <sup><?php $count = DB::table('pembelis')->count();
                            echo $count;
?></sup> </a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Keranjang</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Kotak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">

            @foreach ( $pembelis as $pemesan )

                <br>
                <br>
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-6" style = "text-align:left;">


                            {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> --}}
                            <h2> <strong>{{$pemesan->nama_toko}}</strong> </h2>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>



                        </div>

                        <div class="col-md-6" style = "text-align:right;">

                        </div>
                    </div>
                    <br>
                    <div class="row">

                            <div class="col-lg-12" style = "background-color: lightblue">
                                <div class="row">
                                <div class="col-md-4" style = "text-align:center;">
                                    <img src="{{asset('assets/img/file.png')}}" alt="" style = "width:75%; padding-top:20px;padding-bottom:20px;">
                                </div>

                                <div class="col-md-4" style = "text-align:left; margin-top:20px;">

                                    <ul style = "color:black">
                                        <li><p style = "font-size:20px;color:black">Nama File: {{$pemesan->nama_file}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Kategori : {{$pemesan->kategori}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Jenis Kertas : {{$pemesan->jenis_kertas}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Ukuran Kertas : {{$pemesan->ukuran_kertas}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Jumlah Halaman : {{$pemesan->jumlah_halaman}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Catatan : {{$pemesan->catatan}}</p></li>
                                    </ul>

                                </div>
                                <div class="col-md-4" style = "text-align:center;">

                                    <br>
                                    <br>

                                    @if($pemesan->file == NULL)


                                  <strong><a href="{{route('keranjangspesifik', $pemesan->id)}}" class = "btn btn-warning" style = "border-radius:100px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">Anda Belum Upload File</a></strong>
                                    <br>
                                    <h3 style = "color:black"> <strong>Total : {{$pemesan->harga}}</strong> </h3>
                                    @elseif($pemesan->file != NULL && $pemesan->kategori == 'BnW')

                                    <form action="{{route('pembeli.destroy', $pemesan->id)}}" method = "POST" >
                                        @csrf
                                        @method('DELETE')

                                    <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Batalkan</button>
                                    <br>
                                    <h3 style = "color:black"> <strong>Total : Rp.10.000</strong> </h3>

                                    @elseif($pemesan->file != NULL && $pemesan->kategori == 'Warna')
                                    <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Batalkan</button>
                                    <br>
                                    <h3 style = "color:black"> <strong>Total : Rp.12.000</strong> </h3>

                                    @endif


                                    </form>

                                    <a href = "{{route('rincianspesifik', $pemesan->id)}}" class = "btn btn-success" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Rincian Pembayaran</a>




                                </div>
                            </div>

                        </div>
                    </div>










                    </div>



            </div>


            @endforeach
        </header>












        <!-- Footer-->
        <footer class="footer text-center" style = "background-color:#4696e6;">
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
    </body>
</html>
