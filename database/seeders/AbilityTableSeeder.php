<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Seeder;

class AbilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::create([
            "name" => "Strength",
            "description" => "Measuring physical power",
        ]);

        Ability::create([
            "name" => "Dexterity",
            "description" => "Measuring agility",
        ]);

        Ability::create([
            "name" => "Constitution",
            "description" => "Measuring endurance",
        ]);

        Ability::create([
            "name" => "Intelligence",
            "description" => "Measuring reasoning and memory",
        ]);

        Ability::create([
            "name" => "Wisdom",
            "description" => "Measuring perception and insight",
        ]);

        Ability::create([
            "name" => "Charisma",
            "description" => "Measuring force of personality",
        ]);
    }
}
