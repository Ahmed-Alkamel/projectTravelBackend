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
        Schema::create('trips_bookings', function (Blueprint $table) {
            $table->increments('idBooking');
            $table->integer('idCustomerRequsts')->unsigned();

            $table->integer('idPlan')->unsigned();
            $table->dateTime('BookingTime');




            $table->foreign('idCustomerRequsts')->references('idCustomerRequsts')->on('customer_requests');
            $table->foreign('idPlan')->references('id')->on('plan_trips');

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
        Schema::dropIfExists('trips_bookings');
    }
};
