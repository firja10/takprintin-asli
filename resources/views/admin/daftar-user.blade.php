
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
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jadikan Admin</th>


    </tr>
  </thead>
  <tbody>

  <?php $num = 1; ?>

  @foreach($user as $pengguna)

    <tr>
      <th scope="row"><?php echo $num++; ?></th>
      <td>{{$pengguna->name}}</td>
      <td>{{$pengguna->email}}</td>
      <td>

      @if($pengguna->is_admin == 0 || $pengguna->is_admin == NULL )
      <form action="{{route('jadikanadmin',$pengguna->id)}}" method = "POST" enctype="multipart/form-data">
      @csrf
      <button class = "btn btn-primary" type = "submit" name = "submit" id = "submit">Jadikan Admin</button>
      </form>
      </td>
      @elseif($pengguna->is_admin == 1)
      <button class = "btn btn-success" type = "submit" name = "submit" id = "submit" href = ""> Admin</button>

      @endif


    </tr>
    @endforeach
  </tbody>
</table>




<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Progress</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <img class="card-img-top img-cover img-fluid" src="@empty(!$pengguna->bukti_progress){{ asset('storage/Pembeli/'.$pengguna->bukti_progress) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;"> -->
            <img class="card-img-top img-cover img-fluid" src="{{asset('storage/Pembeli/'.$pengguna->bukti_progress)}}" alt="Card image cap" style = "object-fit: cover;    width: 100%;
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