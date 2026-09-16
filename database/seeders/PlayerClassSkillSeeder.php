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
            ['name' => 'martial_arts', 'label' => 'Martial Arts', 'description' => 'Fighting with hands, feet and improvised brawling.'],
            ['name' => 'melee', 'label' => 'Melee', 'description' => 'Bladed and blunt weapons in CQC.'],

            // Combat — Firearms
            ['name' => 'pistol', 'label' => 'Pistol', 'description' => 'Accuracy and handling with handguns.'],
            ['name' => 'submachine_gun', 'label' => 'Submachine Gun', 'description' => 'Control and accuracy with SMGs, especially in close-quarters combat.'],
            ['name' => 'shotgun', 'label' => 'Shotgun', 'description' => 'Close-range stopping power and spread control.'],
            ['name' => 'assault', 'label' => 'Assault', 'description' => 'Burst and automatic fire with assault rifles.'],
            ['name' => 'machine_gun', 'label' => 'Machine Gun', 'description' => 'Sustained suppression with belt-fed and heavy automatic weapons.'],
            ['name' => 'sniper', 'label' => 'Sniper Rifles', 'description' => 'Long-range precision fire.'],
            ['name' => 'marksmanship', 'label' => 'Marksmanship', 'description' => 'General firearm accuracy, breathing and trigger discipline.'],

            // Combat — Support
            ['name' => 'intimidation', 'label' => 'Intimidation', 'description' => 'Coercing compliance through presence, threats and violence.'],
            ['name' => 'threat_assessment', 'label' => 'Threat Assessment', 'description' => 'Reading a room or street for danger before it lands.'],

            // Physical
            ['name' => 'athleticism', 'label' => 'Athleticism', 'description' => 'Climbing, sprinting, parkour and general body control.'],
            ['name' => 'endurance', 'label' => 'Endurance', 'description' => 'Sustaining exertion, resisting fatigue and absorbing punishment.'],
            ['name' => 'strength', 'label' => 'Strength', 'description' => 'Raw lifting, forcing and breaking power.'],

            // Stealth & Infiltration
            ['name' => 'stealth', 'label' => 'Stealth', 'description' => 'Moving unseen and unheard, reduced detection in shadows and crowds.'],
            ['name' => 'lockpicking', 'label' => 'Lockpicking', 'description' => 'Defeating mechanical locks and latches.'],
            ['name' => 'safecracking', 'label' => 'Safecracking', 'description' => 'Cracking vaults and high-security combination locks by ear and feel.'],
            ['name' => 'evasion', 'label' => 'Evasion', 'description' => 'Slipping pursuit, breaking line of sight and disappearing.'],
            ['name' => 'scouting', 'label' => 'Scouting', 'description' => 'Reconnoitering a target and mapping routes, patrols and exits.'],
            ['name' => 'sabotage', 'label' => 'Sabotage', 'description' => 'Disabling equipment, infrastructure and security systems quietly.'],

            // Cybersecurity
            ['name' => 'hacking', 'label' => 'Hacking', 'description' => 'Breaching networks, devices and access controls.'],
            ['name' => 'data_theft', 'label' => 'Data Theft', 'description' => 'Extracting, copying and exfiltrating protected information.'],
            ['name' => 'anonymity', 'label' => 'Anonymity', 'description' => 'Covering digital tracks and operating without attribution.'],
            ['name' => 'surveillance', 'label' => 'Surveillance', 'description' => 'Deploying, reading and countering cameras, taps and trackers.'],

            // Social
            ['name' => 'charisma', 'label' => 'Charisma', 'description' => 'Warmth, presence and likability that opens doors.'],
            ['name' => 'persuasion', 'label' => 'Persuasion', 'description' => 'Bringing others around to your position through reason and rapport.'],
            ['name' => 'deception', 'label' => 'Deception', 'description' => 'Lying convincingly and maintaining a false story under pressure.'],
            ['name' => 'disguise', 'label' => 'Disguise', 'description' => 'Altering appearance and mannerisms to pass as someone else.'],
            ['name' => 'forgery', 'label' => 'Forgery', 'description' => 'Faking documents, IDs, signatures and currency.'],
            ['name' => 'cold_reading', 'label' => 'Cold Reading', 'description' => 'Reading people, spotting lies and sensing motive.'],
            ['name' => 'interrogation', 'label' => 'Interrogation', 'description' => 'Extracting information through questioning, pressure and leverage.'],
            ['name' => 'torture', 'label' => 'Torture', 'description' => 'Forcing compliance or information through inflicting pain.'],

            // Underworld Commerce
            ['name' => 'contacts', 'label' => 'Contacts', 'description' => 'An address book of people who owe you or can be bought.'],
            ['name' => 'black_market', 'label' => 'Black Market', 'description' => 'Buying and selling goods off the books.'],
            ['name' => 'bribery', 'label' => 'Bribery', 'description' => 'Buying cooperation from officials, police and gatekeepers.'],
            ['name' => 'extortion', 'label' => 'Extortion', 'description' => 'Extracting ongoing payment through threats and leverage.'],
            ['name' => 'money_laundering', 'label' => 'Money Laundering', 'description' => 'Cleaning illicit income through legitimate fronts.'],
            ['name' => 'pickpocketing', 'label' => 'Pickpocketing', 'description' => 'Lifting wallets, watches and items without being felt.'],
            ['name' => 'smuggling', 'label' => 'Smuggling', 'description' => 'Moving contraband past checkpoints, borders and inspections.'],

            // Vehicles
            ['name' => 'driving', 'label' => 'Driving', 'description' => 'High-speed control, pursuit and precision manoeuvring.'],
            ['name' => 'vehicle_combat', 'label' => 'Vehicle Combat', 'description' => 'Fighting from and against vehicles at speed.'],
            ['name' => 'vehicle_repair', 'label' => 'Vehicle Repair', 'description' => 'Maintaining, modifying and patching up vehicles.'],
            ['name' => 'navigation', 'label' => 'Navigation', 'description' => 'Finding routes, reading terrain and planning journeys.'],

            // Leadership
            ['name' => 'leadership', 'label' => 'Leadership', 'description' => 'Commanding a crew, earning loyalty and holding it under fire.'],
            ['name' => 'logistics', 'label' => 'Logistics', 'description' => 'Moving people, gear and money where they need to be.'],
            ['name' => 'resource_management', 'label' => 'Resource Management', 'description' => 'Allocating scarce assets across competing needs.'],
            ['name' => 'planning', 'label' => 'Planning', 'description' => 'Preparing operations, contingencies and ambush setups.'],

            // Forensics & Cleanup
            ['name' => 'evidence_removal', 'label' => 'Evidence Removal', 'description' => 'Erasing physical and forensic traces of a crime.'],
            ['name' => 'discretion', 'label' => 'Discretion', 'description' => 'Knowing what not to say, see or write down.'],
            ['name' => 'tracking', 'label' => 'Tracking', 'description' => 'Following a person or thing across a city or network.'],

            // Explosives
            ['name' => 'explosives', 'label' => 'Explosives', 'description' => 'Making, placing and timing explosive devices.'],
            ['name' => 'demolition', 'label' => 'Demolition', 'description' => 'Bringing down structures precisely and on purpose.'],
            ['name' => 'ordnance', 'label' => 'Ordnance', 'description' => 'Handling, arming and disarming military-grade munitions.'],
            ['name' => 'blast_radius', 'label' => 'Blast Radius', 'description' => 'Shaping an explosion so it hits with accuracy.'],
            ['name' => 'shrapnel', 'label' => 'Shrapnel', 'description' => 'Packing and aiming fragmentation for maximum effect.'],

            // Chemistry & Pharmacology
            ['name' => 'chemistry', 'label' => 'Chemistry', 'description' => 'Synthesizing, refining and combining chemical compounds.'],
            ['name' => 'pharmacology', 'label' => 'Pharmacology', 'description' => 'Drug design, dosage, interactions and antidotes.'],
            ['name' => 'toxicology', 'label' => 'Toxicology', 'description' => 'Poisons, sedatives and the materials that counteract them.'],
            ['name' => 'chemical_weapons', 'label' => 'Chemical Weapons', 'description' => 'Weaponising gases, irritants and contact agents.'],
            ['name' => 'immunity', 'label' => 'Immunity', 'description' => 'Resistance to toxins, drugs and chemical exposure.'],

            // Medicine
            ['name' => 'first_aid', 'label' => 'First Aid', 'description' => 'Stopping bleeding, stabilising and keeping someone alive.'],
            ['name' => 'medicine', 'label' => 'Medicine', 'description' => 'Diagnosing and treating illnesses with drugs and care.'],
            ['name' => 'wounds', 'label' => 'Wounds', 'description' => 'Cleaning, closing and healing cuts, punctures and burns.'],
            ['name' => 'limbs', 'label' => 'Limbs', 'description' => 'Splinting, setting and rehabilitating damaged limbs.'],
            ['name' => 'bones', 'label' => 'Bones', 'description' => 'Reducing fractures and resetting broken bones.'],
            ['name' => 'surgery', 'label' => 'Surgery', 'description' => 'Extracting bullets, repairing organs and effectively extracting organs.'],
            ['name' => 'mental_care', 'label' => 'Mental Care', 'description' => 'Treating trauma, panic, addiction and mental debuffs.'],
        ];

        foreach ($skills as $skill) {
            PlayerClassSkill::create([
                'name' => $skill['name'],
                'label' => $skill['label'],
                'description' => $skill['description'],
            ]);
        }
    }
}
