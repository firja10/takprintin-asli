
      @extends('template')

      @section('content')
      
      
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">

                <div class="container d-flex flex-column">
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











                            <div class="col-lg-12" style = "background-color: lightblue">
                                <div class="row">
                                <div class="col-md-4" style = "text-align:center;">
                                    <img src="{{asset('assets/img/file.png')}}" alt="" style = "width:75%; padding-top:20px;padding-bottom:20px;">
                                </div>

                                <div class="col-md-4" style = "text-align:left; margin-top:20px;">

                                    <ul style = "color:black">
                                        <li><p style = "font-size:20px;color:black">Nama : {{$pembelis->nama_file}}</p></li>
                                        <!--<li><p style = "font-size:20px;color:black">Kategori : {{$pembelis->kategori}}</p></li>-->
                                        <li><p style = "font-size:20px;color:black">Jenis Kertas : {{$pembelis->jenis_kertas}}</p></li>
                                        <!--<li><p style = "font-size:20px;color:black">Ukuran Kertas : {{$pembelis->ukuran_kertas}}</p></li>-->
                                        <li><p style = "font-size:20px;color:black">Jumlah Halaman : {{$pembelis->jumlah_halaman}}</p></li>
                                        <li><p style = "font-size:20px;color:black">Catatan : {{$pembelis->catatan}}</p></li>
                                    </ul>

                                </div>
                                <div class="col-md-4" style = "text-align:center;">

                                    <br>
                                    <br>

                                   <ul style = "list-style-type: none">
                                    <li> <p style = "font-size:20px;color:black">Nama Pemesan : {{Auth::user()->name}}</p></li>
                                    <li> <p style = "font-size:20px;color:black">Nomor HP     : {{$pembelis->telepon}}</p></li>
                                   </ul>

                                    <br>
                                    @if($pembelis->file != NULL)
                                    <h3 style = "color:black"> <strong>Total : Rp. {{$pembelis->harga}}</strong> </h3>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>


                    <br>
                    <div class="col-lg-12" style = "margin-top:30px;">
                        @if($pembelis->file != NULL )

                    <h3 style = "text-align:left;"> <strong>TOTAL PEMBAYARAN : Rp. {{ $pembelis->harga_asli }}</strong> </h3>

                    @endif
                    <br>
                    
                    
                    
                    
                    
                    @if($pembelis->pembayaran == NULL)
                    <h4 style = "text-align:left">Metode Pembayaran : </h4>
                        <div>
                        <form action="{{route('updaterincian', $pembelis->id)}}" method = "POST">
                            @csrf
                            <div class="form-group col-sm-4">

                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    
                                    <option value="BNI" name = "BNI">BNI</option>
                                    <option value="Mandiri" name = "Mandiri">Mandiri</option>
                                <option value="OVO" name = "OVO">OVO</option>
                                <option value="GoPay" name = "GoPay">GoPay</option>
                                </select>
                                <input type="hidden" name = "file" id = "file" value = "{{$pembelis->file}}">
                            </div>
                            
                            <br>
                            <br>
                             <h4 style = "text-align:left">Metode Pengantaran : </h4>
                             <div class="form-group col-sm-4">

                                <select name="pengantar" id="pengantar" class="form-control">
                                    <option value="pickup" name = "pickup">Pick-Up</option>
                                    <option value="gosend" name = "gosend">Go-Send</option>
                         
                                </select>
                                <input type="hidden" name = "file" id = "file" value = "{{$pembelis->file}}">
                            </div>
                            
                            
                            <br>
                            <div class="form-group" style = "text-align:right;">
                            <input type="submit" class="btn btn-warning" value = "LANJUTKAN" style = "font-size:25px;text-align:right">
                        </div>
                        </form>
                    </div>
                        
                    @elseif($pembelis->pembayaran != NULL)
                    @if($pembelis->status_pembayaran == 0)
                    
                    <div class = "col-md-6">
                        <h4 style ="text-align:left">Ragu dengan metode pembayaran dan pengantaran ? Silakan tentukan pilihan ulang </h4>
                        
                    </div>
                    <br>
                    <br>
                    
                                        <h4 style = "text-align:left"> Metode Pembayaran : </h4>
                        <div>
                        <form action="{{route('updaterincian', $pembelis->id)}}" method = "POST">
                            @csrf
                            <div class="form-group col-sm-4">

                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    
                                    <option value="BNI" name = "BNI">BNI</option>
                                    <option value="Mandiri" name = "Mandiri">Mandiri</option>
                                <option value="OVO" name = "OVO">OVO</option>
                                <option value="GoPay" name = "GoPay">GoPay</option>
                                </select>
                                <input type="hidden" name = "file" id = "file" value = "{{$pembelis->file}}">
                            </div>
                            
                            <br>
                            <br>
                             <h4 style = "text-align:left">Metode Pengantaran : </h4>
                             <div class="form-group col-sm-4">

                                <select name="pengantar" id="pengantar" class="form-control">
                                    <option value="pickup" name = "pickup">Pick-Up</option>
                                    <option value="gosend" name = "gosend">Go-Send</option>
                         
                                </select>
                                <input type="hidden" name = "file" id = "file" value = "{{$pembelis->file}}">
                            </div>
                            
                            
                            <br>
                            <div class="form-group" style = "text-align:right;">
                            <input type="submit" class="btn btn-warning" value = "LANJUTKAN" style = "font-size:25px;text-align:right">
                        </div>
                        </form>
                    </div>
                    
                    @elseif($pembelis->status_pembayaran == 1)
                     <h4 style = "text-align:left"> Pembayaran sedang diverifikasi </h4>
                     
                     
                    @elseif($pembelis->progress == NULL && $pembelis->status_pembayaran == 2)
                    <h4 style = "text-align:left"> Pembayaran Selesai, Lihat Progress</h4>
                    
                    @elseif($pembelis->progress == 2 && $pembelis->status_pembayaran == 2)
                    
                         <h4 style = "text-align:left"> Pesanan Sudah Selesai</h4>
                      
                    
                    
                    @endif
                    @endif


                    </h4>

                    <div class="col-md-4">
                    {{-- <form action="">
                        <div class="form-group">

                            <select name="pembayaran" id="pembayaran" class="form-control">
                                <option value="BNI" name = "BNI">BNI</option>
                                <option value="Mandiri" name = "Mandiri">Mandiri</option>
                                <option value="OVO" name = "OVO">OVO</option>
                                <option value="GoPay" name = "GoPay">GoPay</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                        <input type="submit" class="btn btn-warning" value = "LANJUTKAN" style = "font-size:25px;">
                    </div>
                    </form> --}}
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

@endsection






