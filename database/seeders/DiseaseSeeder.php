<?php

namespace Database\Seeders;

use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
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
            DB::table('diseases')->insert([
               'humans_id' => Human::all()->random()->id,
                'disease_name' => $faker -> randomElement(['FELÇ', 'BÖBREK YETMEZLİĞİ', 'KALP YETMEZLİĞİ']),
                'created_at' => now()
            ]);
        }
    }
}
