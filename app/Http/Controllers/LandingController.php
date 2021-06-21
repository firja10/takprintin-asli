<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class LandingController extends Controller
{


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
        $tokos = DB::table('tokos')->where('open','like',"%".$searchopen."%")->paginate();

        // $pembelis = Pembeli::findOrFail($id);
        return view('pemesans', ['tokos'=>$tokos]);
    }




















    public function pemesananspesifik($id, Toko $tokos)
    {
        # code...

        $tokos = Toko::findOrFail($id);
        return view('pemesananspesifik', compact('tokos'));
    }


    public function keranjang()
    {
        # code...

        $pembelis = Pembeli::all();
        return view('keranjang', compact('pembelis'));
    }


    public function keranjangspesifik($id, Pembeli $pembelis)
    {
        # code...

        $pembelis = Pembeli::findOrFail($id);
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

        ]);

        return redirect('pembayaran/'.$id)->with('update-pembeli','Data Berhasil Terupdate');



    }




    public function konfirmasipembayaran($id, Pembeli $pembelis)
    {
        # code...

        $pembelis = Pembeli::findOrFail($id);
        return view('pembayaran', compact('pembelis'));
    }


















}
