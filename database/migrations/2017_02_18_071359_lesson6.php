<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lesson6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('column1');
            $table->string('column2');
            $table->string('column3');
            $table->string('column4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson6');
    }
}
