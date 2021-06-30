
@extends('admin.layout.app')
@section("content")

{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Toko</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">     <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Toko</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
              {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Toko</button> --}}
            </ol>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Toko Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method = "POST" action = "{{route('informasi-toko.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="nama_toko" class="col-form-label"  >Nama Toko </label>
                          <input type="text" class="form-control" id="nama_toko" name = "nama_toko">
                        </div>
                        <div class="form-group">
                          <label for="alamat_toko" class="col-form-label">Alamat Toko</label>
                          {{-- <textarea class="form-control" id="alamat_toko" name = "alamat_toko"></textarea> --}}
                          <input type="text" class="form-control" id="alamat_toko" name = "alamat_toko">
                        </div>


                        {{-- <div class="form-group">
                            <label for="jenis_kertas" class="col-form-label">Jenis Kertas</label>
                            <select name="jenis_kertas" id="jenis_kertas" class = "form-control">
                                <option disabled selected value> -- Pilih Jenis Kertas -- </option>
                                <option value="HVS">HVS</option>
                                <option value="Manilla">Manilla</option>
                                <option value="Bufallo">Bufallo</option>
                                <option value="Concorde">Concorde</option>
                            </select>

                          </div> --}}

                          <div class="form-group">
                            <label for="jenis_kertas" class="col-form-label">Jenis Kertas</label>
                            <textarea name="jenis_kertas" class = "form-control" id="jenis_kertas" cols="30" rows="10"></textarea>
                          </div>



                          <div class="form-group">
                            <label for="ukuran_kertas" class="col-form-label">Ukuran Kertas</label>
                            <textarea name="ukuran_kertas" class = "form-control" id="ukuran_kertas" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="harga" class="col-form-label">Harga</label>
                            <textarea name="harga" class = "form-control" id="harga" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="open" class="col-form-label">Kondisi Toko</label>
                            <select name="open" id="open" class = "form-control">
                                <option disabled selected value> -- Pilih Kondisi Toko -- </option>
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="waktu_buka" class="col-form-label">Waktu Buka</label>
                            <textarea name="waktu_buka" class = "form-control" id="waktu_buka" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="waktu_tutup" class="col-form-label">Waktu Tutup</label>
                            <textarea name="waktu_tutup" class = "form-control" id="waktu_tutup" cols="30" rows="10"></textarea>
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



@foreach($tokos as $infotoko)



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
            <img class="card-img-top img-cover img-fluid" src="@empty(!$infotoko->lambang_toko){{ asset('storage/Toko/'.$infotoko->lambang_toko) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;">


            <div class="card-body">
            {{-- <h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">Ieu Aink</h5> --}}
            
        <center><h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">{{$infotoko->nama_toko}}</h5></center>
        
         <center>   <p class="card-text" style = "margin-top:5px;margin-bottom:5px;">{{$infotoko->alamat_toko}}</p> </center>
         
         
         
         
                        <?php 
                        date_default_timezone_set('Asia/Jakarta');
                        $time_default = date('H:i:s');
                        $time_buka = $infotoko->waktu_buka;
                        $time_tutup = $infotoko->waktu_tutup;


                        ?>

                        <?php
                        
                        if($time_buka < $time_default && $time_tutup > $time_default )
                        {
                        
                            ?>
         
         
         
         
         
         <center> <strong><h6 class="card-text" style = "margin-top:5px;margin-bottom:5px;">Buka</h6> </strong> </center>
         
                        <?php }

                        else if ($time_tutup == NULL && $time_buka == NULL) {
                        ?>

         <center> <strong><h6 class="card-text" style = "margin-top:5px;margin-bottom:5px;">Tutup</h6> </strong> </center>
         
         
                       <?php }
                       else {
                       ?>
               <center> <strong><h6 class="card-text" style = "margin-top:5px;margin-bottom:5px;">Tutup</h6> </strong> </center>        
                       
                      
                       <?php } ?>
                       
         
         
         
         
         {{-- <center> <a href="#" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Toko</a></center> --}}







         <center>
            <form action="{{ route('informasi-toko.destroy',$infotoko->id) }}" method="POST">
             @csrf
             @method('DELETE')
{{--
             <a href="{{route('infoToko.edit',$class->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Toko</a> --}}
               <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Hapus Toko</button>
               {{-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal">Edit Toko</a> --}}
               <a href="{{url('/pemesanan')}}" style = "margin-bottom:10px;margin-top:10px; margin-left:5px;margin-right:5px;" class="btn btn-primary">Lihat Toko</a>
               <a href="{{route('informasi-toko.edit',$infotoko->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Toko</a>

            </form>

              </center>

            </div>


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
