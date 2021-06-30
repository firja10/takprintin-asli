@extends('admin.layout.app')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Informasi _toko</h1>

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
  <form method = "POST" action = "{{route('informasi-toko.update', $tokos->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="nama_toko" class="col-form-label"  >Nama Toko </label>
      <input type="text" class="form-control" id="nama_toko" name = "nama_toko" value = "{{$tokos->nama_toko}}">
    </div>
    <div class="form-group">
      <label for="alamat_toko" class="col-form-label">Alamat Toko</label>
      {{-- <textarea class="form-control" id="alamat_toko" name = "alamat_toko" value = "{{$tokos->alamat_toko}}"></textarea> --}}
      <input type="text" class="form-control" id="alamat_toko" name = "alamat_toko" value = "{{$tokos->alamat_toko}}">
    </div>

    <div class="form-group">
        <label for="alamat_toko" class="col-form-label">Upload File</label>
        {{-- <textarea class="form-control" id="alamat_toko" name = "alamat_toko" value = "{{$tokos->alamat_toko}}"></textarea> --}}
        <input type="file" class="form-control" name="lambang_toko" id = "lambang_toko" value="{{$tokos->lambang_toko}}">
      </div>


      <div class="form-group">
        <label for="jenis_kertas" class="col-form-label">Jenis Kertas</label>
        <textarea name="jenis_kertas" class = "form-control" id="jenis_kertas" cols="30" rows="10" value = "{{$tokos->jenis_kertas}}">{{$tokos->jenis_kertas}}</textarea>
      </div>



      <div class="form-group">
        <label for="ukuran_kertas" class="col-form-label">Ukuran Kertas</label>
        <textarea name="ukuran_kertas" class = "form-control" id="ukuran_kertas" cols="30" rows="10" value = "{{$tokos->ukuran_kertas}}">{{$tokos->ukuran_kertas}}</textarea>
      </div>





      <div class="form-group">
        <label for="harga" class="col-form-label">Harga</label>
        <textarea name="harga" class = "form-control" id="harga" cols="30" rows="10" value = "{{$tokos->harga}}">{{$tokos->harga}}</textarea>
      </div>
      
      
      
            <div class="form-group">
        <label for="peta" class="col-form-label">Link Lokasi Peta</label>
        <textarea name="peta" class = "form-control" id="peta" cols="30" rows="10" value = "{{$tokos->harga}}">{{$tokos->peta}}</textarea>
      </div>
      
      
      

      <div class="form-group">
        <label for="waktu_buka" class="col-form-label">Waktu Buka</label>
        <input type="time" name ="waktu_buka" id="waktu_buka" class ="form-control">
      </div>

      <div class="form-group">
        <label for="waktu_tutup" class="col-form-label">Waktu Tutup</label>
        <input type="time" name ="waktu_tutup" id="waktu_tutup" class ="form-control">
      </div>

        <br>

      <div class="form-group">
      <p> <strong>Untuk Kondisi Toko, Jika ada perubahan jam ( tidak sesuai jadwal yang sudah ditetapkan ), silakan untuk diisi kondisi di bawah ini</strong> </p>
      </div>

      <div class="form-group">
        <label for="open" class="col-form-label">Kondisi Toko</label>
        <select name="open" id="open" class = "form-control">
            <option disabled selected value> -- Pilih Kondisi Toko -- </option>
            <option value="open">Open</option>
            <option value="close">Close</option>
        </select>
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
