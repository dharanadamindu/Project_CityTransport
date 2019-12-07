<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_rs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('routeNo');
            $table->string('startLocation');
            $table->string('endLocation');
            $table->longText('halts');
            $table->integer('distance');
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
        Schema::dropIfExists('route_rs');
    }
}
