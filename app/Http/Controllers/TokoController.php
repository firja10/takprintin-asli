<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pembeli;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tokos = Toko::all();
        return view('admin.toko', compact('tokos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.toko');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Toko::create($request->all());

        return redirect('admin/informasi-toko')->with('success','Toko Sudah Terdaftar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $tokos, $id)
    {
        //
        return view('admin.edittoko',compact('tokos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Toko $tokos)
    {
        //
            // $user = Auth::user();
            $tokos = Toko::findOrFail($id);
            // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
            return view('admin.edittoko',compact('tokos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $tokos, $id)
    {
        //
        if($request->hasFile('lambang_toko')){
            $filename = $request["lambang_toko"]->getClientOriginalName();

            if( Toko::find($id)->lambang_toko ){
                Storage::delete('/public/storage/Toko/'.Toko::find($id)->lambang_toko);
            }
            $request["lambang_toko"]->storeAs('Toko', $filename, 'public');
        }else{
            $filename=Toko::find($id)->lambang_toko;
        }



        $tokos = Toko::where('id', $id)->update([
            'nama_toko' => $request['nama_toko'],
            'alamat_toko' => $request['alamat_toko'],
            'jenis_kertas' => $request['jenis_kertas'],
            'ukuran_kertas' => $request['ukuran_kertas'],
            'harga' => $request['harga'],
            'open' => $request['open'],
            'waktu_buka' => $request['waktu_buka'],
            'waktu_tutup' => $request['waktu_tutup'],
            'lambang_toko' => $filename
        ]);

        // Session::flash('sukses','Data Sudah Terupdate');
        return redirect('admin/informasi-toko')->with('update-Toko','Data Berhasil Terupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $tokos, $id)
    {
        //
        $tokos = Toko::findOrFail($id);
        $tokos->delete();
        return redirect('admin/informasi-toko')->with('hapus-informasi-toko','informasi toko Sudah terhapus');

    }





    public function addpembeli()
    {
        # code...



    }







}
