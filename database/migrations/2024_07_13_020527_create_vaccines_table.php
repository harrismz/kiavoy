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
        Schema::create('Vaccine', function (Blueprint $table) {
            $table->id();
            $table->string('VaccineName', 100);
            $table->integer('VaccineGiven')->unsigned()->nullable()->default(0);
            $table->string('VaccineNotes', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Vaccine');
    }
};
