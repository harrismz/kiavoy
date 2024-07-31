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
        Schema::create('pregnancy_history', function (Blueprint $table) {
            $table->id();
            $table->integer('pregnancy_id')->unsigned()->nullable();
            $table->longText('complaint')->nullable();
            $table->string('blood_pressure', 100)->nullable();
            $table->integer('weight')->unsigned()->nullable();
            $table->integer('gestational_age')->unsigned()->nullable();
            $table->integer('fundal_height')->unsigned()->nullable();
            $table->string('fetus_position', 100)->nullable();
            $table->integer('fetal_heart_rate')->unsigned()->nullable();
            $table->boolean('swollen_foot')->nullable()->default(false);
            $table->longText('lab_result')->nullable();
            $table->longText('action')->nullable();
            $table->longText('advice_given')->nullable();
            $table->longText('usg_image')->nullable();
            $table->longText('weight_baby')->nullable();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->dateTime('next_control')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancy_history');
    }
};
