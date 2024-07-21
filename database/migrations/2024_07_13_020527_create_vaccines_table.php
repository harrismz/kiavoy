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
        Schema::create('vaccine', function (Blueprint $table) {
            $table->id();
            $table->string('vaccine_name', 100);
            $table->integer('vaccine_given')->unsigned()->nullable()->default(0);
            $table->string('vaccine_notes', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine');
    }
};
