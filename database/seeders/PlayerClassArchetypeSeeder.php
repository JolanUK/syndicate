<?php

namespace Database\Seeders;

use App\Models\PlayerClassArchetype;
use Illuminate\Database\Seeder;

class PlayerClassArchetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archetypes = [
            ['name' => 'Ghost', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Muscle', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Fixer', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Hacker', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Wheelman', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Kingpin', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Cleaner', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Bomber', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Chemist', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'Physician', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
        ];

        foreach ($archetypes as $archetype) {
            PlayerClassArchetype::create([
                'name' => $archetype['name'],
                'passives' => $archetype['passives'],
            ]);
        }
    }
}
