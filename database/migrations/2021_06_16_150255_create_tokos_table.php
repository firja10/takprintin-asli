<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko')->nullable();
            $table->string('alamat_toko')->nullable();
            $table->string('lambang_toko')->nullable();
            $table->string('jenis_kertas')->nullable();
            $table->string('ukuran_kertas')->nullable();
            $table->longtext('harga')->nullable();
            $table->string('open')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokos');
    }
}
