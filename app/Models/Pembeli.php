<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembelis';

    protected $fillable = [
        'nama_file', 'telepon', 'email', 'file', 'kategori', 'jenis_kertas', 'ukuran_kertas', 'jumlah_halaman', 'catatan', 'nama_toko', 'pembayaran','peta_toko',
    ];


    public function toko()
    {
        # code...
        return $this->belongsTo(Toko::class);
    }

    public function user()
    {
        # code...
        // return $this->hasMany(User::class);
        return $this->belongsTo(User::class);
    }

    



}
