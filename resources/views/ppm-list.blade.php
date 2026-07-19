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
        <h1 class="text-xl font-medium leading-none text-mono">Plan de Passation des Marchés (PPM)</h1>
        <div class="flex items-center flex-wrap gap-1.5 font-medium">
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
        </div>
       </div>
       <div class="flex items-center gap-2.5">
        <a class="kt-btn kt-btn-outline" href="#">
         Importer PPM
        </a>
        <a class="kt-btn kt-btn-primary" href="#">
         Nouvelle Ligne PPM
        </a>
       </div>
      </div>
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="grid gap-5 lg:gap-7.5">
       <div class="kt-card kt-card-grid min-w-full">
        <div class="kt-card-header flex-wrap gap-2">
         <h3 class="kt-card-title text-sm">
          Affichage de 4 missions sur 12
         </h3>
         <div class="flex flex-wrap gap-2 lg:gap-5">
          <div class="flex">
           <label class="kt-input">
            <i class="ki-filled ki-magnifier">
            </i>
            <input data-kt-datatable-search="#team_crew_table" placeholder="Rechercher une mission" type="text" value=""/>
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
            Filters
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
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-check="true" type="checkbox"/>
              </th>
              <th class="min-w-[300px]">
               <span class="kt-table-col">
                <span class="kt-table-col-label">Intitulé de la Mission</span>
                <span class="kt-table-col-sort">
                </span>
               </span>
              </th>
              <th class="min-w-[180px]">
               <span class="kt-table-col">
                <span class="kt-table-col-label">Méthode</span>
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
              <th class="min-w-[180px]">
               <span class="kt-table-col">
                <span class="kt-table-col-label">Date Prévue</span>
                <span class="kt-table-col-sort">
                </span>
               </span>
              </th>
              <th class="min-w-[180px]">
               <span class="kt-table-col">
                <span class="kt-table-col-label">
                 Budget Estimé
                </span>
                <span class="kt-table-col-sort">
                </span>
               </span>
              </th>
              <th class="w-[60px]">
              </th>
             </tr>
            </thead>
            <tbody>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="1"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-1.png') }}">
                 <div class="flex flex-col">
                  <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Sélection cabinet d'audit financier 2026</a>
                  <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">PKG-2026-002</a>
                 </div>
                </img>
               </div>
              </td>
              <td class="text-foreground font-normal">
               SBQC
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <i class="ki-filled ki-geolocation text-base text-muted-foreground"></i>
                Banikoara
               </div>
              </td>
              <td class="text-foreground font-normal">
               50.000.000 FCFA
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="2"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-2.png') }}">
                 <div class="flex flex-col">
                  <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Assistance technique à la maîtrise d'ouvrage</a>
                  <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                   PKG-2026-003
                  </a>
                 </div>
                </img>
               </div>
              </td>
              <td class="text-foreground font-normal">
               SCI
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <i class="ki-filled ki-geolocation text-base text-muted-foreground"></i>
                Djougou
               </div>
              </td>
              <td class="text-foreground font-normal">
               15.000.000 FCFA
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="3"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-3.png') }}">
                 <div class="flex flex-col">
                  <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Étude d'impact environnemental (Lot 1)</a>
                  <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">PKG-2026-001</a>
                 </div>
                </img>
               </div>
              </td>
              <td class="text-foreground font-normal">
               SMC
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                Publié
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <i class="ki-filled ki-geolocation text-base text-muted-foreground"></i>
                Cotonou
               </div>
              </td>
              <td class="text-foreground font-normal">
               25.000.000 FCFA
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="4"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-4.png') }}"/>
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
              <td class="text-foreground font-normal">
               SBQC
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                Évalué
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <i class="ki-filled ki-geolocation text-base text-muted-foreground"></i>
                Parakou
               </div>
              </td>
              <td class="text-foreground font-normal">
               30.000.000 FCFA
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="5"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-5.png') }}"/>
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
              <td class="text-foreground font-normal">
               Super Admin
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/india.svg') }}"/>
                India
               </div>
              </td>
              <td class="text-foreground font-normal">
               Month ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="6"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-6.png') }}"/>
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
              <td class="text-foreground font-normal">
               Designer
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/australia.svg') }}"/>
                Australia
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 14:23
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="7"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-7.png') }}"/>
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
              <td class="text-foreground font-normal">
               Developer
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/france.svg') }}"/>
                France
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 10:12
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="8"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-8.png') }}"/>
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
              <td class="text-foreground font-normal">SBQC</td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="size-1.5 rounded-full bg-green-500">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/germany.svg') }}"/>
                Germany
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 09:45
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="9"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-9.png') }}"/>
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
              <td class="text-foreground font-normal">
               Support
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/spain.svg') }}"/>
                Spain
               </div>
              </td>
              <td class="text-foreground font-normal">
               Last week
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="10"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-10.png') }}"/>
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
              <td class="text-foreground font-normal">SBQC</td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/italy.svg') }}"/>
                Italy
               </div>
              </td>
              <td class="text-foreground font-normal">
               Current session
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="11"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-11.png') }}"/>
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
              <td class="text-foreground font-normal">
               Analyst
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/ukraine.svg') }}"/>
                Ukraine
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 9:53 am
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="12"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-12.png') }}"/>
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
              <td class="text-foreground font-normal">
               CTO
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/japan.svg') }}"/>
                Japan
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 17:45
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="13"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-13.png') }}"/>
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
              <td class="text-foreground font-normal">
               HR
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/south-korea.svg') }}"/>
                South Korea
               </div>
              </td>
              <td class="text-foreground font-normal">
               Week ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="14"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-14.png') }}"/>
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
              <td class="text-foreground font-normal">
               DevOps
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="size-1.5 rounded-full bg-green-500">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/russia.svg') }}"/>
                Russia
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 11:30
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="15"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-15.png') }}"/>
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
              <td class="text-foreground font-normal">
               Designer
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/netherlands.svg') }}"/>
                Netherlands
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 13:22
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="16"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-16.png') }}"/>
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
              <td class="text-foreground font-normal">
               Engineer
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/sweden.svg') }}"/>
                Sweden
               </div>
              </td>
              <td class="text-foreground font-normal">
               Month ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="17"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-17.png') }}"/>
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
              <td class="text-foreground font-normal">
               Analyst
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/mexico.svg') }}"/>
                Mexico
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 10:50
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="18"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-18.png') }}"/>
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
              <td class="text-foreground font-normal">
               Manager
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/uruguay.svg') }}"/>
                Uruguay
               </div>
              </td>
              <td class="text-foreground font-normal">
               Current session
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="19"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-19.png') }}"/>
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
              <td class="text-foreground font-normal">
               HR
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/brazil.svg') }}"/>
                Brazil
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 14:20
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="20"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-20.png') }}"/>
                <div class="flex flex-col">
                 <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">Étude de faisabilité projet hydroélectrique</a>
                 <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">PKG-2026-006</a>
                </div>
               </div>
              </td>
              <td class="text-foreground font-normal">
               HR
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/turkey.svg') }}"/>
                Turkey
               </div>
              </td>
              <td class="text-foreground font-normal">
               Current session
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="21"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-21.png') }}"/>
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
              <td class="text-foreground font-normal">
               Editor
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/finland.svg') }}"/>
                Finland
               </div>
              </td>
              <td class="text-foreground font-normal">
               Week ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="22"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-22.png') }}"/>
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
              <td class="text-foreground font-normal">
               Viewer
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/latvia.svg') }}"/>
                Latvia
               </div>
              </td>
              <td class="text-foreground font-normal">
               Week ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="23"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-23.png') }}"/>
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
              <td class="text-foreground font-normal">
               Admin
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/brazil.svg') }}"/>
                Brazil
               </div>
              </td>
              <td class="text-foreground font-normal">
               Current session
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="24"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-24.png') }}"/>
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
              <td class="text-foreground font-normal">
               Designer
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/norway.svg') }}"/>
                Norway
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 08:30
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="25"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-25.png') }}"/>
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
              <td class="text-foreground font-normal">
               Manager
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/ireland.svg') }}"/>
                Ireland
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 12:00
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="26"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-26.png') }}"/>
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
              <td class="text-foreground font-normal">
               Engineer
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/belgium.svg') }}"/>
                Belgium
               </div>
              </td>
              <td class="text-foreground font-normal">
               Month ago
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="27"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-27.png') }}"/>
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
              <td class="text-foreground font-normal">
               Developer
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/denmark.svg') }}"/>
                Denmark
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 16:00
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="28"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-28.png') }}"/>
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
              <td class="text-foreground font-normal">SBQC</td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/portugal.svg') }}"/>
                Portugal
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 12:45
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="29"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-29.png') }}"/>
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
              <td class="text-foreground font-normal">
               Support
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/austria.svg') }}"/>
                Austria
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 14:00
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="30"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-30.png') }}"/>
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
              <td class="text-foreground font-normal">
               Admin
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/greece.svg') }}"/>
                Greece
               </div>
              </td>
              <td class="text-foreground font-normal">
               Current session
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="31"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-31.png') }}"/>
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
              <td class="text-foreground font-normal">
               Analyst
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/switzerland.svg') }}"/>
                Switzerland
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 11:00
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="32"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-32.png') }}"/>
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
              <td class="text-foreground font-normal">
               Viewer
              </td>
              <td>
               <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Retard</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/czech-republic.svg') }}"/>
                Czech Republic
               </div>
              </td>
              <td class="text-foreground font-normal">
               Yesterday, 15:30
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="33"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-33.png') }}"/>
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
              <td class="text-foreground font-normal">
               Engineer
              </td>
              <td>
               <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>
                In Office
               </span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/hungary.svg') }}"/>
                Hungary
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 10:30
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-center">
               <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox" value="34"/>
              </td>
              <td>
               <div class="flex items-center gap-2.5">
                <img alt="" class="rounded-full size-9 shrink-0" src="{{ asset('assets/media/avatars/300-34.png') }}"/>
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
              <td class="text-foreground font-normal">
               Designer
              </td>
              <td>
               <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                <span class="kt-badge-dot size-1.5">
                </span>Planifié</span>
              </td>
              <td>
               <div class="flex items-center text-foreground font-normal gap-1.5">
                <img alt="" class="rounded-full size-4 shrink-0" src="{{ asset('assets/media/flags/poland.svg') }}"/>
                Poland
               </div>
              </td>
              <td class="text-foreground font-normal">
               Today, 13:45
              </td>
              <td class="text-center">
               <div class="kt-menu flex-inline" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
            </tbody>
           </table>
          </div>
          <div class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
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
       <div class="kt-card">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          FAQ
         </h3>
        </div>
        <div class="kt-card-content py-3">
         <div data-kt-accordion="true" data-kt-accordion-expand-all="true">
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_1_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_1_content">
            <span class="text-base text-mono">
             How is pricing determined for each plan?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_1_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision. Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision. Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_2_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_2_content">
            <span class="text-base text-mono">
             What payment methods are accepted for subscriptions?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_2_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_3_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_3_content">
            <span class="text-base text-mono">
             Are there any hidden fees in the pricing?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_3_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_4_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_4_content">
            <span class="text-base text-mono">
             Is there a discount for annual subscriptions?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_4_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_5_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_5_content">
            <span class="text-base text-mono">
             Do you offer refunds on subscription cancellations?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_5_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
          <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
           <button aria-controls="faq_6_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_6_content">
            <span class="text-base text-mono">
             Can I add extra features to my current plan?
            </span>
            <span class="kt-accordion-active:hidden inline-flex">
             <i class="ki-filled ki-plus text-muted-foreground text-sm">
             </i>
            </span>
            <span class="kt-accordion-active:inline-flex hidden">
             <i class="ki-filled ki-minus text-muted-foreground text-sm">
             </i>
            </span>
           </button>
           <div class="kt-accordion-content hidden" id="faq_6_content">
            <div class="text-secondary-foreground text-base pb-4">
             Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. Understanding the factors influencing each plan's pricing helps you make an informed decision
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
        <div class="kt-card">
         <div class="kt-card-content px-10 py-7.5 lg:pr-12.5">
          <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
           <div class="flex flex-col items-start gap-3">
            <h2 class="text-xl font-medium text-mono">
             Questions ?
            </h2>
            <p class="text-sm text-foreground leading-5.5 mb-2.5">
             Visit our Help Center for detailed assistance on billing, payments, and subscriptions.
            </p>
           </div>
           <img alt="image" class="dark:hidden max-h-[150px]" src="{{ asset('assets/media/illustrations/29.svg') }}"/>
           <img alt="image" class="light:hidden max-h-[150px]" src="{{ asset('assets/media/illustrations/29-dark.svg') }}"/>
          </div>
         </div>
         <div class="kt-card-footer justify-center">
          <a class="kt-link kt-link-underlined kt-link-dashed" href="">
           Go to Help Center
          </a>
         </div>
        </div>
        <div class="kt-card">
         <div class="kt-card-content px-10 py-7.5 lg:pr-12.5">
          <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
           <div class="flex flex-col items-start gap-3">
            <h2 class="text-xl font-medium text-mono">
             Contact Support
            </h2>
            <p class="text-sm text-foreground leading-5.5 mb-2.5">
             Need assistance? Contact our support team for prompt, personalized help your queries & concerns.
            </p>
           </div>
           <img alt="image" class="dark:hidden max-h-[150px]" src="{{ asset('assets/media/illustrations/31.svg') }}"/>
           <img alt="image" class="light:hidden max-h-[150px]" src="{{ asset('assets/media/illustrations/31-dark.svg') }}"/>
          </div>
         </div>
         <div class="kt-card-footer justify-center">
          <a class="kt-link kt-link-underlined kt-link-dashed" href="https://devs.keenthemes.com/unresolved">
           Contact Support
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- End of Container -->
    </main>
    <!-- End of Content -->
@endsection
