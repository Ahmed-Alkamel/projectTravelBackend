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
        Schema::create('permisson_and_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPermisson')->unsigned();
            $table->integer('idEmp')->unsigned();
            $table->boolean('allow')->default(false);
            $table->boolean('deny')->default(true);
            $table->foreign('idEmp')->references('idEmp')->on('employees');
            $table->foreign('idPermisson')->references('id')->on('permisson_employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisson_and_employees');
    }
};
