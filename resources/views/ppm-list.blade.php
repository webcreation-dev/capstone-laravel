@extends('layouts.app')

@section('content')
  <!-- Content -->
  <main class="grow pt-5" id="content" role="content">
    <!-- Container -->
    <div class="kt-container-fixed" id="contentContainer">
    </div>
    <!-- End of Container -->
    <!-- Container -->
    <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
          <h1 class="text-xl font-medium leading-none text-mono">Liste des Plans de Passation des Marchés </h1>
          <!-- <div class="flex items-center flex-wrap gap-1.5 font-medium">
                    <span class="text-base text-secondary-foreground">
                      Total Missions:
                    </span>
                    <span class="text-base text-foreground font-medium me-2">
                      12
                    </span>
                    <span class="text-base text-secondary-foreground">
                      En Cours:
                    </span>
                    <span class="text-base text-foreground font-medium">
                      5
                    </span>
                  </div> -->
        </div>
        <div class="flex items-center gap-2.5">
          <a class="kt-btn kt-btn-outline" href="#">
            Importer PPM
          </a>
          <button class="kt-btn kt-btn-primary" data-kt-drawer-toggle="#create_ppm_drawer">
            Nouveau Projet
          </button>
        </div>
      </div>
    </div>
    <!-- End of Container -->
    <!-- Container -->
    <div class="kt-container-fixed">
      <div class="grid gap-5 lg:gap-7.5">
        <div class="kt-card kt-card-grid min-w-full !rounded-none" style="border-radius: 0 !important;">
          <div class="kt-card-header flex-wrap gap-2">
            <h3 class="kt-card-title text-sm">
              Affichage de 4 missions sur 12
            </h3>
            <div class="flex flex-wrap gap-2 lg:gap-5">
              <div class="flex">
                <label class="kt-input">
                  <i class="ki-filled ki-magnifier">
                  </i>
                  <input data-kt-datatable-search="#team_crew_table" placeholder="Rechercher une mission" type="text"
                    value="" />
                </label>
              </div>
              <div class="flex flex-wrap gap-2.5">
                <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Statut">
                  <option value="1">En cours</option>
                  <option value="2">
                    Terminé
                  </option>
                  <option value="3">
                    Annulé
                  </option>
                </select>
                <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Trier par">
                  <option value="1">
                    Plus récents
                  </option>
                  <option value="2">
                    Plus anciens
                  </option>
                </select>
                <button class="kt-btn kt-btn-outline kt-btn-primary">
                  <i class="ki-filled ki-setting-4">
                  </i>
                  Filtrer
                </button>
              </div>
            </div>
          </div>
          <div class="kt-card-content">
            <div data-kt-datatable="true" data-kt-datatable-state-save="false" id="team_crew_table">
              <div class="kt-scrollable-x-auto">
                <table class="kt-table table-auto kt-table-border" data-kt-datatable-table="true">
                  <thead>
                    <tr>
                      <th class="w-[60px] text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-check="true" type="checkbox" />
                      </th>
                      <th class="min-w-[300px]">
                        <span class="kt-table-col">
                          <span class="kt-table-col-label">Nom du dossier</span>
                          <span class="kt-table-col-sort">
                          </span>
                        </span>
                      </th>
                      <th class="min-w-[180px]">
                        <span class="kt-table-col">
                          <span class="kt-table-col-label">Numéro du Prêt / Don</span>
                          <span class="kt-table-col-sort">
                          </span>
                        </span>
                      </th>
                      <th class="min-w-[180px]">
                        <span class="kt-table-col">
                          <span class="kt-table-col-label">Pays / Organe d'exécution</span>
                          <span class="kt-table-col-sort">
                          </span>
                        </span>
                      </th>
                      <th class="min-w-[180px]">
                        <span class="kt-table-col">
                          <span class="kt-table-col-label">Unité de compte (CFA)</span>
                          <span class="kt-table-col-sort">
                          </span>
                        </span>
                      </th>
                      <th class="min-w-[180px]">
                        <span class="kt-table-col">
                          <span class="kt-table-col-label">Statut</span>
                          <span class="kt-table-col-sort">
                          </span>
                        </span>
                      </th>
                      <th class="w-[120px] text-end">
                        <span class="kt-table-col-label">Actions</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="1" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            S
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Sélection cabinet
                              d'audit financier 2026</a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                              href="#">PKG-2026-002</a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21006370</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="2" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            A
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Assistance
                              technique à la maîtrise d'ouvrage</a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              PKG-2026-003
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21005974</td>
                      <td class="text-foreground font-normal">Togo / MTP</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="3" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            É
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Étude d'impact
                              environnemental (Lot 1)</a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                              href="#">PKG-2026-001</a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21005781</td>
                      <td class="text-foreground font-normal">Togo / MTP</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          Publié
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="4" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            S
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Supervision des travaux
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              PKG-2026-004
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007137</td>
                      <td class="text-foreground font-normal">Côte d'Ivoire / MINADER</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          Évalué
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="5" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            L
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Leslie Alexander
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              leslie.alexander@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21003374</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="6" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              John Smith
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              john.smith@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21006359</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="7" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            E
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Emily Johnson
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              emily.johnson@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21009910</td>
                      <td class="text-foreground font-normal">Togo / MTP</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="8" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            M
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Michael Brown
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              michael.brown@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21001882</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="size-1.5 rounded-full bg-green-500">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="9" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            W
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              William Davis
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              william.davis@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21009673</td>
                      <td class="text-foreground font-normal">Bénin / MEFP</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="10" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            O
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Olivia Martinez
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              olivia.martinez@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21004265</td>
                      <td class="text-foreground font-normal">Bénin / MEFP</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="11" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Jacob Jones
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              jacob.jones@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21005479</td>
                      <td class="text-foreground font-normal">Côte d'Ivoire / MINADER</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="12" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            D
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Daniel Wilson
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              daniel.wilson@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007818</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="13" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            S
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Sophia Lee
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              sophia.lee@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21009957</td>
                      <td class="text-foreground font-normal">Côte d'Ivoire / MINADER</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="14" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              James Miller
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              james.miller@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21001620</td>
                      <td class="text-foreground font-normal">Côte d'Ivoire / MINADER</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="size-1.5 rounded-full bg-green-500">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="15" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            L
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Linda Scott
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              linda.scott@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21008622</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="16" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            A
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Anthony Thomas
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              anthony.thomas@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21008834</td>
                      <td class="text-foreground font-normal">Côte d'Ivoire / MINADER</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="17" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            C
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Christopher Martinez
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              christopher.martinez@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21005961</td>
                      <td class="text-foreground font-normal">Bénin / MEFP</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="18" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            R
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Ronald Richards
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              ronald.richards@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007625</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="19" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Jennifer Thomas
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              jennifer.thomas@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21004085</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="20" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            É
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Étude de
                              faisabilité projet hydroélectrique</a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                              href="#">PKG-2026-006</a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21002852</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="21" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            N
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Natalie Watson
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              natalie.watson@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007931</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="22" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            M
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Marvin McKinney
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              marvin.mckenney@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21005714</td>
                      <td class="text-foreground font-normal">Bénin / MEFP</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="23" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            T
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Theresa Webb
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              theresa.webb@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007417</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="24" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            B
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Brian Ross
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              brian.ross@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21002443</td>
                      <td class="text-foreground font-normal">Bénin / MEFP</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="25" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            D
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Donald Coleman
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              donald.coleman@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21007826</td>
                      <td class="text-foreground font-normal">Togo / MTP</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="26" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Jason Reed
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              jason.reed@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21006076</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="27" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            P
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Paul Walker
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              paul.walker@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21008552</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="28" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            A
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Andrew Mitchell
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              andrew.mitchell@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21001825</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="29" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            K
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Kevin Evans
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              kevin.evans@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21008955</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="30" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            S
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Steven Harris
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              steven.harris@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21001550</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="31" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            T
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Thomas Clark
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              thomas.clark@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21006296</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">EUR</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="32" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Justin Adams
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              justin.adams@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21009801</td>
                      <td class="text-foreground font-normal">Sénégal / MSAS</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Retard</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="33" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            C
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Charles Carter
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              charles.carter@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21003627</td>
                      <td class="text-foreground font-normal">Mali / MEN</td>
                      <td class="text-foreground font-normal">USD</td>
                      <td>
                        <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          In Office
                        </span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="34" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            J
                          </div>
                          <div class="flex flex-col">

                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              Jessica Evans
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              jessica.evans@gmail.com
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">PRT-21009162</td>
                      <td class="text-foreground font-normal">Togo / MTP</td>
                      <td class="text-foreground font-normal">FCFA</td>
                      <td>
                        <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>Planifié</span>
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/detail" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors" href="/form" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors" href="#" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div
                class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
                <div class="flex items-center gap-2 order-2 md:order-1">
                  Show
                  <select class="kt-select w-16" data-kt-datatable-size="true" data-kt-select="" name="perpage">
                  </select>
                  per page
                </div>
                <div class="flex items-center gap-4 order-1 md:order-2">
                  <span data-kt-datatable-info="true">
                  </span>
                  <div class="kt-datatable-pagination" data-kt-datatable-pagination="true">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- End of Container -->
  </main>
  <!-- End of Content -->
@endsection