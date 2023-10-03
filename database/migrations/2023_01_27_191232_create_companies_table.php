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
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('idCompanes');
            // $table->integer('idCategoryMain')->unsigned();
            $table->string('companiyName', 250)->unique('CompaniesNameUnique');

            $table->string('numberPhone', 15)->unique('NumberPhoneCompaniesUnique');
            $table->string('addressCompaniy');
            // $table->foreign('idCategoryMain')->references('idCategoryMain')->on('categories_services_mains');
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
        Schema::dropIfExists('companies');
    }
};
