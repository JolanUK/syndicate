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
            ['name' => 'ghost', 'label' => 'Ghost', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'muscle', 'label' => 'Muscle', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'fixer', 'label' => 'Fixer', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'hacker', 'label' => 'Hacker', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'wheelman', 'label' => 'Wheelman', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'kingpin', 'label' => 'Kingpin', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'cleaner', 'label' => 'Cleaner', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'bomber', 'label' => 'Bomber', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'chemist', 'label' => 'Chemist', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
            ['name' => 'physician', 'label' => 'Physician', 'passives' => '[{"class": 1, "modifier": "-10"}, {"class": 2, "modifier": "+10"}]'],
        ];

        foreach ($archetypes as $archetype) {
            PlayerClassArchetype::create([
                'name' => $archetype['name'],
                'label' => $archetype['label'],
                'passives' => json_decode($archetype['passives']),
            ]);
        }
    }
}
