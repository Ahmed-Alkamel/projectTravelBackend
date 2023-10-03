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
        Schema::create('scheduler_trips', function (Blueprint $table) {
            $table->increments('idScheduler');
            $table->integer('idMethod')->unsigned();
            $table->integer('idTrips')->unsigned();
            $table->integer('atCount')->unsigned()->default(1);
            $table->foreign('idMethod')->references('id')->on('method_schedulers');
            $table->foreign('idTrips')->references('idTrips')->on('trips');

            // $table->time('time');
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
        Schema::dropIfExists('scheduler_trips');
    }
};
