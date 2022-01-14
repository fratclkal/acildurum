<?php

namespace Database\Seeders;

use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Emergency_CodeSeeder extends Seeder
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
            DB::table('emergency_codes')->insert([
               'humans_id' => Human::all()->random()->id,
                'content' => $faker -> randomElement(['İMDAT', 'YARDIM EDİN', 'ACİL', 'POLİS', 'KİMSE YOK MU?']),
                'created_at' => now()
            ]);
        }
    }
}
