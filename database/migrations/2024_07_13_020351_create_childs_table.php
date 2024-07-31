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
        Schema::create('child', function (Blueprint $table) {
            $table->id();
            $table->integer('mother_id')->unsigned()->nullable();
            $table->integer('father_id')->unsigned()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('birth_place', 100)->nullable();
            $table->integer('child_of')->unsigned()->nullable();
            $table->string('akte_no', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->integer('blood_type_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child');
    }
};
