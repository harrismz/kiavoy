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
        Schema::create('KBM', function (Blueprint $table) {
            $table->id();
            $table->integer('Age')->unsigned()->nullable();
            $table->integer('ValueFemale')->unsigned()->nullable();
            $table->integer('ValueMale')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KBM');
    }
};
