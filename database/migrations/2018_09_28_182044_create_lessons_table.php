<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->unsignedInteger('course_id');
            $table->string('title');
            $table->text('description');
            $table->string('video_url');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->unique(['slug', 'course_id']);

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
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
        Schema::dropIfExists('lessons');
    }
}
