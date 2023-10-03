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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('idCus');
            $table->string('nikName', 191)->unique('nikNameUnique');
            $table->string('numberPhone')->unique('numberPhoneCustomerUnique');
            $table->string('emailAddress')->unique('EmailAddressUnique');
            $table->string('password');
            $table->rememberToken();

            $table->timestamp('timeUpdate')->nullable();
            $table->timestamp('timeAdd')->nullable();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
