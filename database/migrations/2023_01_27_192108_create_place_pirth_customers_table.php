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
        Schema::create('place_pirth_customers', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->index('indexIdPlacePirthCustomer');
            $table->integer('idcountry')->unsigned();
            $table->integer('idcity')->unsigned();
            $table->foreign('idcountry')->references('id')->on('countries');
            $table->foreign('idcity')->references('idCity')->on('cities');
            $table->foreign('ID')->references('ID')->on('identity_customers');

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
        Schema::dropIfExists('place_pirth_customers');
    }
};
