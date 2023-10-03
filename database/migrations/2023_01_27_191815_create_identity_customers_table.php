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
        Schema::create('identity_customers', function (Blueprint $table) {
            $table->increments('ID');
            //  $table->idType
            $table->string('idCard')->nullable();
            $table->date('datePirth');
            $table->integer('idTypeIdentity')->unsigned();

            $table->date('releaseDate')->nullable();
            $table->integer('idGender')->unsigned();
            $table->integer('idMartial')->unsigned();

            $table->foreign('idTypeIdentity')->references('id')->on('identity_types');
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
        Schema::dropIfExists('identity_customers');
    }
};
