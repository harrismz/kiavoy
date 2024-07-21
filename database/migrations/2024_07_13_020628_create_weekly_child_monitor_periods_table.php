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
        Schema::create('weekly_child_monitoring_period', function (Blueprint $table) {
            $table->id();
            $table->string('period_name', 100)->nullable();
            $table->integer('start_month')->unsigned()->nullable();
            $table->integer('end_month')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_child_monitoring_period');
    }
};
