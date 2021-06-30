<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'tokos';
    protected $fillable = [
        'nama_toko', 'alamat_toko', 'jenis_kertas', 'ukuran_kertas', 'harga', 'open', 'lambang_toko','waktu_buka','waktu_tutup','peta',
    ];

    public function pembeli()
    {
        # code...
        return $this->hasMany(Pembeli::class);
    }


}
