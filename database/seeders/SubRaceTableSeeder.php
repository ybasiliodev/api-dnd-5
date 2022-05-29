<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class SubRaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dwarf_id = Race::query()->where('name', 'Dwarf')->value('id');
        $elf_id = Race::query()->where('name', 'Elf')->value('id');
        $halfling_id = Race::query()->where('name', 'Halfling')->value('id');
        $gnome_id = Race::query()->where('name', 'Gnome')->value('id');

        SubRace::create([
            "name" => "Hill Dwarf",
            "description" => "A hill dwarf has keen senses, deep intuition, and remarkable resilience. The gold dwarves of Faerûn in their mighty southern kingdom are hill dwarves, as are the exiled Neidar and the debased Klar of Krynn in the Dragonlance setting.",
            "race_id" => $dwarf_id
        ]);

        SubRace::create([
            "name" => "Mountain Dwarf",
            "description" => "The mountain dwarfs are strong and hardy, accustomed to a difficult life in rugged terrain. They're probably on the tall side (for a dwarf), and tend toward lighter coloration. The shield dwarves of northern Faerûn, as well as the ruling Hylar clan and the noble Daewar clan of Dragonlance, are mountain dwarves.",
            "race_id" => $dwarf_id
        ]);

        SubRace::create([
            "name" => "High Elf",
            "description" => "A high elf has a keen mind and a mastery of at least the basics of magic. In many of the worlds of D&D, there are two kinds of high elves. One type (which includes the gray elves and valley elves of Greyhawk, the Silvanesti of Dragonlance, and the sun elves of the Forgotten Realms) is haughty and reclusive, believing themselves to be superior to non-elves and even other elves. The other type (including the high elves of Greyhawk, the Qualinesti of Dragonlance, and the moon elves of the Forgotten Realms) are more common and more friendly, and often encountered among humans and other races.",
            "race_id" => $elf_id
        ]);

        SubRace::create([
            "name" => "Wood Elf",
            "description" => "A wood elf has keen senses and intuition, and the fleet feet carry they quickly and stealthily through your native forests. This category includes the wild elves (grugach) of Greyhawk and the Kagonesti of Dragonlance, as well as the races called wood elves in Greyhawk and the Forgotten Realms. In Faerûn, wood elves (also called wild elves, green elves, or forest elves) are reclusive and distrusting of non-elves.",
            "race_id" => $elf_id
        ]);

        SubRace::create([
            "name" => "Lightfoot",
            "description" => "A lightfoot halfling can easily hide from notice, even using other people as cover. They’re inclined to be affable and get along well with others. In the Forgotten Realms, lightfoot halflings have spread the farthest and thus are the most common variety.",
            "race_id" => $halfling_id
        ]);

        SubRace::create([
            "name" => "Stout",
            "description" => "A stout halfling are hardier than average and have some resistance to poison. Some say that stouts have dwarven blood. In the Forgotten Realms, these halflings are called stronghearts, and they’re most common in the south.",
            "race_id" => $halfling_id
        ]);

        SubRace::create([
            "name" => "Rock Gnome",
            "description" => "A rock gnome has a natural inventiveness and hardiness beyond that of other gnomes. Most gnomes in the worlds of D&D are rock gnomes, including the tinker gnomes of the Dragonlance setting.",
            "race_id" => $gnome_id
        ]);

    }
}
