<?php

namespace Database\Seeders;

use App\Models\Human;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendSeeder extends Seeder
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
            DB::table('friends')->insert([
               'humans_id' => Human::all()->random()->id,
               'name' => $faker -> firstName,
               'sur_name' => $faker -> lastName,
                'phone_num' => $faker -> phoneNumber,
                'created_at' => now()
            ]);
        }
    }
}
