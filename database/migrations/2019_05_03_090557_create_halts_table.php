<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('haddress')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('description')->nullable();
            $table->longText('timetable')->nullable();
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
        Schema::dropIfExists('halts');
    }
}
