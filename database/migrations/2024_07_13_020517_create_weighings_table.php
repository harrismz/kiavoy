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
        Schema::create('Weighing', function (Blueprint $table) {
            $table->id();
            $table->integer('ChildID')->unsigned()->nullable();
            $table->integer('Age')->unsigned()->nullable();
            $table->float('Weight')->nullable()->default(0);
            $table->float('WeightGain')->nullable()->default(0);
            $table->boolean('NT')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Weighing');
    }
};
