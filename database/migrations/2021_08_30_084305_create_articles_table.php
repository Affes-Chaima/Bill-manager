<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDTVA')->unsigned()->index();
            $table->foreign('IDTVA')->references('id')->on('tvas')->onDelete('cascade');
            $table->string('code_art');
            $table->string('lib_art');
            $table->integer('puht_art');
            $table->integer('puttc_art');
            $table->integer('maxremise_art');
            $table->boolean('stockable_art');
            $table->integer('actif_art');
            $table->integer('depstsk_art');
            $table->integer('codebarre_art');
            $table->integer('prixcash_art');
                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
