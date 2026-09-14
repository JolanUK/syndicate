<?php

namespace Database\Seeders;

use App\Models\ClassSkill;
use Illuminate\Database\Seeder;

class ClassSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Stealth
            ['name' => 'stealth', 'description' => 'Stealth'],
            ['name' => 'lockpicking', 'description' => 'Lockpicking'],
            ['name' => 'evasion', 'description' => 'Evasion'],
            ['name' => 'scouting', 'description' => 'Scouting'],
            ['name' => 'sabotage', 'description' => 'Sabotage'],
            ['name' => 'threat_assessment', 'description' => 'Threat Assessment'],

            // Weapons
            ['name' => 'unarmed', 'description' => 'Unarmed'],
            ['name' => 'melee', 'description' => 'Melee Weapons'],
            ['name' => 'pistol', 'description' => 'Pistols'],
            ['name' => 'assault', 'description' => 'Assault Rifles'],
            ['name' => 'submachine_gun', 'description' => 'Submachine Guns'],
            ['name' => 'shotgun', 'description' => 'Shotguns'],
            ['name' => 'sniper', 'description' => 'Sniper Rifles'],
            ['name' => 'machine_gun', 'description' => 'Machine Guns'],

            // Fortitude
            ['name' => 'intimidation', 'description' => 'Intimidation'],
            ['name' => 'endurance', 'description' => 'Endurance'],
            ['name' => 'strength', 'description' => 'Strength'],

            // Facilitation
            ['name' => 'charisma', 'description' => 'Charisma'],
            ['name' => 'contacts', 'description' => 'Contacts'],
            ['name' => 'black_market', 'description' => 'Black Market'],

            // Cybersecurity
            ['name' => 'hacking', 'description' => 'Hacking'],
            ['name' => 'data', 'description' => 'Data Theft'],
            ['name' => 'anonymity', 'description' => 'Anonymity'],

            // Grifting
            ['name' => 'deception', 'description' => 'Deception'],
            ['name' => 'disguise', 'description' => 'Disguise'],
            ['name' => 'persuasion', 'description' => 'Persuasion'],

            // Vehicles
            ['name' => 'driving', 'description' => 'Driving'],
            ['name' => 'navigation', 'description' => 'Navigation'],
            ['name' => 'vehicle_combat', 'description' => 'Vehicle Combat'],
            ['name' => 'vehicle_repair', 'description' => 'Vehicle Repair'],

            // Management
            ['name' => 'leadership', 'description' => 'Leadership'],
            ['name' => 'logistics', 'description' => 'Logistics'],
            ['name' => 'resource_management', 'description' => 'Resource Management'],

            // Forensics
            ['name' => 'evidence_removal', 'description' => 'Evidence Removal'],
            ['name' => 'discretion', 'description' => 'Discretion'],

            // Bomber
            ['name' => 'explosives', 'description' => 'Explosives'],
            ['name' => 'ordnance', 'description' => 'Ordnance'],
            ['name' => 'blast_radius', 'description' => 'Blast Radius'],
            ['name' => 'shrapnel', 'description' => 'Shrapnel'],
            ['name' => 'chemical_weapons', 'description' => 'Chemical Weapons'],

            // Chemistry
            ['name' => 'medicine', 'description' => 'Medicine'],
            ['name' => 'immunity', 'description' => 'Immunity'],

            // Medical
            ['name' => 'wounds', 'description' => 'Wounds'],
            ['name' => 'limbs', 'description' => 'Limbs'],
            ['name' => 'bones', 'description' => 'Bones'],
            ['name' => 'mental', 'description' => 'Mental'],
            ['name' => 'surgery', 'description' => 'Surgery'],
        ];

        foreach ($skills as $skill) {
            ClassSkill::create([
                'name' => $skill['name'],
                'description' => $skill['description'],
            ]);
        }
    }
}
