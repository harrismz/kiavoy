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
        Schema::create('father', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unsigned();
            $table->integer('no_jkn')->unsigned();
            $table->string('name', 100);
            $table->dateTime('date_of_birth');
            $table->string('birth_place', 100);
            $table->string('phone_number', 100)->nullable();
            $table->longText('address')->nullable();
            $table->integer('kecamatan_id')->unsigned();
            $table->integer('religion_id')->unsigned()->nullable();
            $table->integer('education_id')->unsigned()->nullable();
            $table->integer('blood_type_id')->unsigned()->nullable();
            $table->integer('job_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('father');
    }
};
