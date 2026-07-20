<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Création d'un PPM
        $ppm = \App\Models\Ppm::create([
            'reference' => 'PPM-2026-001',
            'dossier_name' => 'Projet de Développement Agricole (PDA)',
            'loan_grant_number' => 'DON-AFDB-2026-001',
            'country_executing_agency' => 'Ministère de l\'Agriculture',
            'currency_unit' => 'FCFA',
            'status' => 'En cours',
        ]);

        // 2. Création de 2 Lignes de PPM (Packages)
        $packages = [
            [
                'package_type' => 'Travaux',
                'package_description' => 'Construction d\'infrastructures hydro-agricoles',
            ],
            [
                'package_type' => 'Biens',
                'package_description' => 'Acquisition d\'équipements et matériels agricoles',
            ],
        ];

        foreach ($packages as $index => $packageData) {
            $line = clone $ppm->lines()->create($packageData);

            // 3. Création de 3 Lots pour chaque ligne
            for ($i = 1; $i <= 3; $i++) {
                $lot = $line->lots()->create([
                    'name' => 'Lot ' . $i . ' - ' . $packageData['package_type'],
                    'description' => 'Description détaillée pour le lot ' . $i,
                    'tender_number' => strtoupper(substr($packageData['package_type'], 0, 1)) . '-0' . $i . '/2026',
                    'amount_type' => $i % 2 == 0 ? 'DQE' : 'MF',
                    'estimated_cost' => rand(10000000, 50000000),
                    'procurement_method' => 'AOO',
                    'qualification_type' => 'Post-Qualification',
                    'control_audit' => 'Préalable',
                    'contract_amount' => rand(10000000, 50000000),
                ]);

                // Optionnel : Ajouter quelques dates d'historique pour simuler la vraie vie
                $lot->dates()->create([
                    'milestone_type' => 'submission',
                    'date_category' => 'plan',
                    'date_value' => now()->addDays(rand(10, 30)),
                ]);
            }
        }
    }
}
