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
        Schema::create('ScreeningHistory', function (Blueprint $table) {
            $table->id();
            $table->integer('ChildID')->unsigned()->nullable();
            $table->float('BodyWeightToHeight')->default(0);
            $table->float('HeadCircumference')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ScreeningHistory');
    }
};
