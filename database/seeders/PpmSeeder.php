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

        // 2. Création de Lignes de PPM (Packages)
        $packages = [
            [
                'system_type' => 'SPME',
                'package_type' => 'Travaux',
                'package_description' => 'Construction d\'infrastructures hydro-agricoles',
            ],
            [
                'system_type' => 'MPAB',
                'package_type' => 'Biens',
                'package_description' => 'Acquisition d\'équipements et matériels agricoles',
            ],
            [
                'system_type' => 'SPME',
                'package_type' => 'Consultant',
                'package_description' => 'Études et supervision des travaux',
            ],
        ];

        foreach ($packages as $index => $packageData) {
            $line = $ppm->lines()->create($packageData);

            // 3. Création de 3 Lots pour chaque ligne
            for ($i = 1; $i <= 3; $i++) {
                $lot = $line->lots()->create([
                    'name' => 'Lot ' . $i,
                    'description' => 'Description détaillée pour le lot ' . $i,
                    'tender_number' => strtoupper(substr($packageData['package_type'], 0, 1)) . '-0' . $i . '/2026',
                    'amount_type' => $i % 2 == 0 ? 'DQE' : 'MF',
                    'estimated_cost' => rand(10000000, 50000000),
                    'procurement_method' => 'AOO',
                    'qualification_type' => 'Post-Qualification',
                    'control_audit' => 'Préalable',
                    'contract_amount' => rand(10000000, 50000000),
                ]);
            }

            // 4. Création des dates pour la Ligne
            $testMilestones = ['submission', 'notice_no', 'ias', 'deposit_opening', 'report_submission', 'no_objection', 'attribution', 'signature', 'completion'];
            
            foreach ($testMilestones as $milestone) {
                $baseDate = now()->addDays(rand(10, 60));
                
                // Toujours un 'plan'
                $line->dates()->create([
                    'milestone_type' => $milestone,
                    'date_category' => 'plan',
                    'date_value' => $baseDate,
                ]);

                // Parfois un 'revised'
                if (rand(1, 100) > 50) {
                    $line->dates()->create([
                        'milestone_type' => $milestone,
                        'date_category' => 'revised',
                        'date_value' => $baseDate->copy()->addDays(rand(5, 15)),
                    ]);
                }

                // Parfois un 'real'
                if (rand(1, 100) > 60) {
                    $realDate = $line->dates()->create([
                        'milestone_type' => $milestone,
                        'date_category' => 'real',
                        'date_value' => $baseDate->copy()->addDays(rand(0, 20)),
                    ]);
                    
                    // Ajouter des commentaires
                    $numComments = rand(1, 3);
                    for ($c = 0; $c < $numComments; $c++) {
                        $realDate->comments()->create([
                            'content' => 'Ceci est un commentaire de suivi généré pour l\'étape ' . $milestone . '. Tout s\'est déroulé comme prévu.',
                        ]);
                    }

                    // Ajouter des documents
                    $numDocs = rand(1, 2);
                    $docTypes = ['pdf', 'docx', 'xlsx', 'png'];
                    for ($d = 0; $d < $numDocs; $d++) {
                        $type = $docTypes[array_rand($docTypes)];
                        $realDate->documents()->create([
                            'name' => 'Justificatif_' . ucfirst($milestone) . '_' . ($d + 1) . '.' . $type,
                            'path' => '/storage/fake_path/' . uniqid() . '.' . $type,
                            'type' => $type,
                            'size' => rand(102400, 5242880), // 100KB to 5MB
                        ]);
                    }
                }
            }
        }
    }
}
