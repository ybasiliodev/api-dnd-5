<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
            "name" => "Barbarian",
            "description" => "A fierce warrior of primitive background who can enter a battle rage",
            "life_dice" => "d12",
            "image" => "https://i.imgur.com/sXLjoj6.png"
        ]);

        Classes::create([
            "name" => "Bard",
            "description" => "An inspiring magician whose power echoes the music of creation",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/agc3T6C.png"
        ]);

        Classes::create([
            "name" => "Cleric",
            "description" => "A priestly champion who wields divine magic in service of a higher power",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/hiRLqqL.png"
        ]);

        Classes::create([
            "name" => "Druid",
            "description" => "A priest of the Old Faith, wielding the powers of nature — moonlight and plant growth, fire and lightning — and adopting animal forms",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/UGDlANV.png"
        ]);

        Classes::create([
            "name" => "Fighter",
            "description" => "A master of martial combat, skilled with a variety of weapons and armor",
            "life_dice" => "d10",
            "image" => "https://i.imgur.com/UVLkoxM.png"
        ]);

        Classes::create([
            "name" => "Monk",
            "description" => "An master of martial arts, harnessing the power of the body in pursuit of physical and spiritual perfection",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/eRP9GjZ.png"
        ]);

        Classes::create([
            "name" => "Paladin",
            "description" => "A holy warrior bound to a sacred oath",
            "life_dice" => "d10",
            "image" => "https://i.imgur.com/oSDZRqf.png"
        ]);

        Classes::create([
            "name" => "Ranger",
            "description" => "A warrior who uses martial prowess and nature magic to combat threats on the edges of civilization",
            "life_dice" => "d10",
            "image" => "https://i.imgur.com/KEunzuF.png"
        ]);

        Classes::create([
            "name" => "Rogue",
            "description" => "A scoundrel who uses stealth and trickery to overcome obstacles and enemies",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/exvkv6q.png"
        ]);

        Classes::create([
            "name" => "Sorcerer",
            "description" => " A spellcaster who draws on inherent magic from a gift or bloodline",
            "life_dice" => "d6",
            "image" => "https://i.imgur.com/e5FPVjH.png"
        ]);

        Classes::create([
            "name" => "Warlock",
            "description" => "A wielder of magic that is derived from a bargain with an extraplanar entity",
            "life_dice" => "d8",
            "image" => "https://i.imgur.com/V7XKyAC.png"
        ]);

        Classes::create([
            "name" => "Wizard",
            "description" => "A scholarly magic-user capable of manipulating the structures of reality",
            "life_dice" => "d6",
            "image" => "https://i.imgur.com/ortQYWA.png"
        ]);
    }
}
