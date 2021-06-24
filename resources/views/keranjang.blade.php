@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">

            @foreach ( $data as $pemesan )
             

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

                                    @if($pemesan->file == NULL )


                                  <strong><a href="{{route('keranjangspesifik', $pemesan->id)}}" class = "btn btn-warning" style = "border-radius:100px;font-size:20px; padding-left:50px; padding-right:50px;padding-top:20px; padding-bottom:20px; margin-top:20px;margin-bottom:20px;">Anda Belum Upload File</a></strong>
                                    <br>
                                    <h3 style = "color:black"> <strong>Total : {{$pemesan->harga}}</strong> </h3>
                                    @elseif($pemesan->file != NULL && $pemesan->status_pembayaran == 0)

                                    <?php 
                                    
                                    // $pisah = explode(" - ", $pemesan->jenis_kertas);
                                    // $pisah2 = array_reverse($pisah);
                                    // $per_lembar = floatval($pisah2[0]);
                                    // $pangaos = $pemesan->jumlah_halaman;
                                    // $total = number_format($pangaos*$per_lembar)."<br>";
                                     
                                    
                                    
                                    ?>
    
                                    <h3 style = "color:black"> <strong> Rp. {{ $pemesan->harga }}</strong> </h3>
                                    <form action="{{route('pembeli.destroy', $pemesan->id)}}" method = "POST" >
                                        @csrf
                                        @method('DELETE')

                                    <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Batalkan</button>
                                    <br>
                                    </form>



                                    <a href = "{{route('rincianspesifik', $pemesan->id)}}" class = "btn btn-success" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Rincian Pembayaran</a>

                                    @elseif($pemesan->file != NULL && $pemesan->status_pembayaran == 1)
                                    <h3 style = "color:black"> <strong> Rp. {{ $pemesan->harga }}</strong> </h3>
                                    <a href = "{{route('konfirmasipembayaran', $pemesan->id)}}" class = "btn btn-warning" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Lihat Proses Verifikasi Pembayaran</a>
                                    
                                    @elseif($pemesan->progress == NULL && $pemesan->status_pembayaran == 2)
                                    <h3 style = "color:black"> <strong> Rp. {{ $pemesan->harga }}</strong> </h3>
                                    <a href = "{{route('progressproduk', $pemesan->id)}}" class = "btn btn-dark" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Pembayaran Selesai, Lihat progres</a>
                                    <form action="{{route('pembeli.destroy', $pemesan->id)}}" method = "POST" >
                                        @csrf
                                        @method('DELETE')

                                    <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Hapus Order</button>
                                    <br>
                                    </form>

                                    @elseif($pemesan->progress == 2 && $pemesan->status_pembayaran == 2)
                                    <h3 style = "color:black"> <strong> Rp. {{ $pemesan->harga }}</strong> </h3>
                                    <a href = "" class = "btn btn-dark" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Transaksi Selesai</a>
                                    <form action="{{route('pembeli.destroy', $pemesan->id)}}" method = "POST" >
                                        @csrf
                                        @method('DELETE')

                                    <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Hapus Order</button>
                                    <br>
                                    </form>

                                    @endif


                                    



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


@endsection