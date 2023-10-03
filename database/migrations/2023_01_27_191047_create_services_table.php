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
        Schema::create('services', function (Blueprint $table) {
            $table->increments('idServ');
            $table->string('serviceName', 250);

            // $table->integer('evaluate')->unsigned()->default(1);
            $table->integer('idCategoryMain')->unsigned();
            $table->text('pathImage')->default('serviceimage645a9fd93b28fservicesPublic.svg')->nullable();
            $table->foreign('idCategoryMain')->references('idCategoryMain')->on('categories_services_mains');
            $table->boolean('isActive')->default(true);
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
        Schema::dropIfExists('services');
    }
};
