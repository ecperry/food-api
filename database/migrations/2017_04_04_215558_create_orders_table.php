<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

  // in the up() function, we're using Schema to build the headers for our orders table
  //the $table is a variable refering to the table we're building
  //after the arrow, I've specified data type and header of the column 

    public function up()
    {
      Schema::create('orders', function (Blueprint $table) {
        $table->increments('id');
        $table->string('customer');
        $table->string('deadline');
        $table->string('flavor');
        $table->string('size');
        $table->integer('number');
        $table->boolean('completed');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
