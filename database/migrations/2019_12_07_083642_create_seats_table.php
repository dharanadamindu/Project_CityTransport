<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('seatNo');
            $table->string('status')->default(0);  //reserve|not
            $table->longText('comment');
            $table->timestamps();

            $table->integer('user_id')->unsigned()->default(1);
            $table->integer('bus_id')->unsigned()->default(1);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bus_id')->references('id')->on('buses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seats');
    }
}
