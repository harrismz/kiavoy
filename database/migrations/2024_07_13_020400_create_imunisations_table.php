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
            $table->integer('childid')->unsigned()->nullable();
            $table->integer('hospitalid')->unsigned()->nullable();
            $table->integer('staffid')->unsigned()->nullable();
            $table->integer('vaccineid')->unsigned()->nullable();
            $table->date('datevaccinated');
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
