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
        Schema::create('services_and_identifies', function (Blueprint $table) {
            $table->integer('idServ')->unsigned();
            $table->integer('idIdentity')->unsigned();
            $table->primary(['idServ', 'idIdentity']);
            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('idIdentity')->references('id')->on('identity_types');


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
        Schema::dropIfExists('services_and_identifies');
    }
};
