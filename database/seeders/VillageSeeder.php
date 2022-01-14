<?php

namespace Database\Seeders;

use App\Models\District;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
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
            DB::table('villages')->insert([
                'districts_id' => District::all()->random()->id,
                'name' => $faker -> randomElement(['KÖY']),
                'created_at' => now()
            ]);
        }
    }
}
