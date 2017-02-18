<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lesson5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('selection1');
            $table->string('selection2');
            $table->string('selection3');
            $table->string('selection4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson5');
    }
}
