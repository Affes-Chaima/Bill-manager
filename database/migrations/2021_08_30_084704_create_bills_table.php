<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDCLT')->unsigned()->index();
            $table->foreign('IDCLT')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('IDREG')->unsigned()->index();
            $table->foreign('IDREG')->references('id')->on('settlements')->onDelete('cascade');
            $table->string('code_fact');
            $table->date('date_fact');
            $table->integer('totalht_fact');
            $table->integer('totaltva_fact');
            $table->integer('totalttc_fact');
            $table->integer('totremise_fact');
            $table->integer('solde_fact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
