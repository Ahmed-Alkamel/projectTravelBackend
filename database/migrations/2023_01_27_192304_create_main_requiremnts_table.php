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
        Schema::create('main_requiremnts', function (Blueprint $table) {
            $table->increments('idMainRequire');
            $table->integer('idServ')->unsigned();
            $table->integer('idTypeFile')->unsigned();
            $table->text('nameRequirment');
            $table->integer('idMainRequireSub')->unsigned()->nullable();
            $table->boolean('isActive')->default(true);
            $table->foreign('idServ')->references('idServ')->on('services');
            $table->foreign('idTypeFile')->references('idTypeFild')->on('type_of_filds');
            $table->foreign('idMainRequireSub')->references('idMainRequire')->on('main_requiremnts');

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
        Schema::dropIfExists('main_requiremnts');
    }
};
