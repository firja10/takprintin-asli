<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPengantarToPembelis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembelis', function (Blueprint $table) {
            //
            $table->string('pengantar')->after('bukti_progress')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembelis', function (Blueprint $table) {
            //
            $table->dropColumn(['pengantar']);
        });
    }
}
