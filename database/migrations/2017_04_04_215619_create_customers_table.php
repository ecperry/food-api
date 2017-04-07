<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
// in the up() function, we're using Schema to build the headers for our customers table
//the $table is a variable refering to the table we're building
//after the arrow, I've specified data type and header of the column

    public function up()
    {
      Schema::create('customers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('first');
        $table->string('last');
        $table->string('title');
        $table->string('phone');
        $table->string('email');
        $table->boolean('new');
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
        Schema::dropIfExists('customers');
    }
}
