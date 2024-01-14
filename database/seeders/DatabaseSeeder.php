<?php

namespace Database\Seeders;

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
        $this->call(ProvinceSeeder::class);
        $this->call(RegionSeeder::class);
        \App\Models\User::factory(10)->create();
        \App\Models\Teacher::factory(20)->create();
        \App\Models\Student::factory(100)->create();
        $this->call(SettingSeeder::class);
    }
}
