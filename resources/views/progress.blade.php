@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">


                            <h2 style = "color:black;text-align:center;margin-top:30px;font-size:60px;">PESANAN SEDANG DIKERJAKAN</h2>
                            <p style = "color:black;text-align:center;margin-top:30px;font-size:40px;">{{$pembelis->nama_toko}}</p>


                            <div class="col-lg-8">

                            <ul style = "list-style-type: none; margin-top:30px;text-align:left;padding-bottom:500px;">
                                @if(Auth::check())
                                <li> <h4 style = "color:black;font-size:40px;">Nama Pemesan : {{Auth::user()->name}}</h4></li>
                                @else
                                <li> <h4 style = "color:black;font-size:40px;">Nama Pemesan : Tidak Diketahui</h4></li>
                                @endif
                                <li> <p style = "font-size:40px;color:black;"> Nomor Gopay : 08989898989 a/n Takprint.in</p></li>
                                @if($pembelis->status_pembayaran == 0 && $pembelis->progress == NULL )
                                <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:red;">Menunggu Pembayaran</span> </p></li>
                                @elseif($pembelis->status_pembayaran == 1 && $pembelis->progress == NULL)
                                <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:yellow;">Silakan Tunggu Verifikasi Pembayaran</span> </p></li>
                                @elseif($pembelis->status_pembayaran == 2 && $pembelis->progress == NULL)
                                <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:purple;">Silakan Tunggu Produknya</span> </p></li>
                                <li> 
                                <p style = "font-size:40px; color:black;">Jika Sudah Sampai, Silakan Konfirmasi Lewat Form ini </p>
                                    <form action="{{route('updateprogress', $pembelis->id)}}" method ="POST" enctype = "multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                    <input type="file" name = "bukti_progress" id = "bukti_progress" class = "form-control">
                                    </div>
                                    
                                    <br>

                                    <div class="form-group">
                                    <button type = "submit" name = "submit" id ="submit" class = "btn btn-dark"> Upload Bukti Sampai </button>
                                    </div>
                                

                                    </form>
                                  </li>

                                 @elseif($pembelis->status_pembayaran == 2 && $pembelis->progress == 1)
                                    @if($pembelis->bukti_progress !=NULL)
                                 <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:white;">Tunggu Konfirmasi Admin</span> </p></li>
                                    @else
                                    <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:white;">Bukti Anda Belum Ada !, Silakan Upload Ulang</span> </p></li>
                                    <form action="{{route('updateprogress', $pembelis->id)}}" method ="POST" enctype = "multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                    <input type="file" name = "bukti_progress" id = "bukti_progress" class = "form-control">
                                    </div>
                                    
                                    <br>

                                    <div class="form-group">
                                    <button type = "submit" name = "submit" id ="submit" class = "btn btn-dark"> Upload Bukti Sampai </button>
                                    </div>
                                

                                    </form>
                                    @endif
                                @elseif($pembelis->status_pembayaran == 2 && $pembelis->progress == 2)
                                <li> <p style = "font-size:40px; color:black;">Status :  <span style = "font-size:30px; color:purple;">Terima Kasih Atas Langganan Anda  </span> </p></li>
                                <li> <a href="{{route('editrating', $pembelis->id)}}" class = "btn btn-secondary"> Isi Penilaian Untuk Kami </a>  </li>
                                @endif
                            </ul>

                        </div>

                        <div class="col-lg-2">


                        </div>



                        <div class="col-lg-12">
                            <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0"
                            style="border: 0; width: 100%; height: 290px"
                            allowfullscreen
                          ></iframe> -->
                        </div>



                </div>
            </div>







        </div>
        </header>



@endsection








