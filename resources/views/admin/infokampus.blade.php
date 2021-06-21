
@extends('admin.layout.app')
@section("content")

{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Kampus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">     <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Kampus</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
              {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Kampus</button> --}}
            </ol>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method = "POST" action = "{{route('infokampus.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="namakampus" class="col-form-label"  >Nama Kampus </label>
                          <input type="text" class="form-control" id="namakampus" name = "namakampus">
                        </div>
                        <div class="form-group">
                          <label for="alamatkampus" class="col-form-label">Alamat Kampus</label>
                          {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus"></textarea> --}}
                          <input type="text" class="form-control" id="alamatkampus" name = "alamatkampus">
                        </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      {{-- <button type="button" class="btn btn-primary" type = "submit" name = "submit">Kirim Data</button> --}}
                      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
                    </div>
                </form>
                  </div>
                </div>
              </div>



          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">



@foreach($infokampuses as $infocampus)



   <!-- Area Chart -->
   <div class="col-md-4 col-mb-3">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            {{-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
            </div> --}}
        </div>


        <!-- Card Body -->
        <div class="card-body" >
            {{-- <img class="card-img-top img-cover img-fluid" src="{{asset('dist/img/photo1.png')}}" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;"> --}}
            <img class="card-img-top img-cover img-fluid" src="@empty(!$infocampus->lambangkampus){{ asset('storage/infokampus/'.$infocampus->lambangkampus) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;">


            <div class="card-body">
            {{-- <h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">Ieu Aink</h5> --}}
        <center><h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">{{$infocampus->namakampus}}</h5></center>
         <center>   <p class="card-text" style = "margin-top:5px;margin-bottom:5px;">{{$infocampus->alamatkampus}}</p> </center>
         {{-- <center> <a href="#" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a></center> --}}







         <center>
            <form action="{{ route('infokampus.destroy',$infocampus->id) }}" method="POST">
             @csrf
             @method('DELETE')
{{--
             <a href="{{route('infokampus.edit',$class->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a> --}}
               <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Hapus Kelas</button>
               {{-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal">Edit Kampus</a> --}}
               <a href="#" style = "margin-bottom:10px;margin-top:10px; margin-left:5px;margin-right:5px;" class="btn btn-primary">Lihat Kelas</a>
               <a href="{{route('infokampus.edit',$infocampus->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a>

            </form>

              </center>

            </div>






{{--
            <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method = "POST" action = "{{route('infokampus.update', $infocampus->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                          <label for="namakampus" class="col-form-label"  >Nama Kampus </label>
                          <input type="text" class="form-control" id="namakampus" name = "namakampus" value = "{{$infocampus->namakampus}}">
                        </div>
                        <div class="form-group">
                          <label for="alamatkampus" class="col-form-label">Alamat Kampus</label>

                          <input type="text" class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infocampus->alamatkampus}}">
                        </div>

                        <div class="form-group">
                            <label for="alamatkampus" class="col-form-label">Upload File</label>

                            <input type="file" class="form-control" name="lambangkampus" id = "lambangkampus" value="{{$infocampus->lambangkampus}}">
                          </div>





                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
                    </div>
                </form>
                  </div>
                </div>
              </div> --}}


















        </div>
    </div>
</div>


@endforeach












        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
