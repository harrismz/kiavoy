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
        Schema::create('WeeklyChildMonitoringAnswer', function (Blueprint $table) {
            $table->id();
            $table->integer('ChildID')->unsigned()->nullable();
            $table->integer('PeriodID')->unsigned()->nullable();
            $table->integer('WeeklyChildMonitoringQuestionID')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('WeeklyChildMonitoringAnswer');
    }
};
