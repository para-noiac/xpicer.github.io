<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lesson4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->string('selectoption');
            $table->string('radio');
            $table->string('checkbox');
            $table->string('textarea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson4');
    }
}
