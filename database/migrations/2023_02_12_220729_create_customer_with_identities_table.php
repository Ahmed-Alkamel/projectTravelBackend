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
        Schema::create('customer_with_identities', function (Blueprint $table) {
            $table->integer('identityCustmerId')->unsigned();
            $table->integer('idCus')->unsigned();
            $table->boolean('isMe')->default(false);
            // $table->primary(['idCus']);
            $table->foreign('idCus')->references('idCus')->on('customers');
            $table->foreign('identityCustmerId')->references('ID')->on('identity_customers');
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
        Schema::dropIfExists('customer_with_identities');
    }
};
