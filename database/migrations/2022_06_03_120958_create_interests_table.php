<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('interests', function(Blueprint $table){
        $table->bigInteger('user1_id')->unsigned()->index(); // this is working
        $table->foreign('user1_id')->references('id')->on('users')->onDelete('cascade');
        $table->bigInteger('user2_id')->unsigned()->index(); // this is working
        $table->foreign('user2_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests');
    }
};
