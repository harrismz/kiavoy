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
        Schema::create('father', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unsigned();
            $table->integer('nojkn')->unsigned();
            $table->string('name', 100);
            $table->dateTime('dateofbirth');
            $table->string('birthplace', 100);
            $table->string('phonenumber', 100)->nullable();
            $table->longText('address')->nullable();
            $table->integer('kecamatanid')->unsigned();
            $table->integer('religionid')->unsigned()->nullable();
            $table->integer('educationid')->unsigned()->nullable();
            $table->integer('bloodtypeid')->unsigned()->nullable();
            $table->integer('jobid')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('father');
    }
};
