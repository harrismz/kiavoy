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
        Schema::create('weighing', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id')->unsigned()->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->float('weight')->nullable()->default(0);
            $table->float('weight_gain')->nullable()->default(0);
            $table->boolean('nt')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weighing');
    }
};
