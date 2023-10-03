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
        Schema::create('services_details', function (Blueprint $table) {

            $table->integer('idServ')->unsigned()->unique();
            $table->integer('idCurren')->unsigned();
            $table->increments('idServiceDetail');
            $table->double('priceService');

            // $table->integer('DurationOfServiceByDays')->nullable();
            // $table->string('lineServices')->nullable();
            $table->foreign('idCurren')->references('id')->on('currencies');
            $table->foreign('idServ')->references('idServ')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_details');
    }
};
