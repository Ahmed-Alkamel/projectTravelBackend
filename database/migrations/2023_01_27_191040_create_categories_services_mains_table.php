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
        Schema::create('categories_services_mains', function (Blueprint $table) {
            $table->increments('idCategoryMain');


            $table->string('nameCategoryMain', 190);
            $table->integer('idSubCategory')->unsigned()->nullable();
            $table->foreign('idSubCategory')->references('idCategoryMain')->on('categories_services_mains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_services_mains');
    }
};
