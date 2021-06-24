@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">


                            <h2 style = "color:black;text-align:center;margin-top:30px;font-size:60px;">KONFIRMASI PEMBAYARAN</h2>

                            <ul style = "list-style-type: none; margin-top:50px;text-align:left;padding-bottom:500px;">
                                @if($pembelis->file != NULL)
                                <li> <h4 style = "color:black;font-size:50px;">Total Pembayaran : Rp. {{$pembelis->harga_asli}}</h4></li>
                                @endif

                                <li> <p style = "font-size:50px;color:black;"> Nomor Gopay : 08989898989 a/n Takprint.in</p></li>

                                @if($pembelis->status_pembayaran == 0)
                                <li> <p style = "font-size:50px; color:black;">Status :  <span style = "font-size:50px; color:red;">Menunggu Pembayaran</span> </p></li>
                                <center> <li> <a href="{{route('editpembayaran', $pembelis->id)}}" class = "btn btn-warning"> <strong>Lakukan Pembayaran</strong> </a>  </li> </center>
                                @elseif($pembelis->status_pembayaran == 1)
                                <li> <p style = "font-size:50px; color:black;">Status :  <span style = "font-size:50px; color:yellow;">Pembayaran Belum Terkonfirmasi</span> </p></li>
                             <center><li> <a class = "btn btn-danger" style = "font-size:20px;"> <strong>Tunggu Verifikasi</strong></a>   </li> </center>    

                             @elseif($pembelis->status_pembayaran == 2)
                                <li> <p style = "font-size:50px; color:black;">Status :  <span style = "font-size:50px; color:green;">Pembayaran Sudah Terkonfirmasi</span> </p></li>
                             <center><li> <a href="{{route('progressproduk',$pembelis->id)}}" class = "btn btn-dark" style = "font-size:20px;"> <strong>Lihat Progress</strong></a>   </li> </center>    
                                @endif

                            </ul>




                </div>
            </div>
        </div>
        </header>














  @endsection