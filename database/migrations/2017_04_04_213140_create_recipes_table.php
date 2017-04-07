<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

// in the up() function, we're using Schema to build the headers for our recipes table
//the $table is a variable refering to the table we're building
//after the arrow, I've specified data type and header of the column
    public function up()
    {
      Schema::create('recipes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('flavor');
        $table->integer('preptime');
        $table->string('season');
        $table->integer('difficulty');
        $table->timestamps();
      });create_recipes
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
