
@extends('admin.layout.app')
@section("content")

{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Pengisian Data Kampus dan Jurusan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
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





<div class="col-md-6">
   <!-- general form elements -->
   <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Pengisian Informasi Kampus</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method = "post" enctype="multipart/form-data" action = "{{route('infokampus.store')}}">
      <div class="card-body">
        {{-- <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> --}}

        <div class="form-group">
            <label for="namakampus">Nama Kampus</label>
            <input type="text" class="form-control" id="namakampus" name = "namakampus" placeholder="Nama Kampus">
          </div>


        <div class="form-group">
            <label for="alamatkampus">Alamat Kampus</label>
            <input type="text" class="form-control" id="alamatkampus" placeholder="Alamat Kampus">
          </div>


        <div class="form-group">
          <label for="lambangjurusan">Lambang Kampus</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="lambangjurusan">
              <label class="custom-file-label" for="lambangjurusan">Choose file</label>
            </div>

            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>


















<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Form Pengisian Departemen / Jurusan Kampus</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form>
       <div class="card-body">


           <div class="form-group">
            <label for="kampus">Pilih Kampus</label>
            <select class="custom-select form-control-border-width-2" id="kampus">
              <option>Value 1</option>
              <option>Value 2</option>
              <option>Value 3</option>
            </select>
          </div>


          <div class="form-group">
            <label for="namajurusan">Nama Departemen / Jurusan</label>
            <input type="text" class="form-control" id="namajurusan" name = "namajurusan" placeholder="Nama Jurusan">
          </div>


         <div class="form-group">
           <label for="lambangjurusan">Lambang Representasi Jurusan</label>
           <div class="input-group">
             <div class="custom-file">
               <input type="file" class="custom-file-input" id="lambangjurusan">
               <label class="custom-file-label" for="lambangjurusan">Choose file</label>
             </div>

             <div class="input-group-append">
               <span class="input-group-text">Upload</span>
             </div>
           </div>
         </div>
         {{-- <div class="form-check">
           <input type="checkbox" class="form-check-input" id="exampleCheck1">
           <label class="form-check-label" for="exampleCheck1">Check me out</label>
         </div>
       </div> --}}
       <!-- /.card-body -->

       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
     </form>
   </div>
 </div>























        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
