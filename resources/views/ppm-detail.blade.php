@extends('layouts.app')

@section('content')
<!-- Content -->
            <main class="grow pt-5 min-w-0" id="content" role="content">
                <!-- Container -->
                <div class="kt-container-fluid">
                    <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                        <div class="flex flex-col justify-center gap-2">
                            <!-- <h1 class="text-xl font-medium leading-none text-mono">Détails du Dossier PPM</h1>
                            <div class="flex items-center flex-wrap gap-1.5 font-medium">
                                <span class="text-base text-secondary-foreground">PROJET D'AMENAGEMENT DE LA ROUTE
                                    DJOUGOU-PEHUNCO-KEROU-BANIKOARA</span>
                            </div> -->
                        </div>
                        <div class="flex items-center gap-2.5">
                            <button class="kt-btn kt-btn-outline" data-kt-drawer-toggle="#add_spm_drawer">
                                <i class="ki-filled ki-plus"></i> Ajouter un SPM
                            </button>
                            <button class="kt-btn kt-btn-primary">
                                <i class="ki-filled ki-check"></i> Publier le PPM
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End of Container -->


                <!-- Main Layout Container (Table + Timeline Side by Side) -->
                <div class="kt-container-fluid flex items-start gap-5 transition-all duration-300 relative">
                    <!-- Main Table Container -->
                    <div class="kt-card grow min-w-0 overflow-hidden rounded-none" style="border-radius: 0 !important;">
                        <div class="kt-card-header justify-center">
                            <h3 class="kt-card-title text-center uppercase">{{ $ppm['dossier_name'] }}
                                <span class="text-sm text-muted-foreground ml-2">({{ $ppm['reference'] }})</span>
                            </h3>
                        </div>
                        <div class="kt-card-content p-0">
                            <div class="overflow-x-auto">
                                <table id="ppm-table"
                                    class="kt-table table-auto kt-table-hover align-middle whitespace-nowrap border-separate border-spacing-0">
                                    <thead>
                                        <!-- Super Header - Niveau 1 (fond rouge calme, texte blanc) -->
                                        <tr class="bg-primary text-white">
                                            <th colspan="11"
                                                class="border-r-2 border-b-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Informations de Base</th>
                                            <th colspan="1"
                                                class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Suivi</th>
                                            <th colspan="2"
                                                class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Dossier d'Appel d'Offres</th>
                                            <th colspan="2"
                                                class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Période de l'Appel d'Offres</th>
                                            <th colspan="2"
                                                class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Évaluation des Offres</th>
                                            <th colspan="4"
                                                class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                                Finalisation du Contrat</th>
                                        </tr>
                                        <!-- Columns Header - Niveau 2 (fond gris moyen) -->
                                        <tr class="bg-gray-100 text-gray-700">
                                            <th
                                                class="sticky left-0 top-0 bg-gray-100 z-[34] w-[150px] border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                SPM</th>
                                            <th
                                                class="sticky left-[150px] top-0 bg-gray-100 z-[33] w-[100px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                N° Package</th>
                                            <th
                                                class="sticky left-[250px] top-0 bg-gray-100 z-[32] w-[200px] min-w-[200px] max-w-[200px] whitespace-normal border-r-2 border-b-2 border-gray-400 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Description du Package</th>
                                            <th
                                                class="bg-gray-100 w-[80px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Lot</th>
                                            <th
                                                class="bg-gray-100 min-w-[200px] whitespace-normal border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Description du Lot</th>

                                            <th
                                                class="min-w-[180px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                N° Appel d'Offres émis</th>
                                            <th
                                                class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Montant forfaitaire ou DQE</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Coût estimatif</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Mode de passation</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Type de Qualification</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Contrôle et Audit</th>
                                            <th
                                                class="min-w-[150px] border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Type de Suivi</th>

                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date de soumission</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date d'Avis (NO)</th>

                                            <th
                                                class="min-w-[180px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date de l'Invitation à Soumissionner (IaS)</th>
                                            <th
                                                class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date limite de dépôt / Date d'ouverture des Offres</th>

                                            <th
                                                class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date de soumission du Rapport</th>
                                            <th
                                                class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date de l'Avis de Non-Objection</th>

                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date d'Attribution du Contrat</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Montant du Contrat (en FCFA)</th>
                                            <th
                                                class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date de Signature du Contrat</th>
                                            <th
                                                class="min-w-[150px] border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                                Date d'Achèvement du Contrat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $dateCategories = [
                                                'plan' => ['label' => 'Plan', 'color' => 'kt-badge-light'],
                                                'revised' => ['label' => 'Révisé', 'color' => 'kt-badge-warning'],
                                                'real' => ['label' => 'Réel', 'color' => 'kt-badge-success'],
                                            ];
                                            
                                            // Colonnes des dates définies par les enums
                                            $milestoneTypes = [
                                                'submission',
                                                'no_avis',
                                                'ias_date',
                                                'submission_deadline',
                                                'report_submission',
                                                'no_report_avis',
                                                'contract_award',
                                                'contract_signature',
                                                'contract_completion'
                                            ];
                                        @endphp
                                        
                                        @forelse($ppm['lines'] as $lineIdx => $line)
                                            @php
                                                // Nombre de lots de la ligne * 3 categories
                                                $lineRowSpan = max(1, count($line['lots']) * 3);
                                            @endphp
                                            
                                            @forelse($line['lots'] as $lotIdx => $lot)
                                                @foreach($dateCategories as $catKey => $catMeta)
                                                    <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                                        
                                                        @if($lotIdx === 0 && $loop->first)
                                                            <!-- Début SPM -->
                                                            <td class="sticky left-0 bg-white group-hover:bg-gray-50 z-[14] font-bold text-sm border-r border-gray-300 w-[150px] min-w-[150px] max-w-[150px]" rowspan="{{ $lineRowSpan }}">
                                                                SPM-{{ $line['id'] }}<br><span class="text-xs font-normal text-muted-foreground">{{ $line['package_type'] }}</span>
                                                            </td>
                                                            <td class="sticky left-[150px] bg-white group-hover:bg-gray-50 z-[13] font-bold border-r border-gray-300 w-[100px] min-w-[100px] max-w-[100px]" rowspan="{{ $lineRowSpan }}">
                                                                LIG-{{ $line['id'] }}
                                                            </td>
                                                            <td class="sticky left-[250px] bg-white group-hover:bg-gray-50 z-[12] font-medium border-r-2 border-gray-400 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal break-words col-separator" rowspan="{{ $lineRowSpan }}">
                                                                {{ $line['package_description'] ?: 'Aucune description' }}
                                                            </td>
                                                        @endif
                                                        
                                                        @if($loop->first)
                                                            <!-- Début Lot -->
                                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 w-[80px]" rowspan="3">
                                                                {{ $lot['name'] }}
                                                            </td>
                                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words" rowspan="3">
                                                                {{ $lot['description'] ?: 'Aucune description' }}
                                                            </td>
                                                            
                                                            <td class="text-muted-foreground" rowspan="3">{{ $lot['tender_number'] ?: '-' }}</td>
                                                            <td class="text-muted-foreground" rowspan="3">{{ $lot['amount_type'] ?: '-' }}</td>
                                                            <td class="text-muted-foreground" rowspan="3">{{ $lot['estimated_cost'] ? number_format($lot['estimated_cost'], 0, ',', ' ') : '-' }}</td>
                                                            <td rowspan="3">
                                                                <span class="kt-badge kt-badge-light-primary">{{ $lot['procurement_method'] ?: '-' }}</span>
                                                            </td>
                                                            <td class="text-muted-foreground" rowspan="3">{{ $lot['qualification_type'] ?: '-' }}</td>
                                                            <td class="text-muted-foreground" rowspan="3">{{ $lot['control_audit'] ?: '-' }}</td>
                                                        @endif
                                                        
                                                        <!-- Type de suivi -->
                                                        <td class="border-r">
                                                            <div class="flex items-center gap-2">
                                                                <i class="ki-filled ki-calendar text-gray-400"></i>
                                                                <span class="kt-badge kt-badge-sm {{ $catMeta['color'] }}">{{ $catMeta['label'] }}</span>
                                                            </div>
                                                        </td>
                                                        
                                                        <!-- Dates (9 colonnes) -->
                                                        @foreach($milestoneTypes as $milestone)
                                                            @if($milestone === 'contract_signature' && $loop->parent->first)
                                                                <!-- Montant du contrat -->
                                                                <td class="border-r font-medium text-center" rowspan="3">
                                                                    {{ $lot['contract_amount'] ? number_format($lot['contract_amount'], 0, ',', ' ') : '-' }}
                                                                </td>
                                                            @endif
                                                            <td class="p-2">
                                                                <div class="flex items-center justify-between gap-2">
                                                                    <span class="text-sm">
                                                                        @if(isset($lot['dates'][$milestone][$catKey]['date_value']))
                                                                            {{ \Carbon\Carbon::parse($lot['dates'][$milestone][$catKey]['date_value'])->format('d M Y') }}
                                                                    </span>
                                                                            <button class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                                                title="Voir commentaires et fichiers"
                                                                                data-kt-drawer-toggle="#date_details_drawer">
                                                                                <i class="ki-filled ki-eye text-xs"></i>
                                                                            </button>
                                                                        @else
                                                                            -
                                                                    </span>
                                                                        @endif
                                                                </div>
                                                            </td>
                                                        @endforeach
                                                        
                                                    </tr>
                                                @endforeach
                                            @empty
                                                <!-- Pas de lots pour cette ligne -->
                                                <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                                    <td class="sticky left-0 bg-white z-[14] font-bold text-sm border-r border-gray-300">SPM-{{ $line['id'] }}</td>
                                                    <td class="sticky left-[150px] bg-white z-[13] font-bold border-r border-gray-300">LIG-{{ $line['id'] }}</td>
                                                    <td class="sticky left-[250px] bg-white z-[12] font-medium border-r-2 border-gray-400">{{ $line['package_description'] }}</td>
                                                    <td colspan="20" class="text-center p-4 text-muted-foreground">Aucun lot défini pour ce package.</td>
                                                </tr>
                                            @endforelse
                                        @empty
                                            <tr>
                                                <td colspan="23" class="text-center p-10 text-muted-foreground text-lg">
                                                    Aucun package (SPM) trouvé dans ce dossier PPM.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Panel (Side by Side) -->
                <div class="kt-card w-[400px] shrink-0 hidden sticky top-[80px]" id="drawer_timeline">
                    <div class="flex justify-between items-center px-5 py-4 border-b">
                        <h3 class="font-medium text-lg text-foreground">Historique : Date d'Avis (NO)</h3>
                        <button class="kt-btn kt-btn-icon kt-btn-sm kt-btn-ghost" id="close_timeline">
                            <i class="ki-filled ki-cross text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5 overflow-y-auto max-h-[calc(100vh-150px)]">
                        <div class="kt-timeline">
                            <!-- Plan -->
                            <div class="kt-timeline-item relative pb-7">
                                <div class="absolute top-0 left-2 w-0.5 h-full bg-light"></div>
                                <div class="flex gap-4">
                                    <div class="w-4 h-4 rounded-full bg-gray-300 z-10 mt-1 border-4 border-white"></div>
                                    <div>
                                        <div class="font-medium text-foreground">05 Juin 2026</div>
                                        <div class="text-sm text-muted-foreground mt-1"><span
                                                class="kt-badge kt-badge-sm kt-badge-light">Plan initial</span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Révisé 1 -->
                            <div class="kt-timeline-item relative pb-7">
                                <div class="absolute top-0 left-2 w-0.5 h-full bg-light"></div>
                                <div class="flex gap-4">
                                    <div class="w-4 h-4 rounded-full bg-warning z-10 mt-1 border-4 border-white"></div>
                                    <div>
                                        <div class="font-medium text-foreground">15 Juin 2026</div>
                                        <div class="text-sm text-muted-foreground mt-1"><span
                                                class="kt-badge kt-badge-sm kt-badge-light-warning">Révisé</span></div>
                                        <div class="bg-light rounded p-3 mt-3 text-sm text-foreground">
                                            <strong>Commentaire :</strong> Retard dû à l'absence du responsable de
                                            validation.
                                        </div>
                                        <div class="mt-2 flex items-center gap-2">
                                            <i class="ki-filled ki-file text-primary"></i> <a href="#"
                                                class="text-sm text-primary hover:underline">justification_retard.pdf</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Réel (Pending) -->
                            <div class="kt-timeline-item relative">
                                <div class="flex gap-4">
                                    <div
                                        class="w-4 h-4 rounded-full bg-white border-2 border-dashed border-success z-10 mt-1">
                                    </div>
                                    <div class="w-full">
                                        <div class="font-medium text-muted-foreground">En attente de réalisation</div>
                                        <button class="kt-btn kt-btn-sm kt-btn-light-success mt-3 w-full"
                                            data-kt-modal-toggle="#modal_update_date">
                                            <i class="ki-filled ki-check"></i> Marquer comme Réel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
