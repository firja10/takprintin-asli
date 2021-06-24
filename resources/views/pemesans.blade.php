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



    <!-- Vendor CSS Files -->
    {{-- <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" /> --}}









    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style = "background-color:white;">
            <div class="container">
                <img src="{{asset('assets/img/logotakprint.png')}}" alt="" class="navbar-brand" style = "width:70px;" >
                <a class="navbar-brand" href="#page-top" style = "font-size:40px;margin-left:5px; color:black;">TAKPRINTIN</a>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">

                        <br>

                        <center>
        <li class="nav-item mx-0 mx-lg-1">

        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle  py-3 px-0 px-lg-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>   {{Auth::user()->name}} </strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">


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

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">


                        <div class="col-md-4" style = "text-align:center;">

                            <form action="/pemesanan/searchnama" method="GET">

                        <div class="form-group">
                            <h4> <strong>Nama Toko</strong> </h4>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="searchnama" name = "searchnama" type="text" placeholder="Search..">
                        </div>
                        <br/>
                        <div class="form-group">
                            <button href="" class="btn btn-dark" style = "font-size:20px;padding-left:30px;padding-right:30px;" type = "submit" > Cari</button>
                        </div>

                        </form>

                        </div>







                        <div class="col-md-4" style = "text-align:center;">

                            <form action="/pemesanan/searchlokasi" method="GET">

                        <div class="form-group">
                            <h4> <strong>Lokasi</strong> </h4>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="searchlokasi" name = "searchlokasi" type="text" placeholder="Search..">
                        </div>
                        <br/>
                        <div class="form-group">
                            <button href="" class="btn btn-dark" style = "font-size:20px;padding-left:30px;padding-right:30px;" type = "submit" > Cari</button>
                        </div>

                        </form>

                        </div>




                        <div class="col-md-4" style = "text-align:center;">

                            <form action="/pemesanan/searchopen" method="GET">

                        <div class="form-group">
                            <h4> <strong>Kondisi Toko</strong> </h4>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="searchopen" name = "searchopen" type="text" placeholder="Search..">
                        </div>
                        <br/>
                        <div class="form-group">
                            <button href="" class="btn btn-dark" style = "font-size:20px;padding-left:30px;padding-right:30px;" type = "submit" > Cari</button>
                        </div>

                        </form>

                        </div>
















                    </div>

                    <br>

<div class="row" style = "margin-top:10px; text-align:center;">
    <h2 style = "text-align:left;"> <strong>FILTER</strong> </h2>
    <br>

    {{-- <div class="col-md-2" style = "text-align:center;margin-top:20px;" >


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

     </div> --}}






{{-- {!! Form::open(['action' => 'LandingController@pemesanan', 'method'=> 'GET']) !!} --}}



     {{-- <div class="col-md-2" style = "text-align:center;margin-top:20px;" >


        <h4> <strong>Lokasi</strong> </h4>

         <select class = "form-control"  name="nama_toko" id="alamat_toko">
         <option disabled selected value>--Silakan Pilih--</option>
         </select>

     </div>



     <div class="col-md-2" style = "text-align:center; margin-top:20px;">

         <h4> <strong>Kategori</strong> </h4>

          <select class = "form-control" name="kategori" id="kategori">
            <option disabled selected value>--Silakan Pilih--</option>
          </select>

      </div>


      <div class="col-md-2" style = "text-align:center; margin-top:20px;">

         <h4> <strong>Ukuran Kertas</strong> </h4>

          <select class = "form-control" name="ukuran_kertas" id="ukuran_kertas">
            <option disabled selected value>--Silakan Pilih--</option>
          </select>


      </div>


      <div class="col-md-2" style = "text-align:center; margin-top:20px;">

         <h4> <strong>Jenis Kertas</strong> </h4>

          <select class = "form-control" name="ukuran_kertas" id="ukuran_kertas">
            <option disabled selected value>--Silakan Pilih--</option>
          </select>


      </div>

      <div class="col-md-2" style = "text-align:center; margin-top:20px;">

         <h4> <strong>harga</strong> </h4>

          <select class = "form-control" name="harga" id="harga">
            <option disabled selected value>--Silakan Pilih--</option>
          </select>

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
</div> --}}








<div class="container" style = "margin-top:30px;">





    <div class="row">

        <div class="col-lg-12" style = "background-color: lightblue">



            <table class="table">
                <thead>
                  {{-- <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                  </tr> --}}
                </thead>
                <tbody id="myTable">
                @foreach($tokos as $pemesanans)
                  <tr>
                    <th scope="row"> <img src="{{asset('storage/Toko/'. $pemesanans->lambang_toko)}}" alt="" style = "width:80%; padding-top:20px;padding-bottom:20px;"></th>

                    <td> <h2 style = "padding-top:20px; color:black">{{$pemesanans->nama_toko}}</h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <p style = "font-size:20px;color:black">{{$pemesanans->alamat_toko}} </p>
                        <p style = "font-size:20px;color:black">{{$pemesanans->jenis_kertas}}</p>
                        <p style = "font-size:20px;color:black">{{$pemesanans->ukuran_kertas}}

                            @php
                                $penjelasanharga = $pemesanans->harga;
                                $rincianharga = explode('. ', $penjelasanharga);
                            @endphp


                            <p style = "font-size:20px;color:black"> <strong>Harga :</strong>  </p>
                                <ul style = "text-align:center;" type = "none">

                                    @foreach ($rincianharga as $penjelasanrincianharga )
                                    <li>
                                    {{ $penjelasanrincianharga }}
                                      </li>
                                    @endforeach

                                    </ul>

                    </td>

                    <td>




                        <!-- @if($pemesanans->open == "open")
                  
                        <a href="" class = "btn btn-success" style = "border-radius:50px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">OPEN</a>
                        <br>
                        <a href="{{route('pemesananspesifik', $pemesanans->id)}}" class = "btn btn-dark" style = "font-size:20px; padding-left:40px; padding-right:40px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">ORDER</a>
                        @elseif($pemesanans->open == "close")
                        
                        <a href="" class = "btn btn-danger" style = "border-radius:100px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">CLOSE</a>
                        <h4>Maaf Anda tidak bisa order</h4>
                        @endif
                        <br> -->


                        <?php 
                        date_default_timezone_set('Asia/Jakarta');
                        $time_default = date('H:i:s');
                        $time_buka = $pemesanans->waktu_buka;
                        $time_tutup = $pemesanans->waktu_tutup;


                        ?>

                        <?php
                        
                        if($time_buka < $time_default && $time_tutup > $time_default )
                        {
                        
                            ?>
                         <a href="" class = "btn btn-success" style = "border-radius:50px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">OPEN</a>
                        <br>
                        <a href="{{route('pemesananspesifik', $pemesanans->id)}}" class = "btn btn-dark" style = "font-size:20px; padding-left:40px; padding-right:40px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">ORDER</a>

                        <?php }

                        else if ($time_tutup == NULL && $time_buka == NULL) {
                        ?>

                        <a href="" class = "btn btn-danger" style = "border-radius:100px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">CLOSE</a>
                        <h4>Maaf Anda tidak bisa order</h4>

                       <?php }
                       else {
                       ?>

                        <a href="" class = "btn btn-danger" style = "border-radius:100px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">CLOSE</a>
                        <h4>Maaf Anda tidak bisa order</h4>


                       <?php } ?>
                       

                    </td>
                  </tr>
               @endforeach
                </tbody>
              </table>











        </div>

    </div>

</div>
</div>
</div>

            </div>
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


<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
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

        {{-- Vendor JS File --}}

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




        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
