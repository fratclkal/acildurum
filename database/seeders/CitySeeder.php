<?php

namespace Database\Seeders;

use App\Models\Country;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('tr_TR');
        for ($i = 0; $i <= 10; $i++){
            DB::table('citys')->insert([
               'countrys_id' => Country::all()->random()->id,
                'name' => $faker -> city,
                'created_at' => now()
            ]);
        }
    }
}
