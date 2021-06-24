@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">


                            <h2 style = "color:black;text-align:center;margin-top:30px;font-size:60px;">Upload File Pembayaran</h2>

                           <form action="{{route('updatepembayaran',$pembelis->id)}}" enctype="multipart/form-data" method = "POST">
                           @csrf

                            <div class="form-group">
                            <label for="bukti_pembayaran"> Silakan Upload Bukti Pembayaran</label>
                           <input type="file" name = "bukti_pembayaran" id = "bukti_pembayaran" class = "form-control">
                           </div>
                           <br>
                           <div class="form-group">
                           <button type = "submit" class = "btn btn-success" name = "submit" id = "submit"> Submit Bukti Bayar </button>
                           </div>
                           </form>






                </div>
            </div>
        </div>
        </header>
@endsection