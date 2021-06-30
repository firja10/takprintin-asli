
@extends('template')

@section('content')

        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-6" style = "text-align:left;">

           

                            {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> --}}
                            <h2> <strong>{{$tokos->nama_toko}}</strong> </h2>
                            <!-- <h2> <strong>{{Auth::user()->name}}</strong> </h2> -->
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>


                            <form style = "margin-top:20px;" action = "{{route('pembeli.store')}}" method = "POST" enctype ="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                  <label for="nama_file">Nama File</label>
                                  <input type="text" class="form-control" id="nama_file" name = "nama_file">
                                </div>
                                <br>
                                <div class="form-group">
                                  <label for="telepon">Nomor HP</label>
                                  <input type="number" class="form-control" id="telepon" name = "telepon" >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control"  id="email" name = "email" >
                                  </div>
                                  <br>




                                  <div class="form-group">
                                      <label for="file">File Untuk Dicetak</label>
                                      <input type="file" class="form-control"  id="file" name = "file" >
                                    </div>





                                    <br>
                                    <!-- <div class="form-group">
                                        <label for="kategori">Kategori</label>

                                        <select class="form-control" id="kategori" name = "kategori">
                                            <option>BnW</option>
                                            <option>Warna</option>
                                            <option>Borderless</option>
                                          </select>

                                      </div> -->

                                      <br>
                                      <div class="form-group">
                                          <label for="jenis_kertas">Jenis - Ukuran Kertas - Harga</label>

                                          <select class="form-control" id="jenis_kertas" name = "jenis_kertas">
                                          @foreach($data as $kerta)
                                              <option>{{$kerta->kertas}} - {{$kerta->ukuran}} - {{$kerta->harga}} </option>
                                            @endforeach
                                              </select>
                                       
                                        </div>





                                      <!--  <br>
                                       <div class="form-group">
                                            <label for="ukurankertas">Ukuran Kertas</label>

                                            <select class="form-control" id="ukuran_kertas" name = "ukuran_kertas">
                                            @foreach($data as $ukur)
                                              <option>{{$ukur->ukuran}}</option>
                                            @endforeach
                                              </select>

                                            </select>
                                              
                                          </div> -->

                                          <br>
                                          <div class="form-group">
                                              <label for="jumlahhalaman">Jumlah Halaman</label>
                                              <input type="number" class="form-control" id="jumlah_halaman" name = "jumlah_halaman"  placeholder="">

                                            </div>





                                            <br>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <textarea class="form-control" id="catatan" rows="3" name = "catatan"></textarea>

                                              </div>



                                              <div class="form-group">
                                                <input name="peta_toko" id = "peta_toko" type="hidden" value="{{$tokos->peta}}">
                                              </div>


                                              <div class="form-group">
                                                <input name="nama_toko" id = "nama_toko" type="hidden" value="{{$tokos->nama_toko}}">
                                              </div>


    

                                              <div class="form-group">
                                      <input type = "hidden" name = "nama_pemesan" id = "nama_pemesan" value = "{{Auth::user()->name}}">
                                      </div>




                                        <br>


                                              <center>
                                <input type="submit" class="btn btn-primary" name = "submit" value = "Tambah">
                            </center>
                              </form>


                        </div>

                        <div class="col-md-6" style = "text-align:right;">
                            <iframe src="{{$tokos->peta}}" width="600" height="450" style="border:0; allowfullscreen="" loading="lazy"></iframe>
                            
                            
                            

              <!--<img src="{{asset('storage/Toko/'.$tokos->lambang_toko)}}" alt="" style = "width:500px;">-->
              <!--          </div>-->



                    </div>
                    <br>

            </div>
        </header>




@endsection