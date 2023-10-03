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
        Schema::create('employee_names', function (Blueprint $table) {
            $table->integer('idEmp')->unsigned();
            $table->string('frisName', 50);
            $table->string('lastName', 50);
            $table->string('surName', 50);
            $table->primary(['frisName', 'lastName', 'surName'], 'primaryKeyEmployeeName');
            $table->foreign('idEmp')->references('idEmp')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_names');
    }
};
