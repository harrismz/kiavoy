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
        Schema::create('MedicalStaff', function (Blueprint $table) {
            $table->id();
            $table->string('StaffName', 100)->nullable();
            $table->integer('HospitalID')->unsigned()->nullable();
            $table->string('Role', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MedicalStaff');
    }
};
