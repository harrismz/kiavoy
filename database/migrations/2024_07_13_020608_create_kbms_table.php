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
        Schema::create('kbm', function (Blueprint $table) {
            $table->id();
            $table->integer('age')->unsigned()->nullable();
            $table->integer('value_female')->unsigned()->nullable();
            $table->integer('value_male')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kbm');
    }
};
