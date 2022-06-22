<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_clt');
            $table->string('nom_clt');
            $table->string('prenom_clt');
            $table->string('rais_soc_clt');
            $table->integer('numtel1_clt');
            $table->integer('numtel2_clt');
            $table->mediumText('email_clt');
            $table->string('adr_clt');
            $table->string('mf_clt');
            $table->string('rc_clt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
