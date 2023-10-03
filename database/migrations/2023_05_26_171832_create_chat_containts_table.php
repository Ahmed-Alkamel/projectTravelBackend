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
        Schema::create('chat_containts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('containt');
            $table->integer('idChat')->unsigned();
            $table->integer('idEmp')->unsigned()->nullable();
            $table->boolean('isRecive')->default(false);

            $table->foreign('idEmp')->references('idEmp')->on('employees');
            $table->foreign('idChat')->references('id')->on('chats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_containts');
    }
};
