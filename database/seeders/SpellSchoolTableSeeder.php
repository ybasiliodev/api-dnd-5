<?php

namespace Database\Seeders;

use App\Models\SpellSchool;
use Illuminate\Database\Seeder;

class SpellSchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpellSchool::create([
            "name" => "Abjuration"
        ]);

        SpellSchool::create([
            "name" => "Conjuration"
        ]);

        SpellSchool::create([
            "name" => "Divination"
        ]);

        SpellSchool::create([
            "name" => "Enchantment"
        ]);

        SpellSchool::create([
            "name" => "Evocation"
        ]);

        SpellSchool::create([
            "name" => "Illusion"
        ]);

        SpellSchool::create([
            "name" => "Necromancy"
        ]);

        SpellSchool::create([
            "name" => "Transmutation"
        ]);
    }
}
