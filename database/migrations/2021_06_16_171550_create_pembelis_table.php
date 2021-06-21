<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_file')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jumlah_halaman')->nullable();
            $table->string('email')->nullable();
            $table->string('file')->nullable();
            $table->string('kategori')->nullable();
            $table->string('jenis_kertas')->nullable();
            $table->string('ukuran_kertas')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->integer('status_pembayaran')->nullable();
            $table->longtext('catatan')->nullable();


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
        Schema::dropIfExists('pembelis');
    }
}
