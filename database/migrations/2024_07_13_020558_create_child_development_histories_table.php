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
        Schema::create('child_development_history', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id')->unsigned()->nullable();
            $table->longText('complaint')->nullable();
            $table->float('weight')->nullable()->default(0);
            $table->float('height')->nullable()->default(0);
            $table->float('head_circumference')->nullable()->default(0);
            $table->string('immunisation_status', 100)->nullable();
            $table->longText('action')->nullable();
            $table->longText('advice_given')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_development_history');
    }
};
