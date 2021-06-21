<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infokampus extends Model
{
    // use HasFactory;
    protected $table = 'infokampuses';
    protected $fillable = [
        'namakampus', 'alamatkampus', 'lambangkampus'
    ];

    public function infojurusans(){
        return $this->hasMany(Infojurusan::class);

    }
}
