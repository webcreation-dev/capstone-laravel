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
            .cell-hover-container .edit-btn { opacity: 0; transition: opacity 0.2s; }
            .cell-hover-container:hover .edit-btn { opacity: 1; }
        </style>
        <div class="kt-container-fluid flex items-start gap-5 transition-all duration-300 relative">
            <!-- Main Table Container -->
            <div class="kt-card grow min-w-0 overflow-hidden rounded-none bg-white" style="border-radius: 0 !important;"
                id="ppm-table-card">
                <div class="kt-card-header justify-center relative">
                    <h3 class="kt-card-title text-center uppercase px-10">{{ $ppm['dossier_name'] }}
                        <span class="text-sm text-muted-foreground ml-2">({{ $ppm['reference'] }})</span>
                    </h3>
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
                                        class="sticky left-[250px] top-0 bg-gray-100 z-[32] w-[200px] min-w-[200px] max-w-[200px] whitespace-normal border-r border-b-2 border-gray-300 py-2.5 px-3 text-xs font-semibold uppercase">
                                        Description du Package</th>
                                    <th style="left: 450px;"
                                        class="sticky top-0 bg-gray-100 z-[31] w-[130px] min-w-[130px] max-w-[130px] border-r-2 border-b-2 border-gray-400 py-2.5 px-3 text-xs font-semibold uppercase">
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
                                        'notice_no',
                                        'ias',
                                        'deposit_opening',
                                        'report_submission',
                                        'no_objection',
                                        'attribution',
                                        'signature',
                                        'completion'
                                    ];
                                @endphp

                                @forelse($ppm['lines'] as $lineIdx => $line)
                                    @php
                                        // Nombre de lots de la ligne * 3 categories
                                        $lineRowSpan = max(1, count($line['lots']) * 3);
                                    @endphp

                                    @forelse($line['lots'] as $lotIdx => $lot)
                                        @foreach($dateCategories as $catKey => $catMeta)
                                            <tr class="group hover:bg-light/50 border-b border-gray-200">

                                                @if($lotIdx === 0 && $loop->first)
                                                    <!-- Début SPM -->
                                                    <td class="cell-hover-container relative sticky left-0 bg-white group-hover:bg-gray-50 z-[14] font-bold text-sm border-r border-gray-300 w-[150px] min-w-[150px] max-w-[150px]"
                                                        rowspan="{{ $lineRowSpan }}">
                                                        {{ $line['system_type'] }}
                                                        <!-- <br><span class="text-xs font-normal text-muted-foreground">{{ $line['package_type'] }}</span> -->
                                                        <!-- Bouton d'édition au survol -->
                                                        <button class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                                data-kt-drawer-toggle="#add_spm_drawer"
                                                                onclick="openEditSpm(this)"
                                                                data-spm-id="{{ $line['id'] }}"
                                                                data-spm-system-type="{{ $line['system_type'] }}"
                                                                data-spm-package-type="{{ $line['package_type'] }}"
                                                                data-spm-description="{{ $line['package_description'] }}"
                                                                data-spm-lots="{{ json_encode($line['lots']) }}"
                                                                title="Modifier le SPM">
                                                            <i class="ki-filled ki-pencil text-lg"></i>
                                                        </button>
                                                    </td>
                                                    <td class="sticky left-[150px] bg-white group-hover:bg-gray-50 z-[13] font-bold border-r border-gray-300 w-[100px] min-w-[100px] max-w-[100px]"
                                                        rowspan="{{ $lineRowSpan }}">
                                                        {{ $line['package_number'] }}
                                                    </td>
                                                    <td class="sticky left-[250px] bg-white group-hover:bg-gray-50 z-[12] font-medium border-r border-gray-300 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal break-words"
                                                        rowspan="{{ $lineRowSpan }}">
                                                        {{ $line['package_description'] ?: 'Aucune description' }}
                                                    </td>
                                                @endif

                                                @if($loop->first)
                                                    <!-- Début Lot -->
                                                    <td style="left: 450px;" class="cell-hover-container relative sticky bg-white z-[11] font-bold border-r-2 border-gray-400 w-[130px] min-w-[130px] max-w-[130px] col-separator group-hover:bg-gray-50"
                                                        rowspan="3">
                                                        {{ $lot['name'] }}
                                                        <button class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                                onclick="openEditLot(this)"
                                                                data-lot-id="{{ $lot['id'] }}"
                                                                data-lot-name="{{ $lot['name'] }}"
                                                                data-lot-tender="{{ $lot['tender_number'] }}"
                                                                data-lot-amount-type="{{ $lot['amount_type'] }}"
                                                                data-lot-estimated="{{ $lot['estimated_cost'] }}"
                                                                data-lot-procurement="{{ $lot['procurement_method'] }}"
                                                                data-lot-qualification="{{ $lot['qualification_type'] }}"
                                                                data-lot-audit="{{ $lot['control_audit'] }}"
                                                                title="Modifier les caractéristiques du Lot">
                                                            <i class="ki-filled ki-pencil text-lg"></i>
                                                        </button>
                                                    </td>
                                                    <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words"
                                                        rowspan="3">
                                                        {{ $lot['description'] ?: 'Aucune description' }}
                                                    </td>

                                                    <td class="text-muted-foreground" rowspan="3">{{ $lot['tender_number'] ?: '-' }}</td>
                                                    <td class="text-muted-foreground" rowspan="3">{{ $lot['amount_type'] ?: '-' }}</td>
                                                    <td class="text-muted-foreground" rowspan="3">
                                                        {{ $lot['estimated_cost'] ? number_format($lot['estimated_cost'], 0, ',', ' ') : '-' }}
                                                    </td>
                                                    <td rowspan="3">
                                                        <span
                                                            class="kt-badge kt-badge-light-primary">{{ $lot['procurement_method'] ?: '-' }}</span>
                                                    </td>
                                                    <td class="text-muted-foreground" rowspan="3">{{ $lot['qualification_type'] ?: '-' }}
                                                    </td>
                                                    <td class="text-muted-foreground" rowspan="3">{{ $lot['control_audit'] ?: '-' }}</td>
                                                @endif

                                                <!-- Dates (9 colonnes) -->
                                                @foreach($milestoneTypes as $milestone)
                                                    @if($milestone === 'signature' && $loop->parent->first)
                                                        <!-- Montant du contrat -->
                                                        <td class="border-r font-medium text-center" rowspan="3">
                                                            {{ $lot['contract_amount'] ? number_format($lot['contract_amount'], 0, ',', ' ') : '-' }}
                                                        </td>
                                                    @endif
                                                    <td class="p-2 cell-hover-container relative group/cell">
                                                        <div class="flex items-center justify-between gap-2 h-full min-h-[40px]">
                                                            @if(isset($lot['dates'][$milestone][$catKey]['date_value']))
                                                                <div class="flex flex-col items-start gap-1">
                                                                    <span class="text-sm">
                                                                        {{ \Carbon\Carbon::parse($lot['dates'][$milestone][$catKey]['date_value'])->format('d M Y') }}
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
                                                                    data-spm="{{ $line['system_type'] }}"
                                                                    data-lot="{{ $lot['name'] }}"
                                                                    data-milestone="{{ $milestone }}"
                                                                    data-category="{{ $catMeta['label'] }}"
                                                                    data-date="{{ $lot['dates'][$milestone][$catKey]['date_value'] }}">
                                                                    <i class="ki-filled ki-eye text-xs"></i>
                                                                </button>
                                                            @else
                                                                <span class="text-sm text-muted-foreground">-</span>
                                                                <button
                                                                    class="edit-btn absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 kt-btn kt-btn-xs kt-btn-icon kt-btn-primary rounded-full shadow-sm"
                                                                    title="Ajouter une date"
                                                                    data-kt-drawer-toggle="#date_details_drawer"
                                                                    onclick="openDateModal(this, 'add')"
                                                                    data-spm="{{ $line['system_type'] }}"
                                                                    data-lot="{{ $lot['name'] }}"
                                                                    data-milestone="{{ $milestone }}"
                                                                    data-category="{{ $catMeta['label'] }}">
                                                                    <i class="ki-filled ki-plus text-xs"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                @endforeach

                                            </tr>
                                        @endforeach
                                    @empty
                                        <!-- Pas de lots pour cette ligne -->
                                        <tr class="group hover:bg-light/50 border-b border-gray-200">
                                            <td class="cell-hover-container relative sticky left-0 bg-white z-[14] font-bold text-sm border-r border-gray-300">
                                                {{ $line['system_type'] }}
                                                <!-- Bouton d'édition au survol -->
                                                <button class="edit-btn absolute top-1 right-1 transition-opacity text-muted-foreground hover:text-primary"
                                                        data-kt-drawer-toggle="#add_spm_drawer"
                                                        onclick="openEditSpm(this)"
                                                        data-spm-id="{{ $line['id'] }}"
                                                        data-spm-system-type="{{ $line['system_type'] }}"
                                                        data-spm-package-type="{{ $line['package_type'] }}"
                                                        data-spm-description="{{ $line['package_description'] }}"
                                                        data-spm-lots="[]"
                                                        title="Modifier le SPM">
                                                    <i class="ki-filled ki-pencil text-lg"></i>
                                                </button>
                                            </td>
                                            <td class="sticky left-[150px] bg-white z-[13] font-bold border-r border-gray-300">
                                                {{ $line['package_number'] }}</td>
                                            <td class="sticky left-[250px] bg-white z-[12] font-medium border-r-2 border-gray-400">
                                                {{ $line['package_description'] }}</td>
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
                (function() {
                    let lotIndexCounter = 0;
                    
                    // --- Gestion de l'ajout de lots dynamiques ---
                    window.addLot = function(lotData = null) {
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
                            if(lotData.id) newLotEl.querySelector('.lot-id').value = lotData.id;
                            if(lotData.name) newLotEl.querySelector('.lot-name').value = lotData.name;
                            if(lotData.description) newLotEl.querySelector('.lot-description').value = lotData.description;
                        }
                        
                        // Gestion de la suppression
                        const removeBtn = newLotEl.querySelector('.btn-remove-lot');
                        if (removeBtn) {
                            removeBtn.addEventListener('click', function() {
                                newLotEl.remove();
                            });
                        }
                        
                        container.appendChild(newLotEl);
                        lotIndexCounter++;
                    };

                    // --- Gestion de l'ouverture du Drawer (Édition vs Ajout) ---
                    window.openEditSpm = function(btn) {
                        // C'est une modification
                        document.getElementById('spm_drawer_title').textContent = 'Modifier Ligne PPM';
                        document.getElementById('spm_line_id').value = btn.dataset.spmId || '';
                        document.getElementById('spm_system_type').value = btn.dataset.spmSystemType || '';
                        document.getElementById('spm_package_type').value = btn.dataset.spmPackageType || '';
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
                        } catch(e) {
                            console.error("Erreur parsing lots:", e);
                            addLot();
                        }
                    };

                    window.openAddSpm = function() {
                        // C'est un ajout (Bouton "Ajouter un SPM" en haut)
                        document.getElementById('spm_drawer_title').textContent = 'Nouvelle Ligne PPM';
                        document.getElementById('spm_form').reset();
                        document.getElementById('spm_line_id').value = '';
                        document.getElementById('lots_container').innerHTML = '';
                        lotIndexCounter = 0;
                        addLot(); // Un lot vide par défaut
                    };

                    // --- Gestion du Drawer d'Édition de Lot ---
                    window.openEditLot = function(btn) {
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

                    window.saveLotData = async function() {
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
                    window.saveSpm = async function() {
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
                // --- Gestion de la modale des dates ---
                function openDateModal(button, mode) {
                    const spm = button.getAttribute('data-spm') || '';
                    const lot = button.getAttribute('data-lot') || '';
                    const milestone = button.getAttribute('data-milestone') || '';
                    const category = button.getAttribute('data-category') || '';
                    const existingDate = button.getAttribute('data-date') || '';
                    
                    // Mettre à jour le fil d'ariane
                    const contextPath = document.getElementById('date_modal_context_path');
                    if (contextPath) {
                        contextPath.innerHTML = `${spm} &gt; ${lot} &gt; ${category}`;
                    }

                    const viewMode = document.getElementById('date_modal_view_mode');
                    const editMode = document.getElementById('date_modal_edit_mode');
                    const dateText = document.getElementById('date_modal_date_text');
                    const dateInput = document.getElementById('date_modal_input');
                    const inputLabel = document.getElementById('date_modal_input_label');
                    const cancelBtn = document.getElementById('date_modal_cancel_btn');

                    if (mode === 'add') {
                        // Mode Ajout: on affiche directement l'input, pas de mode vue
                        viewMode.classList.add('hidden');
                        editMode.classList.remove('hidden');
                        editMode.classList.add('flex');
                        dateInput.value = ''; // Champ vide
                        cancelBtn.classList.add('hidden'); // Pas d'annulation si on vient d'ajouter (sauf si on ferme le drawer)
                        
                        // Optionnel: focus sur l'input après l'ouverture du drawer
                        setTimeout(() => dateInput.focus(), 300);
                    } else if (mode === 'view') {
                        // Mode Vue: on affiche le texte par défaut
                        viewMode.classList.remove('hidden');
                        viewMode.classList.add('flex');
                        editMode.classList.remove('flex');
                        editMode.classList.add('hidden');
                        cancelBtn.classList.remove('hidden'); // On peut annuler pour revenir au mode vue
                        
                        if (existingDate) {
                            // Formater la date pour l'affichage (optionnel, fait côté serveur d'habitude, mais on le met tel quel ou on parse)
                            const d = new Date(existingDate);
                            const options = { day: '2-digit', month: 'long', year: 'numeric' };
                            dateText.innerHTML = `Date de ${category.toLowerCase()} : ${d.toLocaleDateString('fr-FR', options)}`;
                            dateInput.value = existingDate.split('T')[0]; // Pré-remplir l'input pour édition future
                        } else {
                            dateText.innerHTML = `Date de ${category.toLowerCase()} : Non définie`;
                        }
                    }
                }

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
                    if (!dateValue) {
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
                    
                    // Ici on ferait la requête AJAX pour sauvegarder...
                    // Pour le moment on simule le succès
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Date enregistrée avec succès.',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    // Optionnel : fermer le drawer ou revenir en mode vue
                    // const drawerEl = document.getElementById('date_details_drawer');
                    // const drawer = KTDrawer.getInstance(drawerEl);
                    // if(drawer) drawer.hide();
                    
                    // Ou simplement revenir en mode vue avec la nouvelle date
                    document.getElementById('date_modal_date_text').innerHTML = `Date enregistrée : ${dateValue}`;
                    cancelDateEditMode();
                }
                </script>
@endsection