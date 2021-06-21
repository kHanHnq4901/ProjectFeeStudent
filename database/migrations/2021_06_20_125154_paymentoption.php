<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paymentoption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PaymentOption', function (Blueprint $table) {
            $table->increments('idPaymentOption');
            $table->string('namePaymentOption', 50);
            $table->unsignedInteger('Fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PaymentOption');
    }
}
