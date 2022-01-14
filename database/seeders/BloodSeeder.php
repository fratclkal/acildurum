<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodSeeder extends Seeder
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
            DB::table('bloods')->insert([
                'hospitals_id' => Hospital::all()->random()->id,
                'blood_type' => $faker ->randomElement(['A RH+','A RH-','B RH-','B RH+','0 RH+','0 RH-','AB RH+','AB RH-']),
                'amound_bloond' => random_int(0,20).' '.'Litre',
                'created_at' => now()
            ]);
        }
    }
}
