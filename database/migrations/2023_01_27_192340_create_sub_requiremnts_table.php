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
        Schema::create('sub_requiremnts', function (Blueprint $table) {
            $table->increments('idSubRequire');
            $table->integer('idServ')->unsigned();
            $table->integer('idGender')->unsigned();
            $table->boolean('isfamely')->default(false);
            $table->integer('idMartial')->unsigned();
            $table->integer('moreThanAge');
            $table->integer('LessThanAge');
            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('idGender')->references('idGender')->on('genders');
            $table->foreign('idMartial')->references('idMartial')->on('martial_statuses');

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
        Schema::dropIfExists('sub_requiremnts');
    }
};
