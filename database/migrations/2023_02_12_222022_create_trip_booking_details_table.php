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
        Schema::create('trip_booking_details', function (Blueprint $table) {
            $table->increments('idDetailsTripBooking');
            $table->integer('idBooking')->unsigned();
            $table->integer('identityCustmerId')->unsigned();
            // $table->integer('idSubRequire')->unsigned();
            $table->double('price');
            $table->foreign('identityCustmerId')->references('ID')->on('identity_customers');
            $table->foreign('idBooking')->references('idBooking')->on('trips_bookings');
            // $table->foreign('idSubRequire')->references('idSubRequire')->on('sub_requiremnts');
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
        Schema::dropIfExists('trip_booking_details');
    }
};
