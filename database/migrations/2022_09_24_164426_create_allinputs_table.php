<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allinputs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->string('tel');
            $table->string('password');
            $table->string('image');
            $table->string('file');
            $table->string('description');
            $table->string('time');
            $table->string('date');
            $table->string('week');
            $table->string('month');
            $table->string('datetime');
            $table->string('datetime-local');
            $table->string('category');
            $table->string('checkbox');
            $table->string('color');
            $table->string('tag');
            $table->string('number');
            $table->string('url');
            $table->string('selectmonth');
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
        Schema::dropIfExists('allinputs');
    }
};
