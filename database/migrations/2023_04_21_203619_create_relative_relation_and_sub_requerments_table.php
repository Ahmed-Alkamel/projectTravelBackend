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
        Schema::create('relative_relation_and_sub_requerments', function (Blueprint $table) {
            $table->integer('idRelativRel')->unsigned();
            $table->integer('idSubRequire')->unsigned();
            $table->primary(['idSubRequire', 'idRelativRel']);
            $table->foreign('idSubRequire')->references('idSubRequire')->on('sub_requiremnts');
            $table->foreign('idRelativRel')->references('id')->on('relative_relations');


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
        Schema::dropIfExists('relative_relation_and_sub_requerments');
    }
};
