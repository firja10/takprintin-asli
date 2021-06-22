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

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Keranjang</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Kotak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-6" style = "text-align:left;">

                            <?php
                                 echo date('H:i:s');
                            ?>


                            {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> --}}
                            <h2> <strong>{{$tokos->nama_toko}}</strong> </h2>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>


                            <form style = "margin-top:20px;" action = "{{route('pembeli.store')}}" method = "POST">
                                @csrf
                                <div class="form-group">
                                  <label for="nama_file">Nama File</label>
                                  <input type="text" class="form-control" id="nama_file" name = "nama_file">
                                </div>
                                <br>
                                <div class="form-group">
                                  <label for="telepon">Nomor HP</label>
                                  <input type="number" class="form-control" id="telepon" name = "telepon" >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control"  id="email" name = "email" >
                                  </div>
                                  <br>




                                  <div class="form-group">
                                      <label for="file">File Untuk Dicetak</label>
                                      <input type="file" class="form-control"  id="file" name = "file" >
                                    </div>





                                    <br>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>

                                        <select class="form-control" id="kategori" name = "kategori">
                                            <option>BnW</option>
                                            <option>Warna</option>
                                            <option>Borderless</option>
                                          </select>

                                      </div>

                                      <br>
                                      <div class="form-group">
                                          <label for="jenis_kertas">Jenis Kertas</label>

                                          <select class="form-control" id="jenis_kertas" name = "">
                                              <option>HVS</option>
                                              <option>Belum Ada</option>
                                            </select>
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <label for="ukurankertas">Ukuran Kertas</label>

                                            <select class="form-control" id="ukuran_kertas" name = "ukuran_kertas">
                                                <option>A4</option>
                                                <option>F4</option>
                                              </select>
                                          </div>

                                          <br>
                                          <div class="form-group">
                                              <label for="jumlahhalaman">Jumlah Halaman</label>
                                              <input type="number" class="form-control" id="jumlah_halaman" name = "jumlah_halaman"  placeholder="">

                                            </div>





                                            <br>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <textarea class="form-control" id="catatan" rows="3" name = "catatan"></textarea>

                                              </div>



                                              <div class="form-group">
                                                <input name="nama_toko" id = "nama_toko" type="hidden" value="{{$tokos->nama_toko}}">

                                              </div>





                                        <br>


                                              <center>
                                <input type="submit" class="btn btn-primary" name = "submit" value = "Tambah">
                            </center>
                              </form>


                        </div>

                        <div class="col-md-6" style = "text-align:right;">

                {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0"
                style="border: 0; width: 100%; height: 290px"
                allowfullscreen
              ></iframe> --}}

              <img src="{{asset('storage/Toko/'.$tokos->lambang_toko)}}" alt="" style = "width:500px;">
                        </div>



                    </div>
                    <br>

            </div>
        </header>





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
