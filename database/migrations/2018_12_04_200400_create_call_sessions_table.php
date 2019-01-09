<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('call_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->enum('status', ['PLANNED', 'BOOKED', 'PROCESSING', 'FINISHED', 'CANCELLED'])->default('PLANNED');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamps();

            $table->foreign('call_id')
                ->references('id')
                ->on('calls')
                ->onDelete('CASCADE');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');

            $table->unique(['call_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_sessions');
    }
}
