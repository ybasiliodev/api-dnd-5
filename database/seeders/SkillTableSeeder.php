<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $strength_id = Ability::query()->where('name', 'Strength')->value('id');
        $dexterity_id = Ability::query()->where('name', 'Dexterity')->value('id');
        $intelligence_id = Ability::query()->where('name', 'Intelligence')->value('id');
        $wisdom_id = Ability::query()->where('name', 'Wisdom')->value('id');
        $charisma_id = Ability::query()->where('name', 'Charisma')->value('id');

        Skill::create([
            "name" => "Athletics",
            "description" => "Covers difficult situations you encounter while climbing, jumping, or swimming",
            "ability_id" => $strength_id,
        ]);

        Skill::create([
            "name" => "Acrobatics",
            "description" => "Covers your attempt to stay on your feet in a tricky situation, such as when you're trying to run across a sheet of ice, balance on a tightrope, or stay upright on a rocking ship's deck",
            "ability_id" => $dexterity_id,
        ]);

        Skill::create([
            "name" => "Sleight of Hand",
            "description" => "Whenever you attempt an act of legerdemain or manual trickery, such as planting something on someone else or concealing an object on your person, make a Sleight of Hand check",
            "ability_id" => $dexterity_id,
        ]);

        Skill::create([
            "name" => "Stealth",
            "description" => "Conceal yourself from enemies, slink past guards, slip away without being noticed, or sneak up on someone without being seen or heard.",
            "ability_id" => $dexterity_id,
        ]);

        Skill::create([
            "name" => "Arcana",
            "description" => "Measures your ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes.",
            "ability_id" => $intelligence_id,
        ]);

        Skill::create([
            "name" => "History",
            "description" => "Measures your ability to recall lore about historical events, legendary people, ancient kingdoms, past disputes, recent wars, and lost civilizations.",
            "ability_id" => $intelligence_id,
        ]);

        Skill::create([
            "name" => "Investigation",
            "description" => "You might deduce the location of a hidden object, discern from the appearance of a wound what kind of weapon dealt it, or determine the weakest point in a tunnel that could cause it to collapse.",
            "ability_id" => $intelligence_id,
        ]);

        Skill::create([
            "name" => "Nature",
            "description" => "Measures your ability to recall lore about terrain, plants and animals, the weather, and natural cycles.",
            "ability_id" => $intelligence_id,
        ]);

        Skill::create([
            "name" => "Religion",
            "description" => "Measures your ability to recall lore about deities, rites and prayers, religious hierarchies, holy symbols, and the practices of secret cults.",
            "ability_id" => $intelligence_id,
        ]);

        Skill::create([
            "name" => "Animal Handling",
            "description" => "You can calm down a domesticated animal, keep a mount from getting spooked, control your mount when you attempt a risky maneuver or intuit an animal's intentions.",
            "ability_id" => $wisdom_id,
        ]);

        Skill::create([
            "name" => "Insight",
            "description" => "You can determine the true intentions of a creature, such as when searching out a lie or predicting someone's next move. Doing so involves gleaning clues from body language, speech habits, and changes in mannerisms.",
            "ability_id" => $wisdom_id,
        ]);

        Skill::create([
            "name" => "Medicine",
            "description" => "Lets you try to stabilize a dying companion or diagnose an illness.",
            "ability_id" => $wisdom_id,
        ]);

        Skill::create([
            "name" => "Perception",
            "description" => "You spot, hear, or otherwise detect the presence of something. It measures your general awareness of your surroundings and the keenness of your senses. For example, you might try to hear a conversation through a closed door, eavesdrop under an open window, or hear monsters moving stealthily in the forest. Or you might try to spot things that are obscured or easy to miss, whether they are orcs lying in ambush on a road, thugs hiding in the shadows of an alley, or candlelight under a closed secret door.",
            "ability_id" => $wisdom_id,
        ]);

        Skill::create([
            "name" => "Survival",
            "description" => "Follow tracks, hunt wild game, guide your group through frozen wastelands, identify signs that owlbears live nearby, predict the weather, or avoid quicksand and other natural hazards.",
            "ability_id" => $wisdom_id,
        ]);

        Skill::create([
            "name" => "Deception",
            "description" => "Determines whether you can convincingly hide the truth, either verbally or through your actions. This deception can encompass everything from misleading others through ambiguity to telling outright lies. Typical situations include trying to fast-talk a guard, con a merchant, earn money through gambling, pass yourself off in a disguise, dull someone's suspicions with false assurances, or maintain a straight face while telling a blatant lie.",
            "ability_id" => $charisma_id,
        ]);

        Skill::create([
            "name" => "Intimidation",
            "description" => "When you attempt to influence someone through overt threats, hostile actions, and physical violence. Examples include trying to pry information out of a prisoner, convincing street thugs to back down from a confrontation, or using the edge of a broken bottle to convince a sneering vizier to reconsider a decision.",
            "ability_id" => $charisma_id,
        ]);

        Skill::create([
            "name" => "Performance",
            "description" => "Determines how well you can delight an audience with music, dance, acting, storytelling, or some other form of entertainment.",
            "ability_id" => $charisma_id,
        ]);

        Skill::create([
            "name" => "Persuasion",
            "description" => "When you attempt to influence someone or a group of people with tact, social graces, or good nature. Typically, you use persuasion when acting in good faith, to foster friendships, make cordial requests, or exhibit proper etiquette. Examples of persuading others include convincing a chamberlain to let your party see the king, negotiating peace between warring tribes, or inspiring a crowd of townsfolk.",
            "ability_id" => $charisma_id,
        ]);
    }
}
