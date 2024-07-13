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
        Schema::create('Pregnancy', function (Blueprint $table) {
            $table->id();
            $table->integer('MotherID')->unsigned();
            $table->dateTime('FirstDayofLastPeriod')->nullable();
            $table->dateTime('EstimateDateofDelivery')->nullable();
            $table->integer('UpperArmCircumference')->unsigned()->nullable();
            $table->boolean('KEK')->nullable()->default(false);
            $table->integer('ContraceptionID')->unsigned()->nullable();
            $table->integer('PregnancyNumber')->unsigned()->nullable();
            $table->integer('NumberOfDeliveries')->unsigned()->nullable();
            $table->integer('NumberOfMiscarriages')->unsigned()->nullable();
            $table->integer('NumberOfLivingChildren')->unsigned()->nullable();
            $table->integer('NumberOfDeceasedChildren')->unsigned()->nullable();
            $table->integer('NumberOfPrematureChildren')->unsigned()->nullable();
            $table->integer('IntervalOfLastDelivery')->unsigned()->nullable();
            $table->string('TetanusImmunization', 100)->nullable();
            $table->string('LastDeliveryHelper', 100)->nullable();
            $table->string('LastDeliveryMethod', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pregnancy');
    }
};
