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
        Schema::create('services_companies', function (Blueprint $table) {
            $table->integer('idCompanes')->unsigned()->index('indexTableSubRequitemnt');
            $table->integer('idServ')->unsigned();


            $table->primary(['idServ', 'idCompanes',], 'PrimaryKeyServices_Companies');

            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('idCompanes')->references('idCompanes')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_companies');
    }
};
