<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToPembelis extends Migration
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
                
            $table->unsignedBigInteger('user_id')->after('progress')->nullable();
            // $table->bigIncrements('user_id')->after('progress')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::table('pembelis', function (Blueprint $table) {
            //
            // $table->dropForeign(['user_id']);
            $table->dropForeign('user_id');
            $table->dropColumn(['user_id']);

        });
    }
}
