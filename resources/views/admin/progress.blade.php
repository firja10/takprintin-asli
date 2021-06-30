
@extends('admin.layout.app')
@section("content")

<div class="container"> 
<div class="row-content">
<br>
<div class="col-lg-12 col-md-3">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama File</th>
      <th scope="col">Nama Toko</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telepon</th>
       <th scope="col">Metode Pengantaran</th>
      <!--<th scope="col">Bukti Progress</th>-->
      <!--<th scope="col">Konfirmasi Ada Bukti</th>-->
        <th scope="col">Konfirmasi Langsung</th>


    </tr>
  </thead>
  <tbody>

  <?php $num = 1; ?>

  @foreach($pembelis as $pemesan)

    <tr>
      <th scope="row"><?php echo $num++; ?></th>
      <td>{{$pemesan->nama_file}}</td>
      <td>{{$pemesan->nama_toko}}</td>
      <td>{{$pemesan->email}}</td>
      <td>{{$pemesan->telepon}}</td>
      <td>{{$pemesan->pengantar}}</td>

      

      @if($pemesan->status_pembayaran == 0 )
      <!--<td> <a href="#" class = "btn btn-danger">Belum Ada</a> </td>-->
      <!--<td> <a href="#" class = "btn btn-danger" >Belum Bayar</a> </td>-->
        <td>
        <a href="#" class = "btn btn-danger" >Belum Membayar</a>
      </td>
      
      
      @elseif($pemesan->progress == NULL)
      <!--<td> <a href="#" class = "btn btn-danger">Belum Ada</a> </td>-->
      <!--<td> <a href="#" class = "btn btn-success" >Sudah Bayar</a> </td>-->
      
      
    <td>
      <form action="{{route('verifprogress',$pemesan->id)}}" method = "POST" enctype="multipart/form-data">
      @csrf
      <button class = "btn btn-primary" type = "submit" name = "submit" id = "submit">Konfirmasi Langsung</button>
      </form>
      </td>
      @elseif($pemesan->progress == 1)
      
      <!--<td>-->
      
      <!--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#buktiprogress">Lihat Bukti</button> -->
      
      <!--</td>-->

      <!--<td>-->
      <!--<form action="{{route('verifprogress',$pemesan->id)}}" method = "POST" enctype="multipart/form-data">-->
      <!--@csrf-->
      <!--<button class = "btn btn-primary" type = "submit" name = "submit" id = "submit">Konfirmasi Progress</button>-->
      <!--</form>-->
      <!--</td>-->
      
          <td>
      <form action="{{route('verifprogress',$pemesan->id)}}" method = "POST" enctype="multipart/form-data">
      @csrf
      <button class = "btn btn-primary" type = "submit" name = "submit" id = "submit">Konfirmasi Langsung</button>
      </form>
      </td>
      
      

      @elseif($pemesan->progress == 2)
      <!--<td>-->
      <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#buktiprogress">Lihat Bukti</button> -->
      <!-- </td>-->
      <!--<td> <a href="#" class = "btn btn-primary disabled" >Sudah Sampai</a> </td>-->
      
      
            <td> <a href="#" class = "btn btn-primary disabled" >Pesanan Sudah Sampai</a> </td>

      @endif



    </tr>
    @endforeach
  </tbody>
</table>


<div class="modal fade" id="buktibayar" tabindex="-1" role="dialog" aria-labelledby="buktibayarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top img-cover img-fluid" src="@empty(!$pemesan->bukti_pembayaran){{ asset('storage/Pembeli/'.$pemesan->bukti_pembayaran) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="buktiprogress" tabindex="-1" role="dialog" aria-labelledby="buktiprogressLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Progress</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <img class="card-img-top img-cover img-fluid" src="@empty(!$pemesan->bukti_progress){{ asset('storage/Pembeli/'.$pemesan->bukti_progress) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;"> -->
            <img class="card-img-top img-cover img-fluid" src="{{asset('storage/Pembeli/'.$pemesan->bukti_progress)}}" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







</div>
</div>
</div>





@endsection