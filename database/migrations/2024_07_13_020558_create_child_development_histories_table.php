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
        Schema::create('ChildDevelopmentHistory', function (Blueprint $table) {
            $table->id();
            $table->integer('ChildID')->unsigned()->nullable();
            $table->longText('Complaint')->nullable();
            $table->float('Weight')->nullable()->default(0);
            $table->float('height')->nullable()->default(0);
            $table->float('HeadCircumference')->nullable()->default(0);
            $table->string('ImmunisationStatus', 100)->nullable();
            $table->longText('Action')->nullable();
            $table->longText('AdviceGiven')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChildDevelopmentHistory');
    }
};
