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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('nik')->unsigned()->after('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $columns = [
                'nik'
            ];

            foreach ($columns as $column) {
                if( Schema::hasColumn('users', $column)){
                    try {
                        //ini untuk hapus contraints, kalo ternayata
                        // kolomnya ga ada contrainst, di pass aja.
                        $table->dropDefaultContraint($column);
                    } catch (\Exception $th) {
                        //throw $th;
                    }
                    $table->dropColumn($column);
                }
            }
        });
    }
};
