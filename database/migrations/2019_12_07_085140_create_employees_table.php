<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('role');
//            $table->string('b_regno');
            $table->string('nic');
            $table->char('gender');
            $table->string('contactno');
            $table->date('bdate');

            $table->timestamps();

//             $table->foreign('nic')->references('id')->on('employees')->onDelete('cascade');
//            $table->foreign('b_regno')->references('id')->on('buses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
