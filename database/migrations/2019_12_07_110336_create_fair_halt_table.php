<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFairHaltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fair_halt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amount');
            $table->timestamps();

            $table->integer('fair_id')->unsigned();
            $table->integer('halt_id')->unsigned();

            $table->foreign('fair_id')->references('id')->on('fairs');
            $table->foreign('halt_id')->references('id')->on('halts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fair_halt');
    }
}
