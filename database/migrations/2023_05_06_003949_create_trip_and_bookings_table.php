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
        Schema::create('trip_and_bookings', function (Blueprint $table) {
            $table->integer('idTrips')->unsigned();
            $table->integer('idBooking')->unsigned();
            $table->date('dateGo');
            $table->date('dataBack')->nullable();

            // $table->primary(['idTrips', 'idBooking'], 'PrimarytripAndBooking');
            $table->foreign('idTrips')->references('idTrips')->on('trips');
            $table->foreign('idBooking')->references('idBooking')->on('trips_bookings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_and_bookings');
    }
};
