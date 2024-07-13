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
        Schema::create('WeeklyMonitoringAnswer', function (Blueprint $table) {
            $table->id();
            $table->integer('PregnancyID')->unsigned()->nullable();
            $table->integer('WeeklyMonitoringQuestionID')->unsigned()->nullable();
            $table->integer('WeekNumber')->unsigned()->nullable();
            $table->boolean('Answer')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('WeeklyMonitoringAnswer');
    }
};
