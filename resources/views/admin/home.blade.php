
@extends('admin.layout.app')

@section("judul")
Dashboard
@endsection


@section("content")

{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard TakPrintIn</li>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                <?php 
                $table_pembeli = DB::table('pembelis')->count();
                echo $table_pembeli;
                ?>
                </h3>

                <p>Jumlah Langganan</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('/admin/informasi-pembeli')}}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>          <?php 
                $table_user = DB::table('users')->count();
                echo $table_user;
                ?>
                </h3>

                <p>Jumlah User</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('/admin/daftar-user')}}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php 
                $table_progress = DB::table('pembelis')->where('progress','=',2)->count();
                echo $table_progress;
                ?>
                </h3>

                <p>Pesanan Sudah Sampai</p>
              </div>
              <div class="icon">
              <i class="ion ion-bag"></i>
               
              </div>
              <a href="{{url('/admin/informasi-progress')}}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                <?php 
                $table_toko = DB::table('tokos')->count();
                echo $table_toko;
                ?>
                </h3>

                <p>Jumlah Toko</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('/admin/informasi-toko')}}" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
     

@endsection
