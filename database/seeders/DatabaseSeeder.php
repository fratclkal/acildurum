<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Family;
use App\Models\Human;
use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this ->call(FamilySeeder::class);
        $this ->call(HumanSeeder::class);
        $this ->call(CountrySeeder::class);
        $this ->call(CitySeeder::class);
        $this ->call(DistrictSeeder::class);
        $this ->call(NeighborhoodSeeder::class);
        $this ->call(VillageSeeder::class);
        $this ->call(HospitalSeeder::class);
        $this ->call(BloodSeeder::class);
        $this ->call(PoliceSeeder::class);
        $this ->call(Emergency_CodeSeeder::class);
        $this ->call(DiseaseSeeder::class);
        $this ->call(FriendSeeder::class);
    }
}
