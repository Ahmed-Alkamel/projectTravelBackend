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
        Schema::create('day_schedulers', function (Blueprint $table) {
            $table->integer('idScheduler')->unsigned();
            $table->integer('idDay')->unsigned();

            $table->foreign('idDay')->references('id')->on('days');
            $table->foreign('idScheduler')->references('idScheduler')->on('scheduler_trips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_schedulers');
    }
};
