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
        Schema::create('essays', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('question1_id')->nullable();
            $table->longText('answer1')->nullable();
            $table->string('question2_id')->nullable();
            $table->longText('answer2')->nullable();
            $table->string('question3_id')->nullable();
            $table->longText('answer3')->nullable();
            $table->string('question4_id')->nullable();
            $table->longText('answer4')->nullable();
            $table->string('question5_id')->nullable();
            $table->longText('answer5')->nullable();
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
        Schema::dropIfExists('essays');
    }
};
