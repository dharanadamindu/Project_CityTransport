<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->timestamps();

            $table->foreign('bus_id')->references('id')->on('buses');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_employees');
    }
}
