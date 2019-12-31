<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutetimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routetimes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('trip_time');
            $table->timestamps();

            $table->integer('bus_id')->unsigned()->default(0);
//            $table->integer('route_id')->unsigned()->default(0);

            $table->foreign('bus_id')->references('id')->on('buses');
//            $table->foreign('route_id')->references('id')->on('route_rs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routetimes');
    }
}
