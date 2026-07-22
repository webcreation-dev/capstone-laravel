@extends('layouts.app')

@section('body_class', 'kt-sidebar-collapse')
@section('content')
    <!-- Content -->
    <main class="grow pt-5 min-w-0" id="content" role="content">
        <!-- Container -->
        <div class="kt-container-fluid">
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <a href="/" class="kt-btn kt-btn-outline">
                        <i class="ki-filled ki-arrow-left"></i> Retour à la liste
                    </a>
                </div>
                <div class="flex items-center gap-2.5">
                    <button class="kt-btn kt-btn-outline" data-kt-drawer-toggle="#add_spm_drawer" onclick="openAddSpm()">
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
        <style>
            .cell-hover-container .edit-btn {
                opacity: 0;
                transition: opacity 0.2s;
            }

            .cell-hover-container:hover .edit-btn {
                opacity: 1;
            }
        </style>
        <div class="kt-container-fluid flex items-start gap-5 transition-all duration-300 relative">
            <!-- Main Table Container -->
            <div class="kt-card grow min-w-0 overflow-hidden rounded-none bg-white" style="border-radius: 0 !important;"
                id="ppm-table-card">
                <div class="kt-card-header justify-center relative">
                    <h3 class="kt-card-title text-center uppercase px-10">PLAN DE PASSATION DE MARCHÉS - VERSION DÉTAILLÉE POUR L'ACQUISITION DES SERVICES</h3>
                    <button id="btn-fullscreen"
                        class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light absolute right-4 top-1/2 -translate-y-1/2"
                        title="Plein écran">
                        <i class="ki-filled ki-maximize text-lg" id="icon-fullscreen"></i>
                    </button>
                </div>
                <div class="kt-card-content p-0" id="ppm-table-content">
                    <div class="overflow-x-auto">
                        <table id="ppm-table"
                            class="kt-table table-auto kt-table-hover align-middle whitespace-nowrap border-separate border-spacing-0">
                            <thead>
                                <!-- Super Header - Niveau 1 (fond rouge calme, texte blanc) -->
                                <tr class="bg-primary text-white">
                                    <th colspan="11"
                                        class="border-r-2 border-b-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                        Informations de Base</th>
                                    <th colspan="2"
                                        class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                        Dossier d'Appel d'Offres</th>
                                    <th colspan="2"
                                        class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                        Période de l'Appel d'Offres</th>
                                    <th colspan="2"
                                        class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                        Évaluation des Offres *++</th>
                                    <th colspan="4"
                                        class="border-b-2 border-r-2 border-black text-center font-bold py-3 px-3 text-sm uppercase tracking-wide">
                                        Finalisation du Contrat</th>
                                </tr>
                                <!-- Columns Header - Niveau 2 (fond gris moyen) -->
                                <tr class="bg-gray-100 text-gray-700">
                                    <th style="z-index: 50;"
                                        class="sticky left-0 top-0 bg-gray-100 w-[150px] border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Système de Passation de marchés
                                    </th>
                                    <th style="left: 150px; z-index: 50;"
                                        class="sticky top-0 bg-gray-100 w-[100px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Numéro du Package
                                    </th>
                                    <th style="left: 250px; z-index: 50;"
                                        class="sticky top-0 bg-gray-100 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Description du Package
                                    </th>
                                    <th style="left: 450px; z-index: 50;"
                                        class="sticky top-0 bg-gray-100 w-[130px] min-w-[130px] max-w-[130px] border-r-2 border-b-2 border-gray-400 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Lot</th>
                                    <th
                                        class="bg-gray-100 min-w-[200px] whitespace-normal border-r-2 border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Description du Lot</th>

                                    <th
                                        class="min-w-[180px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        N° Appel d'Offres émis</th>
                                    <th
                                        class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Montant forfaitaire ou Devis Quantitatif Estimatif</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Coût Estimatif (UC)**</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Mode de passation de marché</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Pré- ou Post Qualification</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Contrôle et Audit - Examen Préalable /à Postériori de la Banque***</th>

                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date de soumission</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date de l'Avis de Non-Objection</th>

                                    <th
                                        class="min-w-[180px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date de l'Invitation à Soumissionner (IaS)</th>
                                    <th
                                        class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date limite de dépôt / Date d'ouverture des Offres </th>

                                    <th
                                        class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date de soumission du Rapport d'Évaluation des Offres</th>
                                    <th
                                        class="min-w-[200px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date de l'Avis de Non-Objection</th>

                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Date d'Attribution du Contrat</th>
                                    <th
                                        class="min-w-[150px] border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Montant du Contrat (en FCFA) *+++</th>
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
                                        'notice_no',
                                        'ias',
                                        'deposit_opening',
                                        'report_submission',
                                        'no_objection',
                                        'attribution',
                                        'signature',
                                        'completion'
                                    ];

                                    $milestoneLabels = [
                                        'submission' => 'Date de soumission',
                                        'notice_no' => 'Date d\'Avis (NO)',
                                        'ias' => 'Date de l\'Invitation à Soumissionner (IaS)',
                                        'deposit_opening' => 'Date de limite de dépôt / ouverture des Propositions',
                                        'report_submission' => 'Date de soumission du Rapport technique',
                                        'no_objection' => 'Date de l\'Avis de Non-Objection',
                                        'attribution' => 'Date d\'Attribution du Contrat',
                                        'signature' => 'Date de Signature du Contrat',
                                        'completion' => 'Date d\'Achèvement du Contrat'
                                    ];
                                @endphp

                                @forelse($ppm['lines'] as $lineIdx => $line)
                                    @php
                                        // Nombre de lignes = max(1, nombre de lots)
                                        $lineRowSpan = max(1, count($line['lots']));
                                    @endphp

                                    @forelse($line['lots'] as $lotIdx => $lot)
                                        <tr class="group hover:bg-light/50 border-b border-gray-200">

                                            @if($lotIdx === 0)
                                                <!-- Début SPM -->
                                                <td style="z-index: 40;"
                                                    class="cell-hover-container relative sticky left-0 bg-white group-hover:bg-gray-50 font-bold text-sm border-r border-gray-300 w-[150px] min-w-[150px] max-w-[150px]"
                                                    rowspan="{{ $lineRowSpan }}">
                                                    {{ $line['system_type'] }}
                                                    <!-- Bouton d'édition au survol -->
                                                    <button
                                                        class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                        data-kt-drawer-toggle="#add_spm_drawer" onclick="openEditSpm(this)"
                                                        data-spm-id="{{ $line['id'] }}"
                                                        data-spm-system-type="{{ $line['system_type'] }}"
                                                        data-spm-package-type="{{ $line['package_type'] }}"
                                                        data-spm-description="{{ $line['package_description'] }}"
                                                        data-spm-lots="{{ json_encode($line['lots']) }}" title="Modifier le SPM">
                                                        <i class="ki-filled ki-pencil text-lg"></i>
                                                    </button>
                                                </td>
                                                <td style="left: 150px; z-index: 40;"
                                                    class="sticky bg-white group-hover:bg-gray-50 font-bold border-r border-gray-300 w-[100px] min-w-[100px] max-w-[100px]"
                                                    rowspan="{{ $lineRowSpan }}">
                                                    {{ $line['package_number'] }}
                                                </td>
                                                <td style="left: 250px; z-index: 40;"
                                                    class="sticky bg-white group-hover:bg-gray-50 font-medium border-r border-gray-300 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal break-words"
                                                    rowspan="{{ $lineRowSpan }}">
                                                    {{ $line['package_description'] ?: 'Aucune description' }}
                                                </td>
                                            @endif

                                            <!-- Début Lot -->
                                            <td style="left: 450px; z-index: 40;"
                                                class="cell-hover-container relative sticky bg-white font-bold border-r-2 border-gray-400 w-[130px] min-w-[130px] max-w-[130px] col-separator group-hover:bg-gray-50">
                                                {{ $lot['name'] }}
                                                <button
                                                    class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                    onclick="openEditLot(this)" data-lot-id="{{ $lot['id'] }}"
                                                    data-lot-name="{{ $lot['name'] }}" data-lot-tender="{{ $lot['tender_number'] }}"
                                                    data-lot-amount-type="{{ $lot['amount_type'] }}"
                                                    data-lot-estimated="{{ $lot['estimated_cost'] }}"
                                                    data-lot-procurement="{{ $lot['procurement_method'] }}"
                                                    data-lot-qualification="{{ $lot['qualification_type'] }}"
                                                    data-lot-audit="{{ $lot['control_audit'] }}"
                                                    title="Modifier les caractéristiques du Lot">
                                                    <i class="ki-filled ki-pencil text-lg"></i>
                                                </button>
                                            </td>
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words">
                                                {{ $lot['description'] ?: 'Aucune description' }}
                                            </td>

                                            <td class="text-muted-foreground">{{ $lot['tender_number'] ?: '-' }}</td>
                                            <td class="text-muted-foreground">{{ $lot['amount_type'] ?: '-' }}</td>
                                            <td class="text-muted-foreground">
                                                {{ $lot['estimated_cost'] ? number_format($lot['estimated_cost'], 0, ',', ' ') : '-' }}
                                            </td>
                                            <td>
                                                <span class="kt-badge kt-badge-light-primary">{{ $lot['procurement_method'] ?: '-' }}</span>
                                            </td>
                                            <td class="text-muted-foreground">{{ $lot['qualification_type'] ?: '-' }}</td>
                                            <td class="text-muted-foreground">{{ $lot['control_audit'] ?: '-' }}</td>

                                            <!-- Dates (9 colonnes) -->
                                            @foreach($milestoneTypes as $milestone)
                                                @if($milestone === 'signature')
                                                    <!-- Montant du contrat (Spécifique au lot) -->
                                                    <td class="border-r font-medium text-center">
                                                        {{ $lot['contract_amount'] ? number_format($lot['contract_amount'], 0, ',', ' ') : '-' }}
                                                    </td>
                                                @endif

                                                @if($lotIdx === 0)
                                                    <td class="p-2 border-r cell-hover-container group/cell bg-white" rowspan="{{ $lineRowSpan }}">
                                                        <div class="flex flex-col gap-3 min-w-[130px]">
                                                            @foreach($dateCategories as $catKey => $catMeta)
                                                                <div class="flex items-center justify-between gap-2 p-1 rounded hover:bg-gray-50 border-b border-gray-100 last:border-0">
                                                                    @if(isset($line['dates'][$milestone][$catKey]['date_value']))
                                                                        <div class="flex flex-col items-start gap-1">
                                                                            <span class="text-sm font-medium">
                                                                                {{ \Carbon\Carbon::parse($line['dates'][$milestone][$catKey]['date_value'])->format('d M Y') }}
                                                                            </span>
                                                                            <span class="kt-badge kt-badge-sm {{ $catMeta['color'] }}">
                                                                                {{ $catMeta['label'] }}
                                                                            </span>
                                                                        </div>
                                                                        <button
                                                                            class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100 shrink-0"
                                                                            title="Voir commentaires et fichiers"
                                                                            data-kt-drawer-toggle="#date_details_drawer"
                                                                            onclick="openDateModal(this, 'view')"
                                                                            data-id="{{ $line['dates'][$milestone][$catKey]['id'] ?? '' }}"
                                                                            data-spm="{{ $line['system_type'] }}" data-lot=""
                                                                            data-line-id="{{ $line['id'] }}" data-milestone="{{ $milestone }}"
                                                                            data-milestone-label="{{ $milestoneLabels[$milestone] ?? $milestone }}"
                                                                            data-category="{{ $catMeta['label'] }}" data-cat-key="{{ $catKey }}"
                                                                            data-date="{{ $line['dates'][$milestone][$catKey]['date_value'] }}">
                                                                            <i class="ki-filled ki-eye text-xs"></i>
                                                                        </button>
                                                                    @else
                                                                        <div class="flex flex-col items-start gap-1 opacity-60">
                                                                            <span class="text-sm text-muted-foreground">-</span>
                                                                            <span class="kt-badge kt-badge-sm {{ $catMeta['color'] }}">
                                                                                {{ $catMeta['label'] }}
                                                                            </span>
                                                                        </div>
                                                                        <button
                                                                            class="edit-btn kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost text-muted-foreground hover:text-primary shrink-0"
                                                                            title="Ajouter une date" data-kt-drawer-toggle="#date_details_drawer"
                                                                            onclick="openDateModal(this, 'add')" data-spm="{{ $line['system_type'] }}"
                                                                            data-lot="" data-line-id="{{ $line['id'] }}"
                                                                            data-milestone="{{ $milestone }}"
                                                                            data-milestone-label="{{ $milestoneLabels[$milestone] ?? $milestone }}"
                                                                            data-cat-key="{{ $catKey }}" data-category="{{ $catMeta['label'] }}">
                                                                            <i class="ki-filled ki-pencil text-xs"></i>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                @endif
                                            @endforeach

                                        </tr>
                                    @empty
                                        <!-- Pas de lots pour cette ligne -->
                                        <tr class="group hover:bg-light/50 border-b border-gray-200">
                                            <td
                                                class="cell-hover-container relative sticky left-0 bg-white z-[14] font-bold text-sm border-r border-gray-300">
                                                {{ $line['system_type'] }}
                                                <!-- Bouton d'édition au survol -->
                                                <button
                                                    class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                    data-kt-drawer-toggle="#add_spm_drawer" onclick="openEditSpm(this)"
                                                    data-spm-id="{{ $line['id'] }}"
                                                    data-spm-system-type="{{ $line['system_type'] }}"
                                                    data-spm-package-type="{{ $line['package_type'] }}"
                                                    data-spm-description="{{ $line['package_description'] }}" data-spm-lots="[]"
                                                    title="Modifier le SPM">
                                                    <i class="ki-filled ki-pencil text-lg"></i>
                                                </button>
                                            </td>
                                            <td class="sticky left-[150px] bg-white z-[13] font-bold border-r border-gray-300">
                                                {{ $line['package_number'] }}
                                            </td>
                                            <td class="sticky left-[250px] bg-white z-[12] font-medium border-r-2 border-gray-400">
                                                {{ $line['package_description'] }}
                                            </td>
                                            <td colspan="20" class="text-center p-4 text-muted-foreground">Aucun lot défini pour ce
                                                package.</td>
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
                            <div class="w-4 h-4 rounded-full bg-white border-2 border-dashed border-success z-10 mt-1">
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

        <!-- Script Fullscreen -->
        <script>
            (function () {
                const btnFullscreen = document.getElementById('btn-fullscreen');
                const tableCard = document.getElementById('ppm-table-card');
                const iconFullscreen = document.getElementById('icon-fullscreen');
                const tableContent = document.getElementById('ppm-table-content');

                if (btnFullscreen && tableCard) {
                    btnFullscreen.addEventListener('click', function (e) {
                        e.preventDefault();
                        if (!document.fullscreenElement) {
                            tableCard.requestFullscreen().catch(err => {
                                alert(`Erreur d'activation du plein écran : ${err.message}`);
                            });
                        } else {
                            document.exitFullscreen();
                        }
                    });

                    document.addEventListener('fullscreenchange', function () {
                        if (document.fullscreenElement) {
                            iconFullscreen.classList.remove('ki-maximize');
                            iconFullscreen.classList.add('ki-arrow-down-left');
                            tableCard.classList.add('overflow-y-auto');
                        } else {
                            iconFullscreen.classList.remove('ki-arrow-down-left');
                            iconFullscreen.classList.add('ki-maximize');
                            tableCard.classList.remove('overflow-y-auto');
                        }
                    });
                }
            })();
        </script>
        <script>
            (function () {
                let lotIndexCounter = 0;

                // --- Gestion de l'ajout de lots dynamiques ---
                window.addLot = function (lotData = null) {
                    const template = document.getElementById('lot_template').innerHTML;
                    const container = document.getElementById('lots_container');

                    // Remplacement de l'index dans le template
                    let newLotHtml = template.replace(/__INDEX__/g, lotIndexCounter);

                    // Création d'un élément div temporaire pour manipuler le HTML
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = newLotHtml.trim();
                    const newLotEl = tempDiv.firstChild;

                    // Si des données sont fournies (édition), on pré-remplit les champs
                    if (lotData) {
                        if (lotData.id) newLotEl.querySelector('.lot-id').value = lotData.id;
                        if (lotData.name) newLotEl.querySelector('.lot-name').value = lotData.name;
                        if (lotData.description) newLotEl.querySelector('.lot-description').value = lotData.description;
                    }

                    // Gestion de la suppression
                    const removeBtn = newLotEl.querySelector('.btn-remove-lot');
                    if (removeBtn) {
                        removeBtn.addEventListener('click', function () {
                            newLotEl.remove();
                        });
                    }

                    container.appendChild(newLotEl);
                    lotIndexCounter++;
                };

                // --- Gestion de l'ouverture du Drawer (Édition vs Ajout) ---
                window.openEditSpm = function (btn) {
                    // C'est une modification
                    document.getElementById('spm_drawer_title').textContent = 'Modifier Ligne PPM';
                    document.getElementById('spm_line_id').value = btn.dataset.spmId || '';

                    const sysSelect = document.getElementById('spm_system_type');
                    sysSelect.value = btn.dataset.spmSystemType || '';
                    sysSelect.dispatchEvent(new Event('change'));
                    if (typeof $ !== 'undefined') $(sysSelect).trigger('change');

                    const pkgSelect = document.getElementById('spm_package_type');
                    pkgSelect.value = btn.dataset.spmPackageType || '';
                    pkgSelect.dispatchEvent(new Event('change'));
                    if (typeof $ !== 'undefined') $(pkgSelect).trigger('change');

                    document.getElementById('spm_package_description').value = btn.dataset.spmDescription || '';

                    // Vider les lots existants dans le conteneur
                    document.getElementById('lots_container').innerHTML = '';
                    lotIndexCounter = 0;

                    // Charger les lots
                    try {
                        const lots = JSON.parse(btn.dataset.spmLots || '[]');
                        if (lots.length > 0) {
                            lots.forEach(lot => addLot(lot));
                        } else {
                            addLot(); // Au moins un lot vide
                        }
                    } catch (e) {
                        console.error("Erreur parsing lots:", e);
                        addLot();
                    }
                };

                window.openAddSpm = function () {
                    // C'est un ajout (Bouton "Ajouter un SPM" en haut)
                    document.getElementById('spm_drawer_title').textContent = 'Nouvelle Ligne PPM';
                    document.getElementById('spm_form').reset();
                    document.getElementById('spm_line_id').value = '';
                    document.getElementById('lots_container').innerHTML = '';
                    lotIndexCounter = 0;
                    addLot(); // Un lot vide par défaut
                };

                // --- Gestion du Drawer d'Édition de Lot ---
                window.openEditLot = function (btn) {
                    const drawer = KTDrawer.getInstance(document.getElementById('edit_lot_drawer'));
                    if (!drawer) {
                        // Initialiser si nécessaire
                        new KTDrawer(document.getElementById('edit_lot_drawer'));
                    }

                    document.getElementById('lot_form').reset();
                    document.getElementById('lot_form_id').value = btn.dataset.lotId || '';

                    // Mettre à jour le titre
                    const lotName = btn.dataset.lotName || 'le Lot';
                    document.getElementById('lot_drawer_title').textContent = 'Caractéristiques de ' + lotName;

                    // Select2 peut nécessiter un trigger('change') si on utilise jquery
                    function setSelectVal(id, val) {
                        const el = document.getElementById(id);
                        if (el) {
                            el.value = val;
                            if (window.jQuery) {
                                window.jQuery(el).trigger('change');
                            }
                        }
                    }

                    document.getElementById('lot_tender_number').value = btn.dataset.lotTender || '';
                    setSelectVal('lot_amount_type', btn.dataset.lotAmountType || '');
                    document.getElementById('lot_estimated_cost').value = btn.dataset.lotEstimated || '';
                    setSelectVal('lot_procurement_method', btn.dataset.lotProcurement || '');
                    setSelectVal('lot_qualification_type', btn.dataset.lotQualification || '');
                    setSelectVal('lot_control_audit', btn.dataset.lotAudit || '');

                    // Le drawer s'ouvre soit manuellement soit parce que data-kt-drawer-toggle est utilisé.
                    // Puisqu'on ne l'a pas mis sur le bouton pour éviter les conflits, on l'ouvre manuellement :
                    const drawerInstance = KTDrawer.getInstance(document.getElementById('edit_lot_drawer'));
                    if (drawerInstance) {
                        drawerInstance.show();
                    }
                };

                window.saveLotData = async function () {
                    const form = document.getElementById('lot_form');
                    const formData = new FormData(form);

                    const btn = document.getElementById('btn_save_lot');
                    const originalText = btn.innerHTML;
                    btn.innerHTML = '<i class="ki-filled ki-loading"></i> Enregistrement...';
                    btn.disabled = true;

                    try {
                        const response = await fetch('/ppm-lots/save', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        const data = await response.json();

                        if (response.ok && data.success) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: "Caractéristiques du lot enregistrées !",
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: data.message || "Erreur lors de l'enregistrement",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true
                            });
                            btn.innerHTML = originalText;
                            btn.disabled = false;
                        }
                    } catch (error) {
                        console.error("Erreur serveur:", error);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Une erreur inattendue s'est produite.",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }
                };

                // --- Envoi du formulaire (AJAX) ---
                window.saveSpm = async function () {
                    const form = document.getElementById('spm_form');
                    const formData = new FormData(form);

                    // Ajouter le ppm_id (depuis l'URL)
                    const ppmId = "{{ $ppm['id'] }}";
                    formData.append('ppm_id', ppmId);

                    // Afficher un état de chargement sur le bouton
                    const btn = document.getElementById('btn_save_spm');
                    const originalText = btn.innerHTML;
                    btn.innerHTML = '<i class="ki-filled ki-loading"></i> Enregistrement...';
                    btn.disabled = true;

                    try {
                        const response = await fetch('/ppm-lines/save', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        const data = await response.json();

                        if (response.ok && data.success) {
                            // Succès -> afficher toast et recharger la page
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: "Ligne PPM enregistrée avec succès !",
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: data.message || "Erreur lors de l'enregistrement",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true
                            });
                            btn.innerHTML = originalText;
                            btn.disabled = false;
                        }
                    } catch (error) {
                        console.error("Erreur serveur:", error);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Une erreur inattendue s'est produite.",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }
                };
            })();
        </script>

        <script>
            function openDateModal(button, mode) {
                const spm = button.getAttribute('data-spm') || '';
                const lot = button.getAttribute('data-lot') || '';
                const milestone = button.getAttribute('data-milestone') || '';
                const milestoneLabel = button.getAttribute('data-milestone-label') || milestone;
                const category = button.getAttribute('data-category') || '';
                const existingDate = button.getAttribute('data-date') || '';
                const dateId = button.getAttribute('data-id') || '';
                window.currentDateId = dateId;
                window.currentLineId = button.getAttribute('data-line-id') || '';
                window.currentCatKey = button.getAttribute('data-cat-key') || '';
                window.currentMilestone = milestone;
                window.currentDateButton = button;

                const contextPath = document.getElementById('date_modal_context_path');
                const contextPathDoc = document.getElementById('date_modal_context_path_doc');
                const catKey = window.currentCatKey;
                const catColor = catKey === 'plan' ? 'kt-badge-light' : (catKey === 'revised' ? 'kt-badge-warning' : 'kt-badge-success');
                const breadcrumbHTML = `${spm} &gt; ${lot} &gt; <span class="kt-badge kt-badge-sm ${catColor} ml-1">${category}</span>`;

                if (contextPath) {
                    contextPath.innerHTML = breadcrumbHTML;
                }
                if (contextPathDoc) {
                    contextPathDoc.innerHTML = breadcrumbHTML;
                }

                // Mettre à jour le titre du modal
                const drawerTitle = document.getElementById('date_details_drawer_title');
                if (drawerTitle) {
                    drawerTitle.innerHTML = `${milestoneLabel} - ${lot}`;
                }

                const viewMode = document.getElementById('date_modal_view_mode');
                const editMode = document.getElementById('date_modal_edit_mode');
                const dateText = document.getElementById('date_modal_date_text');
                const dateTextDoc = document.getElementById('date_modal_date_text_doc');
                const dateInput = document.getElementById('date_modal_input');
                const inputLabel = document.getElementById('date_modal_input_label');
                const cancelBtn = document.getElementById('date_modal_cancel_btn');

                if (mode === 'add') {
                    // Mode Ajout: on affiche directement l'input, pas de mode vue
                    viewMode.classList.add('hidden');
                    editMode.classList.remove('hidden');
                    editMode.classList.add('flex');
                    dateInput.value = ''; // Champ vide
                    cancelBtn.classList.add('hidden'); // Pas d'annulation si on vient d'ajouter
                    setTimeout(() => dateInput.focus(), 300);
                    clearCommentsAndDocs();
                } else if (mode === 'view') {
                    viewMode.classList.remove('hidden');
                    viewMode.classList.add('flex');
                    editMode.classList.add('hidden');
                    cancelBtn.classList.remove('hidden');

                    if (existingDate) {
                        const d = new Date(existingDate);
                        const options = { day: '2-digit', month: 'long', year: 'numeric' };
                        const text = `Date enregistrée : ${d.toLocaleDateString('fr-FR', options)}`;
                        dateText.innerHTML = text;
                        if (dateTextDoc) dateTextDoc.innerHTML = text;
                        dateInput.value = existingDate.substring(0, 10);
                    } else {
                        const text = `Date de ${category.toLowerCase()} : Non définie`;
                        dateText.innerHTML = text;
                        if (dateTextDoc) dateTextDoc.innerHTML = text;
                        dateInput.value = '';
                    }

                    if (dateId) {
                        fetchDateDetails(dateId);
                    } else {
                        clearCommentsAndDocs();
                    }
                }
            }

            function clearCommentsAndDocs() {
                const commentsContainer = document.getElementById('date_details_comments_list');
                if (commentsContainer) commentsContainer.innerHTML = '<div class="text-sm text-muted-foreground italic">Aucun commentaire.</div>';

                const docsContainer = document.getElementById('date_details_docs_list');
                if (docsContainer) docsContainer.innerHTML = '<div class="text-sm text-muted-foreground italic">Aucun document joint.</div>';
            }

            document.getElementById('file_upload_input').addEventListener('change', function (e) {
                const files = e.target.files;
                if (!files.length) return;
                if (!window.currentDateId) {
                    Swal.fire({
                        toast: true, position: 'top-end', icon: 'warning', title: 'Veuillez d\'abord enregistrer la date.', showConfirmButton: false, timer: 3000
                    });
                    return;
                }

                const formData = new FormData();
                for (let i = 0; i < files.length; i++) {
                    formData.append('files[]', files[i]);
                }

                fetch(`/ppm-line-dates/${window.currentDateId}/documents`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            fetchDateDetails(window.currentDateId); // Recharge les documents
                            document.getElementById('file_upload_input').value = ''; // Reset input
                            Swal.fire({
                                toast: true, position: 'top-end', icon: 'success', title: data.message, showConfirmButton: false, timer: 3000
                            });
                        }
                    })
                    .catch(error => console.error('Erreur:', error));
            });

            function fetchDateDetails(dateId) {
                fetch(`/ppm-line-dates/${dateId}/details`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            renderComments(data.comments);
                            renderDocuments(data.documents);
                        }
                    })
                    .catch(error => console.error('Erreur lors du chargement des détails:', error));
            }

            function renderComments(comments) {
                const container = document.getElementById('date_details_comments_list');
                if (!container) return;

                if (!comments || comments.length === 0) {
                    container.innerHTML = '<div class="text-sm text-muted-foreground italic">Aucun commentaire.</div>';
                    return;
                }

                const dateOptions = { day: 'numeric', month: 'long', year: 'numeric' };

                container.innerHTML = comments.map(comment => `
                            <div class="flex grow gap-2.5">
                                <div class="kt-avatar size-8 rounded-full flex items-center justify-center shrink-0" style="background-color: #e2e8f0;">
                                    <span class="text-sm font-semibold" style="color: #475569;">U</span>
                                </div>
                                <div class="flex flex-col gap-2 grow">
                                    <div class="flex flex-col gap-1">
                                        <div class="text-sm font-medium">
                                            <a class="hover:text-primary text-mono font-semibold" href="#">Utilisateur</a>
                                            <span class="text-secondary-foreground"> a ajouté un commentaire</span>
                                        </div>
                                        <span class="flex items-center text-xs font-medium text-muted-foreground">
                                            ${new Date(comment.created_at).toLocaleDateString('fr-FR', dateOptions)}
                                        </span>
                                    </div>
                                    <div class="text-sm text-secondary-foreground" id="comment_text_${comment.id}">
                                        ${comment.content}
                                    </div>
                                    <div class="hidden flex-col gap-2" id="comment_edit_${comment.id}">
                                        <textarea id="comment_input_${comment.id}" class="kt-input text-sm text-secondary-foreground font-normal w-full min-h-[80px] py-3 px-3" rows="3">${comment.content}</textarea>
                                        <div class="flex items-center gap-2">
                                            <button class="kt-btn kt-btn-sm kt-btn-primary" onclick="saveComment(${comment.id})">Enregistrer</button>
                                            <button class="kt-btn kt-btn-sm kt-btn-light" onclick="cancelEditComment(${comment.id})">Annuler</button>
                                        </div>
                                    </div>
                                    <div class="flex gap-2" id="comment_actions_${comment.id}">
                                        <button class="kt-btn kt-btn-ghost kt-btn-sm text-xs" onclick="toggleEditComment(${comment.id})">
                                            <i class="ki-filled ki-pencil text-xs"></i>
                                            Modifier
                                        </button>
                                        <button class="kt-btn kt-btn-ghost kt-btn-sm text-xs text-danger" onclick="deleteComment(${comment.id})">
                                            <i class="ki-filled ki-trash text-xs"></i>
                                            Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-b-border my-2 last:hidden"></div>
                        `).join('');
            }

            function renderDocuments(documents) {
                const container = document.getElementById('date_details_docs_list');
                if (!container) return;

                if (!documents || documents.length === 0) {
                    container.innerHTML = '<div class="text-sm text-muted-foreground italic">Aucun document joint.</div>';
                    return;
                }

                container.innerHTML = documents.map(doc => {
                    let iconSrc = "{{ asset('assets/media/file-types/blank.svg') }}";
                    const ext = (doc.type || '').toLowerCase();
                    if (['pdf'].includes(ext)) iconSrc = "{{ asset('assets/media/file-types/pdf.svg') }}";
                    else if (['xls', 'xlsx', 'csv'].includes(ext)) iconSrc = "{{ asset('assets/media/file-types/xls.svg') }}";
                    else if (['doc', 'docx'].includes(ext)) iconSrc = "{{ asset('assets/media/file-types/doc.svg') }}";
                    else if (['jpg', 'jpeg', 'png', 'gif', 'svg'].includes(ext)) iconSrc = "{{ asset('assets/media/file-types/image.svg') }}";
                    else if (['zip', 'rar', 'tar', 'gz'].includes(ext)) iconSrc = "{{ asset('assets/media/file-types/zip.svg') }}";

                    // Parse date
                    const d = new Date(doc.created_at);
                    const dateOptions = { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' };
                    const dateStr = d.toLocaleDateString('fr-FR', dateOptions).replace(',', '');

                    return `
                                            <div class="flex grow gap-2.5 px-0 py-2 border-b border-b-border last:border-0">
                                                <div class="kt-avatar size-10">
                                                    <img class="h-10" src="${iconSrc}" onerror="this.src='{{ asset('assets/media/file-types/blank.svg') }}'" />
                                                </div>
                                                <div class="flex flex-col gap-1 grow">
                                                    <div class="flex items-center justify-between">
                                                        <a class="hover:text-primary font-medium text-secondary-foreground text-sm truncate max-w-[200px]"
                                                            href="/storage/${doc.path}" target="_blank">
                                                            ${doc.name}
                                                        </a>
                                                        <div class="flex gap-1 shrink-0">
                                                            <a href="/storage/${doc.path}" download class="kt-btn kt-btn-ghost kt-btn-icon kt-btn-sm" title="Télécharger">
                                                                <i class="ki-filled ki-download text-muted-foreground"></i>
                                                            </a>
                                                            <button class="kt-btn kt-btn-ghost kt-btn-icon kt-btn-sm text-danger hover:bg-danger-light" title="Supprimer" onclick="deleteDocument(${doc.id})">
                                                                <i class="ki-filled ki-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                                        <span>${Math.round((doc.size || 0) / 1024)} KB</span>
                                                        <span class="rounded-full size-1 bg-mono/30"></span>
                                                        <span>Ajouté par un utilisateur</span>
                                                        <span class="rounded-full size-1 bg-mono/30"></span>
                                                        <span>${dateStr}</span>
                                                    </div>
                                                </div>
                                            </div>
                            `;
                }).join('');
            }

            window.deleteDocument = function (docId) {
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Voulez-vous vraiment supprimer ce document ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#64748b',
                    confirmButtonText: 'Oui, supprimer !',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/ppm-line-dates/documents/${docId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire({
                                        toast: true,
                                        position: 'top-end',
                                        icon: 'success',
                                        title: data.message,
                                        showConfirmButton: false,
                                        timer: 3000
                                    });
                                    if (window.currentDateId) {
                                        fetchDateDetails(window.currentDateId);
                                    }
                                }
                            })
                            .catch(error => console.error('Erreur:', error));
                    }
                });
            };

            function toggleDateEditMode() {
                document.getElementById('date_modal_view_mode').classList.add('hidden');
                document.getElementById('date_modal_view_mode').classList.remove('flex');

                document.getElementById('date_modal_edit_mode').classList.remove('hidden');
                document.getElementById('date_modal_edit_mode').classList.add('flex');
                document.getElementById('date_modal_input').focus();
            }

            function cancelDateEditMode() {
                document.getElementById('date_modal_edit_mode').classList.add('hidden');
                document.getElementById('date_modal_edit_mode').classList.remove('flex');

                document.getElementById('date_modal_view_mode').classList.remove('hidden');
                document.getElementById('date_modal_view_mode').classList.add('flex');
            }

            function saveModalDate() {
                const dateValue = document.getElementById('date_modal_input').value;
                if (!dateValue || (!window.currentDateId && !window.currentLineId)) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Veuillez sélectionner une date.',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    return;
                }

                fetch('/ppm-line-dates/save', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: window.currentDateId,
                        ppm_line_id: window.currentLineId,
                        milestone_type: window.currentMilestone,
                        date_category: window.currentCatKey,
                        date_value: dateValue
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 3000
                            });

                            const d = new Date(data.date_value);
                            const textOptions = { day: '2-digit', month: 'long', year: 'numeric' };
                            const newText = `Date enregistrée : ${d.toLocaleDateString('fr-FR', textOptions)}`;
                            document.getElementById('date_modal_date_text').innerHTML = newText;
                            const docDateText = document.getElementById('date_modal_date_text_doc');
                            if (docDateText) docDateText.innerHTML = newText;

                            window.currentDateId = data.date.id; // maj de l'id si création

                            const options = { day: '2-digit', month: 'short', year: 'numeric' };
                            const formattedDate = d.toLocaleDateString('fr-FR', options).replace('.', '');

                            const container = window.currentDateButton.closest('.flex.items-center.justify-between.gap-2') || window.currentDateButton.closest('div');
                            if (container) {
                                if (window.currentDateButton.classList.contains('edit-btn')) {
                                    // Mode création : on transforme le contenu de la cellule
                                    const catLabel = window.currentDateButton.getAttribute('data-category');
                                    const catColor = window.currentCatKey === 'plan' ? 'kt-badge-light' : (window.currentCatKey === 'revised' ? 'kt-badge-warning' : 'kt-badge-success');

                                    container.innerHTML = `
                                            <div class="flex items-center gap-1.5">
                                                <span class="text-sm font-medium">
                                                    ${formattedDate}
                                                </span>
                                                <span class="kt-badge kt-badge-sm ${catColor}">
                                                    ${catLabel}
                                                </span>
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100 shrink-0"
                                                title="Voir commentaires et fichiers"
                                                data-kt-drawer-toggle="#date_details_drawer"
                                                onclick="openDateModal(this, 'view')"
                                                data-id="${data.date.id}"
                                                data-line-id="${window.currentLineId}"
                                                data-cat-key="${window.currentCatKey}"
                                                data-spm="${window.currentDateButton.getAttribute('data-spm')}"
                                                data-lot="${window.currentDateButton.getAttribute('data-lot')}"
                                                data-milestone="${window.currentMilestone}"
                                                data-milestone-label="${window.currentDateButton.getAttribute('data-milestone-label')}"
                                                data-category="${catLabel}"
                                                data-date="${data.date_value}">
                                                <i class="ki-filled ki-eye text-xs"></i>
                                            </button>
                                        `;
                                    // Mettre à jour le bouton actuel au cas où on reclique
                                    window.currentDateButton = container.querySelector('button');
                                    KTDrawer.createInstances();
                                } else {
                                    // Mode update
                                    const span = container.querySelector('span.text-sm');
                                    if (span) span.innerHTML = formattedDate;
                                    window.currentDateButton.setAttribute('data-date', data.date_value);
                                }
                            }
                            cancelDateEditMode();
                        }
                    })
                    .catch(error => console.error('Erreur:', error));
            }

            function publishComment() {
                const content = document.getElementById('new_comment_input').value;
                if (!content.trim() || !window.currentDateId) return;

                fetch(`/ppm-line-dates/${window.currentDateId}/comments`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ content: content })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('new_comment_input').value = '';
                            fetchDateDetails(window.currentDateId); // recharger les commentaires
                        }
                    });
            }

            function toggleEditComment(id) {
                document.getElementById(`comment_text_${id}`).classList.add('hidden');
                document.getElementById(`comment_actions_${id}`).classList.add('hidden');

                const editContainer = document.getElementById(`comment_edit_${id}`);
                editContainer.classList.remove('hidden');
                editContainer.classList.add('flex');
                document.getElementById(`comment_input_${id}`).focus();
            }

            function cancelEditComment(id) {
                const editContainer = document.getElementById(`comment_edit_${id}`);
                editContainer.classList.add('hidden');
                editContainer.classList.remove('flex');

                document.getElementById(`comment_text_${id}`).classList.remove('hidden');
                document.getElementById(`comment_actions_${id}`).classList.remove('hidden');
            }

            function saveComment(id) {
                const content = document.getElementById(`comment_input_${id}`).value;
                if (!content.trim()) return;

                fetch(`/ppm-line-date-comments/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ content: content })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) fetchDateDetails(window.currentDateId);
                    });
            }

            function deleteComment(id) {
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Vous ne pourrez pas annuler cette action !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer !',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/ppm-line-date-comments/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) fetchDateDetails(window.currentDateId);
                            });
                    }
                });
            }
        </script>
@endsection