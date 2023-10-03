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
        Schema::create('requerment_custommer_services_bookinngs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idServiceBookDetails')->unsigned();


            $table->integer('idMainRequire')->unsigned()->nullable();
            $table->integer('idSubReqDetail')->unsigned()->nullable();
            $table->String('textValue', 255)->nullable();
            $table->integer('idTypeFiled');
            $table->text('urlFile')->nullable();
            $table->integer('idChoice')->nullable();

            $table->integer('stateOfRequiremnt')->default(1);
            $table->integer('idState')->unsigned()->default(1);

            $table->foreign('idState')->references('id')->on('state_requerments');
            $table->foreign('idMainRequire')->references('idMainRequire')->on('main_requiremnts');
            $table->foreign('idSubReqDetail')->references('idSubReqDetail')->on('sub_requiremnts_details');


            $table->foreign('idServiceBookDetails', 'fkRequerCustServiceBook')->references('idServiceBookDetails')->on('services_bookinng_details');
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
        Schema::dropIfExists('requerment_custommer_services_bookinngs');
    }
};
