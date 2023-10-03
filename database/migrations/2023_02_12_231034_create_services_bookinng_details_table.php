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
        Schema::create('services_bookinng_details', function (Blueprint $table) {
            $table->increments('idServiceBookDetails');
            $table->integer('idServicesBooking')->unsigned();
            $table->integer('identityCustmerId')->unsigned();
            $table->double('price');
            $table->foreign('identityCustmerId')->references('ID')->on('identity_customers');
            $table->foreign('idServicesBooking')->references('idServicesBooking')->on('services_bookinngs');
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
        Schema::dropIfExists('services_bookinng_details');
    }
};
