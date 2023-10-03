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
        Schema::create('notification_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCustomerRequsts')->unsigned()->nullable();
            $table->integer('idNotificationTemplete')->unsigned();
            $table->integer('idCus')->unsigned();
            $table->boolean('isRecive')->default(false);
            $table->foreign('idCus')->references('idCus')->on('customers');
            $table->foreign('idNotificationTemplete')->references('id')->on('notification_templets');
            $table->foreign('idCustomerRequsts')->references('idCustomerRequsts')->on('customer_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_details');
    }
};
