<?php

namespace Database\Seeders;

use App\Models\Spell;
use Illuminate\Database\Seeder;

class SpellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spell::create(["name" => "Blade Ward", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Dancing Lights","level" => 0, "image" => ""]);
        Spell::create(["name" => "Friends", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Mage Hand", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Mending", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Message", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Minor Illusion", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Prestidigitation", "level" => 0, "image" => ""]);
        Spell::create(["name" => "True Strike", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Vicious Mockery", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Guidance", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Light", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Resistance", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Sacred Flame", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Spare the Dying", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Thaumaturgy", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Druidcraft", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Poison Spray", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Produce Flame", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Shillelagh", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Thorn Whip", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Acid Splash", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Chill Touch", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Dancing Lights", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Fire Bolt", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Friends", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Light", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Prestidigitation", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Ray of frost", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Shocking Grasp", "level" => 0, "image" => ""]);
        Spell::create(["name" => "True Strike", "level" => 0, "image" => ""]);
        Spell::create(["name" => "Eldritch Blast", "level" => 0, "image" => ""]);
    }
}
