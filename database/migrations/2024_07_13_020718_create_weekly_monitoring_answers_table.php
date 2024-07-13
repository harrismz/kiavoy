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
        Schema::create('weekly_monitoring_answer', function (Blueprint $table) {
            $table->id();
            $table->integer('pregnancy_id')->unsigned()->nullable();
            $table->integer('weekly_monitoring_question_id')->unsigned()->nullable();
            $table->integer('week_number')->unsigned()->nullable();
            $table->boolean('answer')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_monitoring_answer');
    }
};
