
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
      <th scope="col">Jenis - Ukuran - Harga Kertas</th>
      <th scope="col">Jumlah Halaman</th>
      <th scope="col">Harga Total</th>
      <th scope="col">Status Pembayaran</th>
      <th scope="col">Bukti Bayar</th>
      <th scope="col">Aksi</th>


    </tr>
  </thead>
  <tbody>

  <?php $num = 1; ?>

  @foreach($pembelis as $pemesan)

    <tr>
      <th scope="row"><?php echo $num++; ?></th>
      <td>{{$pemesan->nama_file}}</td>
      <td>{{$pemesan->nama_toko}}</td>
      <td>{{$pemesan->jenis_kertas}}</td>
      <td>{{$pemesan->jumlah_halaman}}</td>
      <td>Rp. {{$pemesan->harga_asli}}</td>


      @if($pemesan->status_pembayaran == 0)
      <td> <a href="#" class = "btn btn-danger">Belum Bayar</a> </td>
      <td> <a href="#" class = "btn btn-danger">Bukti Tidak Ada</a> </td>
      <td> <a href="#" class = "btn btn-danger">Belum Membayar</a> </td>
      @elseif($pemesan->status_pembayaran == 1)
      <td> <a href="#" class = "btn btn-primary">Menunggu Verifikasi</a> </td>
      <td> 
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#buktibayar">Lihat Bukti</button> 
       </td>
      <td> 
      <form action="{{route('updateadminpembayaran',$pemesan->id)}}" method = "POST" enctype="multipart/form-data">
      @csrf
      <button class = "btn btn-primary" type = "submit" name = "submit" id = "submit">Konfirmasi Bayar</button>
      </form>
       </td>
      @elseif($pemesan->status_pembayaran == 2)
      <td> <a href="#" class = "btn btn-success disabled">Sudah Membayar</a> </td>
      <td> <a href="#" class = "btn btn-warning">Lihat Bukti</a> </td>
      <td> <a href="#" class = "btn btn-dark disabled" >Sudah Membayar</a> </td>
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
      <img class="card-img-top img-cover img-fluid" src="@empty(!$pemesan->bukti_progress){{ asset('storage/Pembeli/'.$pemesan->bukti_progress) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
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