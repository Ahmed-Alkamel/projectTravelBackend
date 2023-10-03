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
        Schema::create('choice_sub_requerments', function (Blueprint $table) {
            $table->increments('idChooseSub');
            $table->integer('idSubReqDetail')->unsigned();
            $table->string('containt');

            $table->foreign('idSubReqDetail')->references('idSubReqDetail')->on('sub_requiremnts_details');

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
        Schema::dropIfExists('choose_sub_requerments');
    }
};
