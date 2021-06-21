<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToTokos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokos', function (Blueprint $table) {
            //
            $table->integer('pembeli_id')->nullable();
            $table->foreign('pembeli_id')->references('id')->on('pembelis')
            ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokos', function (Blueprint $table) {
            //
            $table->dropForeign('lists_pembeli_id_foreign');
            // $table->dropForeign(['pembeli_id']);
            $table->dropColumn(['pembeli_id']);
        });
    }
}
