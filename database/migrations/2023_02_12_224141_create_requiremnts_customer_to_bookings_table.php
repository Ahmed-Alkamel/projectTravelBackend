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
        Schema::create('requiremnts_customer_Trip_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDetailsTripBooking')->unsigned();

            $table->integer('idMainRequire')->unsigned()->nullable();
            $table->integer('idSubReqDetail')->unsigned()->nullable();
            $table->String('textValue', 255)->nullable();
            $table->integer('idTypeFiled');
            $table->text('urlFile')->nullable();
            $table->integer('idChoice')->nullable();

            $table->integer('idState')->unsigned()->default(1);

            $table->foreign('idState')->references('id')->on('state_requerments');
            $table->foreign('idMainRequire')->references('idMainRequire')->on('main_requiremnts');
            $table->foreign('idSubReqDetail')->references('idSubReqDetail')->on('sub_requiremnts_details');

            $table->foreign('idDetailsTripBooking')->references('idDetailsTripBooking')->on('trip_booking_details');
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
        Schema::dropIfExists('requiremnts_customer_to_bookings');
    }
};
