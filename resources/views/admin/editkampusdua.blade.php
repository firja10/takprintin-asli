@extends('admin.layoututama')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Informasi Kampus</h1>

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
  <form method = "POST" action = "{{route('infokampus.update', $infokampuses->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="namakampus" class="col-form-label"  >Nama Kampus </label>
      <input type="text" class="form-control" id="namakampus" name = "namakampus" value = "{{$infokampuses->namakampus}}">
    </div>
    <div class="form-group">
      <label for="alamatkampus" class="col-form-label">Alamat Kampus</label>
      {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
      <input type="text" class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}">
    </div>

    <div class="form-group">
        <label for="alamatkampus" class="col-form-label">Upload File</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="file" class="form-control" name="lambangkampus" id = "lambangkampus" value="{{$infokampuses->lambangkampus}}">
      </div>

      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
    </form>


    </div>










</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection
