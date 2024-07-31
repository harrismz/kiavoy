<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weekly_child_monitoring_answer', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id')->unsigned()->nullable();
            $table->integer('period_id')->unsigned()->nullable();
            $table->integer('weekly_child_monitoring_question_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_child_monitoring_answer');
    }
};
