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
        Schema::create('screening_history', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id')->unsigned()->nullable();
            $table->float('body_weight_to_height')->default(0);
            $table->float('head_circumference')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screening_history');
    }
};
