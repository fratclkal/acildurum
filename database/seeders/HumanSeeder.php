<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Human::create([
            'familys_id' => '1',
            'tc_no' => '14805000110',
            'name' => 'Fırat',
            'sur_name' => 'ÇELİKAL',
            'address' => 'Bahçelievler Mah.',
            'phone_num' => '05366936886',
            'blood_type' => 'ARH+',
            'instant_location' => 'aaaa'
        ]);*/

        $faker = Factory::create('tr_TR');
        for ($i = 0; $i <=10; $i++){
            DB::table('humans')->insert([
               'familys_id' => Family::all()->random()->id,
                'tc_no' => $faker -> numerify('###########'),
                'name' => $faker -> firstName('male' | 'female'),
                'sur_name' => $faker ->lastName,
                'address' => $faker -> address,
                'phone_num' => $faker -> phoneNumber,
                'blood_type' => $faker -> randomElement(['A RH+','A RH-','B RH-','B RH+','0 RH+','0 RH-','AB RH+','AB RH-']),
                'instant_location' => $faker -> streetAddress,
                'created_at' => now()


            ]);
        }
    }
}
