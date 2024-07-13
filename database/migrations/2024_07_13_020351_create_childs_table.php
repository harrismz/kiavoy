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
        Schema::create('child', function (Blueprint $table) {
            $table->id();
            $table->integer('motherid')->unsigned()->nullable();
            $table->integer('fatherid')->unsigned()->nullable();
            $table->date('dateofbirth')->nullable();
            $table->string('birthplace', 100)->nullable();
            $table->integer('childof')->unsigned()->nullable();
            $table->string('akteno', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child');
    }
};
