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
        Schema::create('Child', function (Blueprint $table) {
            $table->id();
            $table->integer('MotherID')->unsigned()->nullable();
            $table->integer('FatherID')->unsigned()->nullable();
            $table->date('DateOfBirth')->nullable()->default(new DateTime());
            $table->string('BirthPlace', 100)->nullable();
            $table->integer('ChildOf')->unsigned()->nullable();
            $table->string('AkteNo', 100)->nullable();
            $table->string('Gender', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Child');
    }
};
