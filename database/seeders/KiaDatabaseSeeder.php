<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KiaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BloodTypeTableSeeder::class,
            ChildTableSeeder::class,
            ChildDevHisTableSeeder::class,
            ContraceptionTableSeeder::class,
            EducationTableSeeder::class,
            FatherTableSeeder::class,
            HospitalTableSeeder::class,
            ImunisationTableSeeder::class,
            JobTableSeeder::class,
            
            
            
            // KabupatenTableSeeder::class,
            



            
            // KbmTableSeeder::class,
            // KecamatanTableSeeder::class,
            // KelurahanTableSeeder::class,
            // MedStaffTableSeeder::class,
            // MotherTableSeeder::class,
            // PregnancyTableSeeder::class,
            // PregnancyHistTableSeeder::class,
            // ProvinceTableSeeder::class,
            // ReligionTableSeeder::class,
            // ScreeningHistTableSeeder::class,
            // VaccineTableSeeder::class,
            // WchildmanswerTableSeeder::class,
            // WchildmperiodTableSeeder::class,
            // WchildmquestionTableSeeder::class,
            // WmanswerTableSeeder::class,
            // WmquestionTableSeeder::class,
            // WeighingTableSeeder::class,
        ]);
    }
}
