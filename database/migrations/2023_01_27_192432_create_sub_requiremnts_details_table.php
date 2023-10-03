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
        Schema::create('sub_requiremnts_details', function (Blueprint $table) {
            $table->increments('idSubReqDetail');
            $table->integer('idSubRequire')->unsigned()->index('indexTableSubRequitemnt');
            $table->integer('idTypeFild')->unsigned();


            $table->text('textRerequiremnts');
            $table->boolean('isActive')->default(true);

            $table->foreign('idSubRequire')->references('idSubRequire')->on('sub_requiremnts');
            $table->foreign('idTypeFild')->references('idTypeFild')->on('type_of_filds');


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
        Schema::dropIfExists('sub_requiremnts_details');
    }
};
