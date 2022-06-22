<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDMODREG')->unsigned()->index();
            $table->foreign('IDMODREG')->references('id')->on('setmeths')->onDelete('cascade');
            $table->string('code_reg');
            $table->date('date_reg');
            $table->string('montant_reg');
            $table->string('comment_reg');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
