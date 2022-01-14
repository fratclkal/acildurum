<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeighborhoodSeeder extends Seeder
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
            DB::table('neighborhoods')->insert([
               'humans_id' => Human::all()->random()->id,
                'districts_id' => District::all()->random()->id,
                'name' => $faker -> streetName,
                'created_at' => now()

            ]);
        }
    }
}
