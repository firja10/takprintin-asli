<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembelis';

    protected $fillable = [
        'nama_file', 'telepon', 'email', 'file', 'kategori', 'jenis_kertas', 'ukuran_kertas', 'jumlah_halaman', 'catatan', 'nama_toko', 'pembayaran',
    ];


    public function toko()
    {
        # code...
        return $this->belongsTo(Toko::class);
    }



}
