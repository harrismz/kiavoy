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
        Schema::create('PregnancyHistory', function (Blueprint $table) {
            $table->id();
            $table->integer('PregnancyID')->unsigned()->nullable();
            $table->longText('Complaint')->nullable();
            $table->string('BloodPressure', 100)->nullable();
            $table->integer('Weight')->unsigned()->nullable();
            $table->integer('GestationalAge')->unsigned()->nullable();
            $table->integer('FundalHeight')->unsigned()->nullable();
            $table->string('FetusPosition', 100)->nullable();
            $table->integer('FetalHeartRate')->unsigned()->nullable();
            $table->boolean('SwollenFoot')->nullable()->default(false);
            $table->longText('LabResult')->nullable();
            $table->longText('Action')->nullable();
            $table->longText('AdviceGiven')->nullable();
            $table->longText('USGImage')->nullable();
            $table->longText('WeightBaby')->nullable();
            $table->integer('StaffID')->unsigned()->nullable();
            $table->integer('HospitalID')->unsigned()->nullable();
            $table->dateTime('NextControl')->nullable()->default(new DateTime());

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PregnancyHistory');
    }
};
