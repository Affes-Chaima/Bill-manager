<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blines', function (Blueprint $table) {
            $table->id();
            $table->integer('IDFACT')->unsigned()->index();
            $table->foreign('IDFACT')->references('id')->on('bills')->onDelete('cascade');
            $table->integer('IDART')->unsigned()->index();
            $table->foreign('IDART')->references('id')->on('articles')->onDelete('cascade');
            $table->integer('qte_art');
            $table->integer('puht_art');
            $table->integer('remise_art');
            $table->integer('punetht_art');
            $table->integer('totalnetht_art');
            $table->integer('totalht_art');
            $table->integer('totalttc_art');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blines');
    }
}
