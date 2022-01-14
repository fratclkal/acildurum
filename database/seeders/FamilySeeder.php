<?php

namespace Database\Seeders;

use App\Models\Family;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Family::create([
           'family_sur_name' => 'ÇELİKAL',
        ]);*/

        $faker = Factory::create('tr_TR');
        for ($i = 0; $i <= 10; $i++){
            DB::table('familys')->insert([
               'family_sur_name' => $faker -> lastName,
                'created_at' => now()
            ]);
        }
    }
}
