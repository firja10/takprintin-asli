<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Kertas;


class LandingController extends Controller
{



public function index()
    {
        //
                //
  $pembelis = Pembeli::all();
                # code...
  return view('admin.pembeli',compact('pembelis'));


    }






    public function landing()
    {
        return view('landing');
    }


    //
    public function pemesanan()
    {
        # code...

        // $tokos = Toko::all();
        // return view('pemesans', compact('tokos'));


        $tokos = DB::table('tokos')->paginate(10);

    		// mengirim data tokos ke view index
		return view('pemesans',['tokos' => $tokos]);
    }






    public function searchnama(Request $request)
    {
        # code...
        $searchnama = $request->get('searchnama');
        $tokos = DB::table('tokos')->where('nama_toko','like',"%".$searchnama."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }





    public function searchlokasi(Request $request)
    {
        # code...
        $searchlokasi = $request->get('searchlokasi');
        $tokos = DB::table('tokos')->where('alamat_toko','like',"%".$searchlokasi."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }







    public function searchopen(Request $request)
    {
        # code...
        $searchopen = $request->get('searchopen');
            //     $tokos = new Toko;
            // $from = date('$tokos->waktu_buka');
            // $to = date('$tokos->waktu_tutup');





        $tokos = DB::table('tokos')->where('open','like',"%".$searchopen."%")->paginate();


        // $antara = Toko::whereBetween('waktu', [$from, $to])->get();



        // $tokos = DB::table('tokos')->where($antara,'like',"%".$searchopen."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }



    public function searchbuka(Request $request)
    {



        $searchbuka = $request->get('searchbuka');

        $tokos = DB::table('tokos')->where('waktu_buka','like',"%".$searchbuka."%")->paginate();


        // $antara = Toko::whereBetween('waktu', [$from, $to])->get();



        // $tokos = DB::table('tokos')->where($antara,'like',"%".$searchopen."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }



    public function searchtutup(Request $request)
    {



        $searchtutup = $request->get('searchtutup');


        $tokos = DB::table('tokos')->where('waktu_tutup','like',"%".$searchtutup."%")->paginate();


        // $antara = Toko::whereBetween('waktu', [$from, $to])->get();



        // $tokos = DB::table('tokos')->where($antara,'like',"%".$searchopen."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }





















    public function pemesananspesifik($id, Toko $tokos)
    {
        # code...

        $kertas = new Kertas;
        $tokos = Toko::findOrFail($id);
        $data = $kertas->where('toko_id', $id)->get();
        return view('pemesananspesifik', compact('tokos','data'));
    }


    public function keranjang()
    {
        # code...

        // $users = User::get();
        // $pembelis= DB::table('pembelis')->where('user_id', '=', $users->id);
        // $pembelis = Pembeli::all();

        // return view('keranjang', compact('pembelis'));

        // $user = User::get();

        // return view('keranjang', compact('pembelis'));

        $pembelis = new Pembeli;
        $user_id = Auth::id();
        $data = $pembelis->where('user_id', $user_id)->get();
        return view('keranjang', compact('data'));


    }


    public function keranjangspesifik($id, Pembeli $pembelis)
    {
        # code...

        $pembelis = Pembeli::findOrFail($id);
        // $toko_id = Toko::id()

        return view('keranjangspesifik', compact('pembelis'));
    }


    public function rincianspesifik($id, Pembeli $pembelis)
    {
        # code...

        $pembelis = Pembeli::findOrFail($id);
        return view('rincian', compact('pembelis'));
    }



    public function updaterincian(Request $request, Pembeli $pembelis, $id)
    {

    $pembelis = Pembeli::where('id', $id)->update([

            'pembayaran' => $request['pembayaran'],
            'status_pembayaran' => 0,
            'pengantar' => $request['pengantar'],

        ]);

        return redirect('pembayaran/'.$id)->with('update-pembeli','Data Berhasil Terupdate');



    }




    public function konfirmasipembayaran($id, Pembeli $pembelis)
    {
        # code...

        $pembelis = Pembeli::findOrFail($id);
        return view('pembayaran', compact('pembelis'));
    }





    public function indexpembeli()
    {
        //
                //
  $pembelis = Pembeli::all();
                # code...
  return view('admin.pembeli',compact('pembelis'));


    }




    public function updatepembayaran(Request $request, Pembeli $pembelis, $id)
    {


        if($request->hasFile('bukti_pembayaran')){
            $bukti_bayar = $request["bukti_pembayaran"]->getClientOriginalName();

            if( Pembeli::find($id)->bukti_pembayaran ){
                Storage::delete('/public/storage/Pembeli/'.Pembeli::find($id)->bukti_pembayaran);
            }
            $request["bukti_pembayaran"]->storeAs('Pembeli', $bukti_bayar, 'public');
        }else{
            $bukti_bayar=Pembeli::find($id)->bukti_pembayaran;
        }


    $pembelis = Pembeli::where('id', $id)->update([

            'bukti_pembayaran' => $bukti_bayar,
            'status_pembayaran' => 1,

        ]);

        return redirect('pembayaran/'.$id)->with('update-pembeli','Data Berhasil Terupdate');



    }







    public function updateadminpembayaran(Pembeli $pembelis, $id)
    {



    $pembelis = Pembeli::where('id', $id)->update([

            'status_pembayaran' => 2,

        ]);

        return redirect('admin/informasi-pembeli')->with('update-pembeli','Data Berhasil Terupdate');



    }










    public function Editpembayaran(Pembeli $pembelis, $id)
    {


        $pembelis = Pembeli::findOrFail($id);
        // $toko_id = Toko::id()

        return view('upload-pembayaran', compact('pembelis'));

    }



    public function progressproduk(Pembeli $pembelis, $id)
    {


        $pembelis = Pembeli::findOrFail($id);
        // $toko_id = Toko::id()

        return view('progress', compact('pembelis'));

    }


    public function updateprogress(Request $request, Pembeli $pembelis, $id)
    {

        if($request->hasFile('bukti_progress')){
            $bukti_progressan = $request["bukti_progress"]->getClientOriginalName();

            if( Pembeli::find($id)->bukti_progress ){
                Storage::delete('/public/storage/Pembeli/'.Pembeli::find($id)->bukti_progress);
            }
            $request["bukti_progress"]->storeAs('Pembeli', $bukti_progressan, 'public');
        }else{
            $bukti_progressan=Pembeli::find($id)->bukti_progress;
        }


        $pembelis = Pembeli::where('id', $id)->update([
            // 'progress' => 0,
            'progress' => 1,
            'bukti_progress' => $bukti_progressan,


        ]);

        return redirect('progress/'.$id)->with('update-pembeli','Data Berhasil Terupdate');
    }



    public function verifprogress(Request $request, Pembeli $pembelis, $id)
    {


        $pembelis = Pembeli::where('id', $id)->update([
            'progress' => 2,


        ]);

        return redirect('admin/informasi-progress')->with('update-pembeli','Data Berhasil Terupdate');
    }





    public function editrating(Pembeli $pembelis, $id)
    {

        $pembelis = Pembeli::findOrFail($id);
        // $toko_id = Toko::id()

        return view('berirating', compact('pembelis'));

    }



    public function updaterating(Request $request, Pembeli $pembelis, $id)
    {

        $pembelis = Pembeli::where('id', $id)->update([
            'bintang_rating' => $request['bintang_rating'],


        ]);

        return redirect('pemberian-rating/'.$id)->with('update-pembeli','Data Berhasil Terupdate');

    }











    public function kumpulanprogress()
    {
        //
                //
  $pembelis = Pembeli::all();
//   $user_id = Auth::id();
//   $data = $pembelis->where('user_id', $user_id)->get();

  return view('admin.progress',compact('pembelis'));


    }


    public function daftaruser()
    {
        //
                //
  $user = User::all();
//   $user_id = Auth::id();
//   $data = $pembelis->where('user_id', $user_id)->get();

  return view('admin.daftar-user',compact('user'));


    }



    public function jadikanadmin(Request $request, User $user, $id)
    {

        $user = User::where('id', $id)->update([
            'is_admin' => 1,


        ]);

        return redirect('admin/daftar-user')->with('update-pembeli','Data Berhasil Terupdate');

    }









    public function downloadfile($id)
    {

     $pembelis = Pembeli::where('id',$id)->firstorFail();
     $penyimpanan = storage_path('app/public/Pembeli/' . $pembelis->file);
     return response()->download($penyimpanan);



    }


        public function updatejam(Request $request, Toko $tokos)
        {
        $tokos = new Toko;
            $from = date('$tokos->waktu_buka');
            $to = date('$tokos->waktu_tutup');


            $sekarang = date('H:i:s');
            if($from < $sekarang && $to > $sekarang)
            {
                // $tokos = Toko::where('id',$id)->update(
                //     [
                //         'open'=>'open',

                //         ]);

             $tokos =  DB::table('tokos')->update(array('open'=>1));



            }

            else {
                // $tokos = Toko::where('id',$id)->update(
                //     [
                //         'open'=>'close',

                //         ]);


                $tokos =  DB::table('tokos')->update(array('open'=>0));



            }

                    //   $tokos = Toko::where('id',$id)->update(
                    // [
                    //     'open'=>$request['open'],

                    //     ]);


            return redirect('/pemesanan',compact('tokos'));



        }




    public function hapusorder(Pembeli $pembeli, $id){
        $pembelis = Pembeli::findorFail($id);
        $pembelis->delete();
        return redirect('/admin/informasi-pembeli');
    }









}
