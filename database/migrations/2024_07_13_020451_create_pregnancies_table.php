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
            $table->integer('motherid')->unsigned();
            $table->dateTime('firstdayoflastperiod')->nullable();
            $table->dateTime('estimatedateofdelivery')->nullable();
            $table->integer('upperarmcircumference')->unsigned()->nullable();
            $table->boolean('kek')->nullable()->default(false);
            $table->integer('contraceptionid')->unsigned()->nullable();
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
