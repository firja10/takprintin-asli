<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infojurusan extends Model
{
    // use HasFactory;
    public function infokampuses(){
        return $this->belongsTo(Infokampus::class);

    }
}
