<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\Kertas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                //
  $pembelis = Pembeli::all();
                # code...
  return view('pemesananspesifik',compact('pembelis'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pemesananspesifik');

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



        // if($request->hasFile('file')){
        //     $filename = $request["file"]->getClientOriginalName();

        //     if( Pembeli::find($id)->file ){
        //         Storage::delete('/public/img/Pembeli/'.Pembeli::find($id)->file);
        //     }
        //     $request["file"]->storeAs('Pembeli', $filename, 'public');
        // }else{
        //     $filename=Pembeli::find($id)->file;
        // }




        // Pembeli::create([
        //     'nama_file' => $request['nama_file'],
        //     'catatan' => $request['catatan'],
        //     'jumlah_halaman' => $request['jumlah_halaman'],
        //     'ukuran_kertas' => $request['ukuran_kertas'],
        //     'jenis_kertas' => $request['jenis_kertas'],
        //     'nama_toko' => $request['nama_toko'],
        //     'kategori' => $request['kategori'],
        //     'email' => $request['email'],
        //     'email' => $request['email'],
        //     'file' => $filename,

        // ]);

        // return redirect('pemesanan')->with('success','Kampus Sudah Terdaftar');



        // Pembeli::create($request->all());

        // return redirect('keranjang')->with('success','Kampus Sudah Terdaftar');


        $data = new Pembeli;

        if($request->hasFile('file')){
            $filename = $request["file"]->getClientOriginalName();

            if( $data->file ){
                Storage::delete('/public/storage/Pembeli/'.Auth::user()->file);
            }
            $request["file"]->storeAs('Pembeli', $filename, 'public');
        }else{
            $filename=$data->file;
        }


        // if($request->hasFile('lambangkampus')){
        //     $filename = $request["lambangkampus"]->getClientOriginalName();

        //     if( Infokampus::find($id)->lambangkampus ){
        //         Storage::delete('/public/storage/infokampus/'.Infokampus::find($id)->lambangkampus);
        //     }
        //     $request["lambangkampus"]->storeAs('infokampus', $filename, 'public');
        // }else{
        //     $filename=Infokampus::find($id)->lambangkampus;
        // }







        
        $data->nama_file = $request['nama_file'];
        $data->email = $request['email'];
        $data->kategori = $request['kategori'];
        $data->jenis_kertas = $request['jenis_kertas'];
        $data->ukuran_kertas = $request['ukuran_kertas'];
        $data->catatan = $request['catatan'];
        $data->jumlah_halaman = $request['jumlah_halaman'];
        $data->nama_toko = $request['nama_toko'];
        // $data->harga = $request['harga'];
        $data->telepon = $request['telepon'];
        $data->pembayaran = $request['pembayaran'];
        // $data->status_pembayaran = $request['status_pembayaran'];
        $data->status_pembayaran = 0;
        $data->bukti_pembayaran = $request['bukti_pembayaran'];
        $data->progress = $request['progress'];
        $data->file = $filename;
        $data->user_id = Auth::id();


        $pisah = explode(" - ", $data->jenis_kertas);
        $pisah2 = array_reverse($pisah);
        $per_lembar = floatval($pisah2[0]);
        $pangaos = $data->jumlah_halaman;
        $angka = $pangaos*$per_lembar + 1;
        $total_asli = number_format($angka);
        $total = number_format($pangaos*$per_lembar);
        
        $data->harga = $total;
        $data->harga_asli = $total_asli;





        $data->save();

        // Alert::success('Berhasil!', 'Pembeli baru berhasil ditambahkan!');

        return redirect('/keranjang');
        // ->with('success', 'Pembeli baru berhasil ditambahkan!');




        // $request->validate([
        //     'nama_file' => 'required',
        //     'catatan' => 'required',
        //     'jumlah_halaman' => 'required',
        //     'ukuran_kertas' => 'required',
        //     'jenis_kertas' => 'required',
        //     'email' => 'required',
        //     'kategori' => 'required',
        //     'email' => 'required',
        //     'file' => 'required|file|mimes:jpeg,png,pdf,jpg,gif,svg|max:2048',
        //     'nama_toko' => 'required',
        //     ]);
        //     if ($files = $request->file('file')) {
        //     $destinationPath = 'public/file/'; // upload path
        //     $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profilefile);
        //     $insert['file'] = "$profilefile";
        //     }
        //     $insert['nama_file'] = $request->get('nama_file');
        //     $insert['catatan'] = $request->get('catatan');
        //     $insert['jumlah_halaman'] = $request->get('jumlah_halaman');
        //     $insert['ukuran_kertas'] = $request->get('ukuran_kertas');
        //     $insert['jenis_kertas'] = $request->get('jenis_kertas');
        //     $insert['email'] = $request->get('email');
        //     $insert['kategori'] = $request->get('kategori');
        //     $insert['email'] = $request->get('email');
        //     $insert['nama_toko'] = $request->get('nama_toko');

        //    Pembeli::create($request->all());
        //     return redirect('pemesanan')->with('success','Greate! Product created successfully.');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(Pembeli $pembeli, $id)
    {
        //
        $pembelis = Pembeli::findOrFail($id);
        return view('keranjangspesifik',compact('pembelis'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembeli $pembeli, $id)
    {
        //
        $pembelis = Pembeli::findOrFail($id);
        return view('keranjangspesifik',compact('pembelis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembeli $pembelis, $id)
    {
        //

            if($request->hasFile('file')){
            $filename = $request["file"]->getClientOriginalName();

            if( Pembeli::find($id)->file ){
                Storage::delete('/public/storage/Pembeli/'.Pembeli::find($id)->file);
            }
            $request["file"]->storeAs('Pembeli', $filename, 'public');
        }else{
            $filename=Pembeli::find($id)->file;
        }

    $pembelis = Pembeli::where('id', $id)->update([

            'file' => $filename,
            // 'file' => $request['file'],
            // 'pembayaran' => $request['pembayaran'],

        ]);

        return redirect('keranjang')->with('update-pembeli','Data Berhasil Terupdate');


    // $input = $request->all();

    // if ($file = $request->file('file')) {
    //     $destinationPath = 'public/img/';
    //     $profilefile = date('YmdHis') . "." . $file->getClientOriginalExtension();
    //     $file->move($destinationPath, $profilefile);
    //     $input['file'] = "$profilefile";
    // }else{
    //     unset($input['file']);
    // }

    // $pembelis->update($input);

    // return redirect()->route('keranjang')
    //                 ->with('success','Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembeli $pembelis, $id)
    {
        //


        $pembelis = Pembeli::findOrFail($id);
        $pembelis->delete();
        return redirect('keranjang')->with('hapus-infokampus','infokampus Sudah terhapus');

    }
}
