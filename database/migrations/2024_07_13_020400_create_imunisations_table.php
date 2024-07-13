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
        Schema::create('imunisation', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id')->unsigned()->nullable();
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->integer('vaccine_id')->unsigned()->nullable();
            $table->date('date_vaccinated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisation');
    }
};
