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
        Schema::table('child', function (Blueprint $table) {
            $table->string('child_name', 100)->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child', function (Blueprint $table) {
            $columns = [
                'child_name'
            ];

            foreach ($columns as $column) {
                if( Schema::hasColumn('child', $column)){
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
