@extends('layouts.app')

@section('content')
<!-- Content -->
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-mono">
         Nouvelle Ligne PPM
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-secondary-foreground">
         Saisie détaillée pour la planification d'un marché
        </div>
       </div>
       <div class="flex items-center gap-2.5">
        <a class="kt-btn kt-btn-outline" href="#">
         Annuler
        </a>
        <a class="kt-btn kt-btn-primary" href="#">
         Enregistrer
        </a>
       </div>
      </div>
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex grow gap-5 lg:gap-7.5">
       <div class="hidden lg:block w-[230px] shrink-0">
        <div class="w-[230px]" data-kt-sticky="true" data-kt-sticky-animation="true" data-kt-sticky-class="fixed z-4 left-auto top-[calc(var(--header-height)+1rem)]" data-kt-sticky-name="scrollspy" data-kt-sticky-offset="200" data-kt-sticky-target="body">
         <div class="flex flex-col grow relative before:absolute before:left-[11px] before:top-0 before:bottom-0 before:border-l before:border-border" data-kt-scrollspy="true" data-kt-scrollspy-offset="110px" data-kt-scrollspy-target="body">
          <a class="flex items-center rounded-lg pl-2.5 pr-2.5 py-2.5 gap-1.5 active border border-transparent text-sm text-foreground hover:text-primary hover:font-medium kt-scrollspy-active:bg-secondary-active kt-scrollspy-active:text-primary kt-scrollspy-active:font-medium hover:rounded-lg" data-kt-scrollspy-anchor="true" href="#basic_settings">
           <span class="flex w-1.5 relative before:absolute before:top-0 before:size-1.5 before:rounded-full before:-translate-x-2/4 before:-translate-y-2/4 kt-scrollspy-active:before:bg-primary">
           </span>Information Package
          </a>
          <a class="flex items-center rounded-lg pl-2.5 pr-2.5 py-2.5 gap-1.5 border border-transparent text-sm text-foreground hover:text-primary hover:font-medium kt-scrollspy-active:bg-secondary-active kt-scrollspy-active:text-primary kt-scrollspy-active:font-medium hover:rounded-lg" data-kt-scrollspy-anchor="true" href="#lots_associes">
           <span class="flex w-1.5 relative before:absolute before:top-0 before:size-1.5 before:rounded-full before:-translate-x-2/4 before:-translate-y-2/4 kt-scrollspy-active:before:bg-primary">
           </span>Lots associés
          </a>
         </div>
        </div>
       </div>
       <div class="flex flex-col items-stretch grow gap-5 lg:gap-7.5">
         <!-- Card 1: Information Package -->
         <div class="kt-card pb-2.5">
          <div class="kt-card-header" id="basic_settings">
           <h3 class="kt-card-title">Information Package</h3>
          </div>
          <div class="kt-card-content grid gap-5">
           <div class="w-full">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="kt-form-label flex items-center gap-1 max-w-56">
              Type de Package
             </label>
             <select class="kt-select" data-kt-select="true">
              <option value="" disabled selected>Sélectionner le type</option>
              <option value="travaux">Travaux</option>
              <option value="biens">Biens</option>
              <option value="consultants">Consultants</option>
             </select>
            </div>
           </div>
           <div class="w-full">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="kt-form-label flex items-center gap-1 max-w-56">Description du package</label>
             <textarea class="kt-input min-h-[100px] w-full" placeholder="Détails de la mission ou du package..."></textarea>
            </div>
           </div>
           
           <div class="flex justify-end pt-2.5">
            <button class="kt-btn kt-btn-primary">Enregistrer</button>
           </div>
          </div>
         </div>

         <!-- Card 2: Lots associés -->
         <div class="kt-card pb-2.5">
          <div class="kt-card-header" id="lots_associes">
           <h3 class="kt-card-title">Lots associés</h3>
          </div>
          <div class="kt-card-content grid gap-5 pt-7.5">
           <div class="w-full">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="kt-form-label flex items-center gap-1 max-w-56">
              Nom du lot
             </label>
             <input class="kt-input" type="text" placeholder="Ex: Lot 1 - Étude d'impact..." />
            </div>
           </div>
           <div class="w-full">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="kt-form-label flex items-center gap-1 max-w-56">
              Description du Lot
             </label>
             <textarea class="kt-input min-h-[100px] w-full" placeholder="Détails du lot..."></textarea>
            </div>
           </div>
           
           <div class="flex items-center justify-between pt-2.5">
            <button class="kt-btn kt-btn-outline kt-btn-primary">
             <i class="ki-filled ki-plus"></i>
             Ajouter un lot
            </button>
            <button class="kt-btn kt-btn-primary">Enregistrer</button>
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
