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
        Schema::create('Mother', function (Blueprint $table) {
            $table->id();
            $table->integer('NIK')->unsigned();
            $table->integer('NoJKN')->unsigned();
            $table->string('Name', 100);
            $table->dateTime('DateOfBirth');
            $table->string('BirthPlace', 100);
            $table->string('PhoneNumber', 100)->nullable();
            $table->longText('Address')->nullable();
            $table->integer('KecamatanID')->unsigned();
            $table->integer('ReligionID')->unsigned()->nullable();
            $table->integer('EducationID')->unsigned()->nullable();
            $table->integer('BloodTypeID')->unsigned()->nullable();
            $table->integer('JobID')->unsigned()->nullable();
            $table->integer('Height')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Mother');
    }
};
