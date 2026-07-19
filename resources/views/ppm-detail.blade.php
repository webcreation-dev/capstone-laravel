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
                            <a href="/form" class="kt-btn kt-btn-outline">
                                <i class="ki-filled ki-plus"></i> Ajouter un SPM
                            </a>
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
                            <h3 class="kt-card-title text-center">PROJET D'AMENAGEMENT DE LA ROUTE
                                DJOUGOU-PEHUNCO-KEROU-BANIKOARA
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
                                        <!-- SPM 1 - TRVX-1 -->
                                        <!-- Lot 1 - Ligne 1 : Plan -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Actions au hover -->
                                            <div
                                                class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity flex gap-1 bg-white shadow-lg rounded-lg p-1 z-[40] border border-border">
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Ajouter une révision">
                                                    <i class="ki-filled ki-plus-circle text-warning"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Modifier SPM" data-kt-modal-toggle="#modal_add_spm">
                                                    <i class="ki-filled ki-pencil text-info"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Supprimer SPM">
                                                    <i class="ki-filled ki-trash text-danger"></i>
                                                </button>
                                            </div>

                                            <!-- Colonnes sticky avec rowspan pour tout le SPM -->
                                            <td class="sticky left-0 bg-white group-hover:bg-gray-50 z-[14] font-bold text-sm border-r border-gray-300 w-[150px] min-w-[150px] max-w-[150px]"
                                                rowspan="9">SPM-TRVX-1</td>
                                            <td class="sticky left-[150px] bg-white group-hover:bg-gray-50 z-[13] font-bold border-r border-gray-300 w-[100px] min-w-[100px] max-w-[100px]"
                                                rowspan="9">T-01</td>
                                            <td class="sticky left-[250px] bg-white group-hover:bg-gray-50 z-[12] font-medium border-r-2 border-gray-400 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal break-words col-separator"
                                                rowspan="9">Travaux de construction du tronçon Djougou-Pehunco</td>

                                            <!-- Lot 1 avec rowspan pour toutes ses lignes de suivi -->
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 w-[80px]"
                                                rowspan="5">Lot 1</td>
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words"
                                                rowspan="5">Section A (0-50km)</td>

                                            <!-- 6 colonnes techniques - rowspan couvre tout le lot -->
                                            <td class="text-muted-foreground" rowspan="5">-</td>
                                            <td class="text-muted-foreground" rowspan="5">-</td>
                                            <td class="text-muted-foreground" rowspan="5">-</td>
                                            <td rowspan="5"><span class="kt-badge kt-badge-light-primary">AOO</span>
                                            </td>
                                            <td class="text-muted-foreground" rowspan="5">-</td>
                                            <td class="text-muted-foreground" rowspan="5">-</td>

                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-calendar text-gray-400"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-light">Plan</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">02 Juin 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">15 Juin 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Ouverture -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">01 Juil 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Rapport d'évaluation -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">15 Juil 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Attribution -->

                                            <td class="text-muted-foreground">-</td>
                                            <!-- Montant -->
                                            <td class="border-r font-medium" rowspan="5">12.500.000.000</td>
                                            <!-- Signature -->
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Achèvement -->
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 1 - Ligne 2 : Révisé 1 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 1</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">03 Juil 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">20 Août 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 1 - Ligne 3 : Révisé 2 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 2</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">03 Juil 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">21 Août 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 1 - Ligne 4 : Révisé 3 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 3</span>
                                                </div>
                                            </td>

                                            <!-- Dossier AO -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Période AO -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 1 - Ligne 5 : Réel -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-300">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-check-circle text-success"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-success">Réel</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission RÉELLE -->
                                            <td class="p-2 bg-green-50/30">
                                                <div class="flex items-center justify-between gap-2">
                                                    <div class="flex flex-col">
                                                        <span class="text-sm font-medium text-green-700">03 Juil
                                                            2027</span>

                                                    </div>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO RÉELLE -->
                                            <td class="p-2 bg-green-50/30">
                                                <div class="flex items-center justify-between gap-2">
                                                    <div class="flex flex-col">
                                                        <span class="text-sm font-medium text-green-700">21 Août
                                                            2027</span>
                                                    </div>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 2 - Ligne 1 : Plan -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Actions au hover pour lot -->
                                            <div
                                                class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity flex gap-1 bg-white shadow-lg rounded-lg p-1 z-[40] border border-border">
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Ajouter une révision">
                                                    <i class="ki-filled ki-plus-circle text-warning"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Modifier ce lot">
                                                    <i class="ki-filled ki-pencil text-info"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Supprimer ce lot">
                                                    <i class="ki-filled ki-trash text-danger"></i>
                                                </button>
                                            </div>

                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 w-[80px]"
                                                rowspan="4">Lot 2</td>
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words"
                                                rowspan="4">Section B (50-100km)</td>


                                            <!-- 6 colonnes techniques - rowspan couvre tout le lot -->
                                            <td class="text-muted-foreground" rowspan="4">-</td>
                                            <td class="text-muted-foreground" rowspan="4">-</td>
                                            <td class="text-muted-foreground" rowspan="4">-</td>
                                            <td rowspan="4"><span class="kt-badge kt-badge-light-primary">AOO</span>
                                            </td>
                                            <td class="text-muted-foreground" rowspan="4">-</td>
                                            <td class="text-muted-foreground" rowspan="4">-</td>

                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-calendar text-gray-400"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-light">Plan</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">02 Juin 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">15 Juin 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Ouverture -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">01 Juil 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Rapport d'évaluation -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">15 Juil 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Attribution -->

                                            <td class="text-muted-foreground">-</td>
                                            <!-- Montant -->
                                            <td class="border-r font-medium" rowspan="4">15.200.000.000</td>
                                            <!-- Signature -->
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Achèvement -->
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 2 - Ligne 2 : Révisé 1 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 1</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">03 Juil 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">20 Août 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 2 - Ligne 3 : Révisé 2 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 2</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">03 Juil 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <!-- Date d'Avis NO -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">21 Août 2027</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Lot 2 - Ligne 4 : Réel (dernière ligne du SPM) -->
                                        <tr class="group hover:bg-light/50 relative lot-end">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-check-circle text-success"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-success">Réel</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission RÉELLE -->
                                            <td class="p-2 bg-green-50/30">
                                                <div class="flex items-center justify-between gap-2">
                                                    <div class="flex flex-col">
                                                        <span class="text-sm font-medium text-green-700">03 Juil
                                                            2027</span>
                                                    </div>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- SPM 2 - BIENS-1 -->
                                        <!-- Ligne 1 : Plan -->
                                        <tr
                                            class="group hover:bg-light/50 border-t-2 border-t-gray-200 relative border-b border-gray-200 spm-start">
                                            <!-- Actions au hover -->
                                            <div
                                                class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity flex gap-1 bg-white shadow-lg rounded-lg p-1 z-[40] border border-border">
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Ajouter une révision">
                                                    <i class="ki-filled ki-plus-circle text-warning"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Modifier SPM" data-kt-modal-toggle="#modal_add_spm">
                                                    <i class="ki-filled ki-pencil text-info"></i>
                                                </button>
                                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-light"
                                                    title="Supprimer SPM">
                                                    <i class="ki-filled ki-trash text-danger"></i>
                                                </button>
                                            </div>

                                            <!-- Colonnes sticky avec rowspan -->
                                            <td class="sticky left-0 bg-white group-hover:bg-gray-50 z-[14] font-bold text-sm border-r border-gray-300 w-[150px] min-w-[150px] max-w-[150px]"
                                                rowspan="3">SPM-BIENS-1</td>
                                            <td class="sticky left-[150px] bg-white group-hover:bg-gray-50 z-[13] font-bold border-r border-gray-300 w-[100px] min-w-[100px] max-w-[100px]"
                                                rowspan="3">B-01</td>
                                            <td class="sticky left-[250px] bg-white group-hover:bg-gray-50 z-[12] font-medium border-r-2 border-gray-400 w-[200px] min-w-[200px] max-w-[200px] whitespace-normal break-words col-separator"
                                                rowspan="3">Acquisition de matériel informatique</td>
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 w-[80px]"
                                                rowspan="3">Unique</td>
                                            <td class="bg-white group-hover:bg-gray-50 border-r border-gray-300 min-w-[200px] whitespace-normal break-words"
                                                rowspan="3">Matériel complet</td>

                                            <!-- 6 colonnes techniques - rowspan couvre tout le lot -->
                                            <td class="text-muted-foreground" rowspan="3">-</td>
                                            <td class="text-muted-foreground" rowspan="3">-</td>
                                            <td class="text-muted-foreground" rowspan="3">-</td>
                                            <td rowspan="3"><span class="kt-badge kt-badge-light-info">DRP</span></td>
                                            <td class="text-muted-foreground" rowspan="3">-</td>
                                            <td class="text-muted-foreground" rowspan="3">-</td>

                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-calendar text-gray-400"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-light">Plan</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission (en retard) -->
                                            <td class="p-2 bg-red-50/30">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm text-danger font-medium">10 Mai 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Attribution -->
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Montant -->
                                            <td class="border-r font-medium" rowspan="3">45.000.000</td>
                                            <!-- Signature -->
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Achèvement -->
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Ligne 2 : Révisé 1 -->
                                        <tr class="group hover:bg-light/50 relative border-b border-gray-200">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 1</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">15 Juin 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

                                        <!-- Ligne 3 : Révisé 2 (dernière ligne du SPM) -->
                                        <tr class="group hover:bg-light/50 relative lot-end">
                                            <!-- Colonne Type de Suivi -->
                                            <td class="border-r">
                                                <div class="flex items-center gap-2">
                                                    <i class="ki-filled ki-time text-warning"></i>
                                                    <span class="kt-badge kt-badge-sm kt-badge-warning">Révisé 2</span>
                                                </div>
                                            </td>

                                            <!-- Date de soumission révisée -->
                                            <td class="p-2">
                                                <div class="flex items-center justify-between gap-2">
                                                    <span class="text-sm">20 Juil 2026</span>
                                                    <button
                                                        class="kt-btn kt-btn-xs kt-btn-icon kt-btn-ghost opacity-50 hover:opacity-100"
                                                        title="Voir commentaires et fichiers"
                                                        data-kt-drawer-toggle="#date_details_drawer">
                                                        <i class="ki-filled ki-eye text-xs"></i>
                                                    </button>
                                                </div>
                                            </td>

                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Évaluation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <!-- Finalisation -->
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                            <td class="text-muted-foreground">-</td>
                                        </tr>

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
