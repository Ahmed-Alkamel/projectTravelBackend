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
        Schema::create('choice_main_requerments', function (Blueprint $table) {
            $table->increments('idChooseMain');
            $table->integer('idMainRequire')->unsigned();
            $table->string('containt');

            $table->foreign('idMainRequire')->references('idMainRequire')->on('main_requiremnts');

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
        Schema::dropIfExists('choose_main_requerments');
    }
};
