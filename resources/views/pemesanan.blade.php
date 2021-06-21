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
                    {{-- <ul class="navbar-nav ms-auto">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded btn btn-warning" href="#portfolio" style = "color:black; border-radius:55px;"><strong>Pemesanan</strong></a></li>

                    </ul> --}}
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-4" style = "text-align:center;">


                            <input class="form-control" id="myInput" type="text" placeholder="Search..">

                        </div>

                    </div>

                    <br>

<div class="row" style = "margin-top:10px; text-align:center;">
    <h2 style = "text-align:left;"> <strong>FILTER</strong> </h2>
    <br>

    <div class="col-md-2" style = "text-align:center;margin-top:20px;" >


       <h4> <strong>Lokasi</strong> </h4>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">

    </div>



    <div class="col-md-2" style = "text-align:center; margin-top:20px;">

        <h4> <strong>Kategori</strong> </h4>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">

     </div>


     <div class="col-md-2" style = "text-align:center; margin-top:20px;">

        <h4> <strong>Ukuran Kertas</strong> </h4>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">

     </div>


     <div class="col-md-2" style = "text-align:center; margin-top:20px;">

        <h4> <strong>Jenis Kertas</strong> </h4>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">

     </div>

     <div class="col-md-2" style = "text-align:center; margin-top:20px;">

        <h4> <strong>harga</strong> </h4>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">

     </div>

     <div class="col-md-2" style = "text-align:center; margin-top:20px;">

        <h4> <strong>Penilaian</strong> </h4>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">

     </div>

</div>





<br>

<div class="row" style = "margin-top:10px;">


<div class="col-lg-12" style = "text-align:center;">
    <a href="" class="btn btn-dark" style = "font-size:20px;padding-left:30px;padding-right:30px;"> Cari</a>
</div>



</div>








<div class="container" style = "margin-top:30px;">





    <div class="row">

        <div class="col-lg-12" style = "background-color: lightblue">

        @foreach ( $tokos as $pemesanans )
            <div class="row data-table">
            <div class="col-md-4" style = "text-align:center;">
                <img src="{{asset('storage/Toko/'. $pemesanans->lambang_toko)}}" alt="" style = "width:75%; padding-top:20px;padding-bottom:20px;">
            </div>

            <div class="col-md-4" style = "text-align:left;">
               <h2 style = "padding-top:20px; color:black">{{$pemesanans->nama_toko}}</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p style = "font-size:20px;color:black">{{$pemesanans->alamat_toko}} </p>
                <p style = "font-size:20px;color:black">{{$pemesanans->jenis_kertas}}</p>
                <p style = "font-size:20px;color:black">{{$pemesanans->Ukuran_Kertas}}
                {{-- <ul style = "color:black">
                    <li>A4</li>
                    <li>F4</li>
                </ul> --}}
                </p>

                <p style = "font-size:20px;color:black"> <strong>Harga :</strong>
                    {{-- <ul style = "color:black">
                        <li>BnW : Rp.200 Rb/lbr ( A5 : B5 )</li>
                        <li>BnW : Rp.200 Rb/lbr ( A4:F4 )</li>
                    </ul> --}}
                    {{$pemesanans->harga}}
                </p>

            </div>
            <div class="col-md-4" style = "text-align:center;">
                @if($pemesanans->open == "Open")
                <a href="" class = "btn btn-success" style = "border-radius:100px;font-size:30px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">OPEN</a>
                @elseif($pemesanans->open == "Close")
                <a href="" class = "btn btn-danger" style = "border-radius:100px;font-size:30px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">CLOSE</a>
                @endif
                <br>
                <a href="{{route('pemesananspesifik', $pemesanans->id)}}" class = "btn btn-dark" style = "font-size:30px; padding-left:40px; padding-right:40px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">ORDER</a>
            </div>
            @endforeach
        </div>

    </div>

</div>











</div>
</div>










            </div>
        </header>



 <!-- About Section-->
 {{-- <section class="page-section text-white mb-0" style = "background-color:#4696e6;">
    <div class="container">

            <div class="row">
                <div class="col-lg-12" style = "background-color: lightblue">
                    <div class="row">
                    <div class="col-md-4" style = "text-align:center;">
                        <img src="{{asset('assets/img/portfolio/cabin.png')}}" alt="" style = "width:75%; padding-top:20px;padding-bottom:20px;">
                    </div>

                    <div class="col-md-4" style = "text-align:left;">
                       <h2 style = "padding-top:20px; color:black">COPYER INDO</h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <p style = "font-size:20px;color:black">Jl. Gebang Lor Blok S-5, Surabaya </p>
                        <p style = "font-size:20px;color:black">Jenis Kertas : HVS</p>
                        <p style = "font-size:20px;color:black">Ukuran Kertas :
                        <ul style = "color:black">
                            <li>A4</li>
                            <li>F4</li>
                        </ul>
                        </p>

                        <p style = "font-size:20px;color:black"> <strong>Harga :</strong>
                            <ul style = "color:black">
                                <li>BnW : Rp.200 Rb/lbr ( A5 : B5 )</li>
                                <li>BnW : Rp.200 Rb/lbr ( A4:F4 )</li>
                            </ul>
                        </p>

                    </div>
                    <div class="col-md-4" style = "text-align:center;">


                        <a href="" class = "btn btn-success" style = "border-radius:100px;font-size:30px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">OPEN</a>
                        <br>
                        <a href="" class = "btn btn-dark" style = "font-size:30px; padding-left:40px; padding-right:40px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">ORDER</a>
                    </div>
                </div>

            </div>
    </div>

        </div>
    </div>
</section> --}}





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




        <script type="text/javascript">
            $(function () {

              var table = $('.data-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: {
                    url: "{{ route('pemesanan') }}",
                    data: function (d) {
                          d.status = $('#nama_toko').val(),
                          d.search = $('input[type="search"]').val()
                      }
                  },
                  columns: [
                    //   {data: 'id', name: 'id'},
                      {data: 'nama_toko', name: 'nama_toko'},
                      {data: 'alamat_toko', name: 'alamat_toko'},
                      {data: 'jenis_kertas', name: 'jenis_kertas'},
                      {data: 'ukuran_kertas', name: 'ukuran_kertas'},
                  ]
              });

              $('#status').change(function(){
                  table.draw();
              });

            });
          </script>





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
