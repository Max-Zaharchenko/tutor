<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_words', function (Blueprint $table) {
            $table->unsignedInteger('lesson_id');
            $table->unsignedInteger('word_id');

            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('CASCADE');

            $table->foreign('word_id')
                ->references('id')
                ->on('words')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_words');
    }
}
