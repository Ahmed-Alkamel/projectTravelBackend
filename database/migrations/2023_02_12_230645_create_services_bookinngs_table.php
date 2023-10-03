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
        Schema::create('services_bookinngs', function (Blueprint $table) {
            $table->increments('idServicesBooking');
            // $table->integer('idServiceDetail')->unsigned();
            $table->integer('idCustomerRequsts')->unsigned()->unique();
            $table->dateTime('bookingServicesDate');
            $table->dateTime('dateEndDurtion')->nullable();

            // $table->integer('idServ')->unsigned();


            // $table->foreign('idServiceDetail')->references('idServiceDetail')->on('services_details');
            $table->foreign('idCustomerRequsts')->references('idCustomerRequsts')->on('customer_requests');
            // $table->foreign('idServ')->references('idServ')->on('services');


            $table->timestamp('timeUpdate')->nullable();
            $table->timestamp('timeAdd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_bookinngs');
    }
};
