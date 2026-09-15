<?php

namespace Database\Seeders;

use App\Models\PlayerClassSkill;
use Illuminate\Database\Seeder;

class PlayerClassSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Combat — Unarmed & Melee
            ['name' => 'martial_arts', 'description' => 'Fighting with hands, feet and improvised brawling.'],
            ['name' => 'melee', 'description' => 'Bladed and blunt weapons in CQC.'],

            // Combat — Firearms
            ['name' => 'pistol', 'description' => 'Accuracy and handling with handguns.'],
            ['name' => 'submachine_gun', 'description' => 'Control and accuracy with SMGs, especially in close-quarters combat.'],
            ['name' => 'shotgun', 'description' => 'Close-range stopping power and spread control.'],
            ['name' => 'assault', 'description' => 'Burst and automatic fire with assault rifles.'],
            ['name' => 'machine_gun', 'description' => 'Sustained suppression with belt-fed and heavy automatic weapons.'],
            ['name' => 'sniper', 'description' => 'Long-range precision fire.'],
            ['name' => 'marksmanship', 'description' => 'General firearm accuracy, breathing and trigger discipline.'],

            // Combat — Support
            ['name' => 'intimidation', 'description' => 'Coercing compliance through presence, threats and violence.'],
            ['name' => 'threat_assessment', 'description' => 'Reading a room or street for danger before it lands.'],

            // Physical
            ['name' => 'athleticism', 'description' => 'Climbing, sprinting, parkour and general body control.'],
            ['name' => 'endurance', 'description' => 'Sustaining exertion, resisting fatigue and absorbing punishment.'],
            ['name' => 'strength', 'description' => 'Raw lifting, forcing and breaking power.'],

            // Stealth & Infiltration
            ['name' => 'stealth', 'description' => 'Moving unseen and unheard, reduced detection in shadows and crowds.'],
            ['name' => 'lockpicking', 'description' => 'Defeating mechanical locks and latches.'],
            ['name' => 'safecracking', 'description' => 'Cracking vaults and high-security combination locks by ear and feel.'],
            ['name' => 'evasion', 'description' => 'Slipping pursuit, breaking line of sight and disappearing.'],
            ['name' => 'scouting', 'description' => 'Reconnoitering a target and mapping routes, patrols and exits.'],
            ['name' => 'sabotage', 'description' => 'Disabling equipment, infrastructure and security systems quietly.'],

            // Cybersecurity
            ['name' => 'hacking', 'description' => 'Breaching networks, devices and access controls.'],
            ['name' => 'data_theft', 'description' => 'Extracting, copying and exfiltrating protected information.'],
            ['name' => 'anonymity', 'description' => 'Covering digital tracks and operating without attribution.'],
            ['name' => 'surveillance', 'description' => 'Deploying, reading and countering cameras, taps and trackers.'],

            // Social
            ['name' => 'charisma', 'description' => 'Warmth, presence and likability that opens doors.'],
            ['name' => 'persuasion', 'description' => 'Bringing others around to your position through reason and rapport.'],
            ['name' => 'deception', 'description' => 'Lying convincingly and maintaining a false story under pressure.'],
            ['name' => 'disguise', 'description' => 'Altering appearance and mannerisms to pass as someone else.'],
            ['name' => 'forgery', 'description' => 'Faking documents, IDs, signatures and currency.'],
            ['name' => 'cold_reading', 'description' => 'Reading people, spotting lies and sensing motive.'],
            ['name' => 'interrogation', 'description' => 'Extracting information through questioning, pressure and leverage.'],
            ['name' => 'torture', 'description' => 'Forcing compliance or information through inflicting pain.'],
            ['name' => 'streetwise', 'description' => 'Navigating criminal society, gang politics and unwritten rules.'],

            // Underworld Commerce
            ['name' => 'contacts', 'description' => 'An address book of people who owe you or can be bought.'],
            ['name' => 'black_market', 'description' => 'Buying and selling goods off the books.'],
            ['name' => 'bribery', 'description' => 'Buying cooperation from officials, police and gatekeepers.'],
            ['name' => 'extortion', 'description' => 'Extracting ongoing payment through threats and leverage.'],
            ['name' => 'money_laundering', 'description' => 'Cleaning illicit income through legitimate fronts.'],
            ['name' => 'pickpocketing', 'description' => 'Lifting wallets, watches and items without being felt.'],
            ['name' => 'smuggling', 'description' => 'Moving contraband past checkpoints, borders and inspections.'],

            // Vehicles
            ['name' => 'driving', 'description' => 'High-speed control, pursuit and precision manoeuvring.'],
            ['name' => 'vehicle_combat', 'description' => 'Fighting from and against vehicles at speed.'],
            ['name' => 'vehicle_repair', 'description' => 'Maintaining, modifying and patching up vehicles.'],
            ['name' => 'navigation', 'description' => 'Finding routes, reading terrain and planning journeys.'],

            // Leadership
            ['name' => 'leadership', 'description' => 'Commanding a crew, earning loyalty and holding it under fire.'],
            ['name' => 'logistics', 'description' => 'Moving people, gear and money where they need to be.'],
            ['name' => 'resource_management', 'description' => 'Allocating scarce assets across competing needs.'],
            ['name' => 'planning', 'description' => 'Preparing operations, contingencies and ambush setups.'],

            // Forensics & Cleanup
            ['name' => 'evidence_removal', 'description' => 'Erasing physical and forensic traces of a crime.'],
            ['name' => 'discretion', 'description' => 'Knowing what not to say, see or write down.'],
            ['name' => 'tracking', 'description' => 'Following a person or thing across a city or network.'],

            // Explosives
            ['name' => 'explosives', 'description' => 'Making, placing and timing explosive devices.'],
            ['name' => 'demolition', 'description' => 'Bringing down structures precisely and on purpose.'],
            ['name' => 'ordnance', 'description' => 'Handling, arming and disarming military-grade munitions.'],
            ['name' => 'blast_radius', 'description' => 'Shaping an explosion so it hits with accuracy.'],
            ['name' => 'shrapnel', 'description' => 'Packing and aiming fragmentation for maximum effect.'],

            // Chemistry & Pharmacology
            ['name' => 'chemistry', 'description' => 'Synthesizing, refining and combining chemical compounds.'],
            ['name' => 'pharmacology', 'description' => 'Drug design, dosage, interactions and antidotes.'],
            ['name' => 'toxicology', 'description' => 'Poisons, sedatives and the materials that counteract them.'],
            ['name' => 'chemical_weapons', 'description' => 'Weaponising gases, irritants and contact agents.'],
            ['name' => 'immunity', 'description' => 'Resistance to toxins, drugs and chemical exposure.'],

            // Medicine
            ['name' => 'first_aid', 'description' => 'Stopping bleeding, stabilising and keeping someone alive.'],
            ['name' => 'medicine', 'description' => 'Diagnosing and treating illnesses with drugs and care.'],
            ['name' => 'wounds', 'description' => 'Cleaning, closing and healing cuts, punctures and burns.'],
            ['name' => 'limbs', 'description' => 'Splinting, setting and rehabilitating damaged limbs.'],
            ['name' => 'bones', 'description' => 'Reducing fractures and resetting broken bones.'],
            ['name' => 'surgery', 'description' => 'Extracting bullets, repairing organs and effectively extracting organs.'],
            ['name' => 'mental_care', 'description' => 'Treating trauma, panic, addiction and mental debuffs.'],
        ];

        foreach ($skills as $skill) {
            PlayerClassSkill::create([
                'name' => $skill['name'],
                'description' => $skill['description'],
            ]);
        }
    }
}
