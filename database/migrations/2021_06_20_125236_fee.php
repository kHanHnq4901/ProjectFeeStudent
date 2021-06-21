<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fee', function (Blueprint $table) {
            $table->increments('idFee');
            $table->unsignedInteger('idStudent');
            $table->foreign('idStudent')->references('idStudent')->on('student');
            $table->unsignedInteger('paymentOption');
            $table->foreign('paymentOption')->references('idPaymentOption')->on('PaymentOption');
            $table->unsignedInteger('scholarship');
            $table->unsignedInteger('additionalFee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Fee');
    }
}
