<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Police;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliceSeeder extends Seeder
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
            DB::table('polices')->insert([
               'citys_id' => City::all()->random()->id,
               'address' => $faker -> address,
                'created_at' => now()
            ]);
        }
    }
}
