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
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('idTrips');
            $table->integer('idCompany')->unsigned();
            // $table->bigInteger('idCompanTrip');
            $table->integer('idServ')->unsigned();
            $table->integer('fromCity')->unsigned();
            $table->integer('toCity')->unsigned();
            $table->integer('idCurrencies')->unsigned();
            // $table->string('level');
            $table->time('timeLeave')->default(now());

            $table->double('price');
            $table->integer('availableSeats')->nullable();
            // $table->date('startingDate');
            // $table->string('ltinerary');
            $table->boolean('isActive')->default(false);
            $table->foreign('idCompany')->references('idCompanes')->on('companies');
            $table->foreign('fromCity')->references('idCity')->on('cities');
            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('toCity')->references('idCity')->on('cities');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
};
