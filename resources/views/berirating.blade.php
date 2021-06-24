@extends('template')
@section('content')
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style = " background-color:#4696e6;">
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="col-md-12">


                            <h3 style = "color:black;text-align:center;margin-top:30px;font-size:40px;">Terima Kasih telah bertransaksi dengan kami</h2>
                           
                            <br>
                            <center>
                          <div class="col-lg-6">

                          @if($pembelis->bintang_rating == NULL)
                          <p style = "font-size:30px;"> Silakan Pilih Rating </p>
                           <form action="{{route('updaterating',$pembelis->id)}}" enctype="multipart/form-data" method = "POST" >
                           @csrf

                            <!-- <div class="form-group">
                            <label for="bintang_rating"> Silakan Beri Rating Untuk Kami</label>
                          <select name="bintang_rating" id="bintang_rating" class = "form-control">
                          <option value="1"> <span  class = "fa fa-checked" style = "color:yellow"></span> </option>
                          <option value="2">Bintang 2</option>
                          <option value="3">Bintang 3</option>
                          <option value="4">Bintang 4</option>
                          <option value="5">Bintang 5</option>
                          </select> -->
                       
                        <div class="form-group" style = "text-align:left;">
                            <input type="checkbox" id="satu" value="1" name = "bintang_rating">
                            <label for="satu">
                            <span class="fa fa-star checked" style = "color:yellow"></span>
                            </label>
                           </div>
                           

                           <div class="form-group" style = "text-align:left;">
                            <input type="checkbox" id="dua" value="2" name = "bintang_rating">
                            <label for="dua">
                            <span class="fa fa-star checked" style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            </label>
                           </div>


                           <div class="form-group" style = "text-align:left;">
                            <input type="checkbox" id="tiga" value="3" name = "bintang_rating">
                            <label for="tiga">
                            <span class="fa fa-star checked" style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            </label>
                           </div>

                           <div class="form-group" style = "text-align:left;">
                            <input type="checkbox" id="empat" value="4" name = "bintang_rating">
                            <label for="empat">
                            <span class="fa fa-star checked" style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            </label>
                           </div>
                        

                           <div class="form-group" style = "text-align:left;">
                            <input type="checkbox" id="lima" value="5" name = "bintang_rating">
                            <label for="lima">
                            <span class="fa fa-star checked" style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            <span class="fa fa-star checked"style = "color:yellow"></span>
                            </label>
                           </div>
                        
                        




                           <br>
                           <div class="form-group">
                           <button type = "submit" class = "btn btn-success" name = "submit" id = "submit"> Submit Rating </button>
                           </div>
                           </form>

                           @elseif($pembelis->bintang_rating != NULL)
                           <br>
                           <h3 style = "font-size:40px; color:white"> Terima Kasih Atas Pilihan Rating Anda</h3>
                           <p style = "font-size:30px; color:black"> Semoga segala urusan anda dilancarkan </p>

                            @endif


                          
                           </div>
                           </center>





                </div>
            </div>
        </div>
        </header>
@endsection