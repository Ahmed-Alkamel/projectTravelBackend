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
        Schema::create('customer_names', function (Blueprint $table) {
            $table->integer('idCusIdentity')->unsigned();
            $table->string('frisName', 50);
            $table->string('lastName', 50);
            $table->string('surName', 50);
            $table->primary(['frisName', 'lastName', 'surName'], 'primaryKeyCustomerName');
            $table->foreign('idCusIdentity')->references('ID')->on('identity_customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_names');
    }
};
