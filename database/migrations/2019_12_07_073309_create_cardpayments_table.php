<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cardNo')->nullable()->collation('utf8mb4_bin');
            $table->date('expire');
            $table->string('cvv', 3)->nullable();
            $table->decimal('balance',6,2);
            $table->timestamps();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardpayments');
    }
}
