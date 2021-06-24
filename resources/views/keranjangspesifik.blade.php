
@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">



                <br>
                <br>
                <div class="container d-flex flex-column">

                    <h4>PERHATIAN !! SILAKAN UNTUK UPLOAD FILE UNTUK PRINT !</h4>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-6" style = "text-align:left;">


                            {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> --}}

                            <h2> <strong>{{$pembelis->nama_toko}}</strong> </h2>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>



                        </div>

                        <div class="col-md-6" style = "text-align:right;">

                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-lg-12">



                            <form style = "margin-top:20px;" action = "{{route('pembeli.update', $pembelis->id)}}" method = "POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                  <label for="file" style = "margin-bottom:50px; font-size:50px;">Silakan Upload File Anda</label>
                                  <br>
                                  <!-- <input type="text" class="form-control" id="file" name = "file"> -->
                                  <input type="file" class="form-control"  id="file" name = "file" >
                                </div>
                                <br>

                             <center>
                                {{-- <input type="submit" class="btn btn-primary" style = "font-size:30px;" name = "submit" value = "Tambah"> --}}
                                <input type="submit" class="btn btn-primary" style = "font-size:30px;" name = "submit" value = "Tambah">
                            </center>
                              </form>















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


@endsection