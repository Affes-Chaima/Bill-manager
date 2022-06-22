<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rais_soc');
            $table->integer('tel1_soc');
            $table->integer('tel2_soc');
            $table->mediumText('email_soc');
            $table->string('mf_soc');
            $table->integer('rc_soc');
            $table->string('adr_soc');
            $table->binary('logo_soc');
            $table->string('entete_soc');});
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
}
