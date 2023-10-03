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
        Schema::create('customer_requests', function (Blueprint $table) {
            $table->increments('idCustomerRequsts');
            $table->integer('idServ')->unsigned();
            $table->integer('idState')->unsigned()->default(1);
            // $table->integer('idTrips')->unsigned()->nullable();
            $table->integer('idCus')->unsigned();
            $table->integer('idEmp')->unsigned()->nullable();



            // $table->foreign('idTrips')->references('idTrips')->on('trips');
            $table->foreign('idCus')->references('idCus')->on('customers');
            $table->foreign('idState')->references('id')->on('state_requests');
            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('idEmp')->references('idEmp')->on('employees');

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
        Schema::dropIfExists('customer_requests');
    }
};
