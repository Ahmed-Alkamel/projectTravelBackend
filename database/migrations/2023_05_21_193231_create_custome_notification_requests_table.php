<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custome_notification_requests', function (Blueprint $table) {
            $table->integer('idCustomerRequsts')->unsigned();
            $table->dateTime('enterDate');
            $table->dateTime('exitDate');
            $table->integer('idCus')->unsigned();

            $table->foreign('idCustomerRequsts')->references('idCustomerRequsts')->on('customer_requests');
            $table->foreign('idCus')->references('idCus')->on('customers');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custome_notification_requests');
    }
};
