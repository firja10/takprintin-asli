<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kertas', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('kertas')->nullable();
            $table->string('harga')->nullable();
            $table->unsignedBigInteger('toko_id')->nullable();
            $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('kertas');
    }
}
