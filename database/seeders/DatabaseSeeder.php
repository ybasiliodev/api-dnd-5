<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RaceTableSeeder::class);
        $this->call(SubRaceTableSeeder::class);
        $this->call(AbilityTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(SpellSchoolTableSeeder::class);
        $this->call(SpellTableSeeder::class);
        $this->call(SkillTableSeeder::class);
    }
}
