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
        Schema::create('pregnancy', function (Blueprint $table) {
            $table->id();
            $table->integer('mother_id')->unsigned();
            $table->dateTime('first_day_of_last_period')->nullable();
            $table->dateTime('estimate_date_of_delivery')->nullable();
            $table->integer('upper_arm_circumference')->unsigned()->nullable();
            $table->boolean('kek')->nullable()->default(false);
            $table->integer('contraception_id')->unsigned()->nullable();
            $table->integer('pregnancy_number')->unsigned()->nullable();
            $table->integer('number_of_deliveries')->unsigned()->nullable();
            $table->integer('number_of_miscarriages')->unsigned()->nullable();
            $table->integer('number_of_living_children')->unsigned()->nullable();
            $table->integer('number_of_deceased_children')->unsigned()->nullable();
            $table->integer('number_of_premature_children')->unsigned()->nullable();
            $table->integer('interval_of_last_delivery')->unsigned()->nullable();
            $table->string('tetanus_immunization', 100)->nullable();
            $table->string('last_delivery_helper', 100)->nullable();
            $table->string('last_delivery_method', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancy');
    }
};
