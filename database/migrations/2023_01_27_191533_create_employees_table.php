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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('idEmp');
            $table->String('numberPhone', 15)->unique('NumberPhoneCompaniesUnique');
            $table->string('address');
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->boolean('isActive')->default(true);
            $table->integer('salary');

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
        Schema::dropIfExists('employees');
    }
};
