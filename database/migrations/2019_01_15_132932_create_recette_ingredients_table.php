<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetteIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recette_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recette_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();
            $table->timestamps();

            $table->foreign('recette_id')->references('id')->on('recettes');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recette_ingredients');
    }
}
