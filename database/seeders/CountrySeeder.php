<?php

namespace Database\Seeders;

use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('tr_TR');
        for ($i = 0; $i <=10; $i++){
            DB::table('countrys')->insert([
               'humans_id' => Human::all()->random()->id,
               'name' => $faker -> country,
                'created_at' => now()
            ]);
        }
    }
}
