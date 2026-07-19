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
           </span>Informations Générales
          </a>
          <a class="flex items-center rounded-lg pl-2.5 pr-2.5 py-2.5 gap-1.5 border border-transparent text-sm text-foreground hover:text-primary hover:font-medium kt-scrollspy-active:bg-secondary-active kt-scrollspy-active:text-primary kt-scrollspy-active:font-medium hover:rounded-lg" data-kt-scrollspy-anchor="true" href="#auth_email">
           <span class="flex w-1.5 relative before:absolute before:top-0 before:size-1.5 before:rounded-full before:-translate-x-2/4 before:-translate-y-2/4 kt-scrollspy-active:before:bg-primary">
           </span>Budget & Financement
          </a>
          <a class="flex items-center rounded-lg pl-2.5 pr-2.5 py-2.5 gap-1.5 border border-transparent text-sm text-foreground hover:text-primary hover:font-medium kt-scrollspy-active:bg-secondary-active kt-scrollspy-active:text-primary kt-scrollspy-active:font-medium hover:rounded-lg" data-kt-scrollspy-anchor="true" href="#auth_social_sign_in">
           <span class="flex w-1.5 relative before:absolute before:top-0 before:size-1.5 before:rounded-full before:-translate-x-2/4 before:-translate-y-2/4 kt-scrollspy-active:before:bg-primary">
           </span>Calendrier Prévisionnel
          </a>
         </div>
        </div>
       </div>
       <div class="flex flex-col items-stretch grow gap-5 lg:gap-7.5">
        <div class="kt-card pb-2.5">
         <div class="kt-card-header" id="basic_settings">
          <h3 class="kt-card-title">Informations Générales</h3>
         </div>
         <div class="kt-card-content grid gap-5">
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Statut initial
            </label>
            <select class="kt-select" data-kt-select="true">
             <option>Nouveau</option>
             <option>En cours</option>
             <option>Reporté</option>
             <option>Annulé</option>
            </select>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Intitulé du projet
            </label>
            <input class="kt-input" type="text" value="Sélection cabinet d'audit financier 2026"/>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">Description détaillée</label>
            <textarea class="kt-input min-h-[100px] w-full" placeholder="Détails du projet..."></textarea>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Méthode de sélection
            </label>
            <select class="kt-select" data-kt-select="true">
             <option>SBQC</option>
             <option>SCI</option>
             <option>SMC</option>
            </select>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Type de marché
            </label>
            <select class="kt-select" data-kt-select="true">
             <option>Services Intellectuels</option>
             <option>Travaux</option>
             <option>Fournitures</option>
            </select>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Date prévue de début
            </label>
            <div class="grow">
             <div class="kt-input">
              <i class="ki-filled ki-calendar">
              </i>
              <input class="grow" data-kt-date-picker="true" data-kt-date-picker-format="dd MMM yyyy" data-kt-date-picker-input-mode="true" data-kt-date-picker-position-to-input="left" id="validity-picker" placeholder="Sélectionner une date" readonly="" type="text"/>
             </div>
            </div>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Documents
            </label>
            <div class="grow">
             <form action="#" class="file-upload" data-kt-dropzone="true" method="POST">
              <div class="dropzone dropzone-clickable" data-kt-dropzone-accepted-files=".jpeg,.jpg,.png,.gif,.webp" data-kt-dropzone-max-filesize="2" data-kt-dropzone-url="upload/">
               <div class="dropzone-message">
                <div class="dropzone-message-icon">
                 <i class="ki-filled ki-cloud-add">
                 </i>
                </div>
                <div class="dropzone-message-text">
                 <span class="dropzone-message-title">
                  Choose a file or drag & drop here.
                 </span>
                 <span class="dropzone-message-desc">
                  JPEG, PNG, GIF, WebP, up to 2 MB.
                 </span>
                </div>
                <button class="kt-btn kt-btn-sm kt-btn-primary dropzone-browse-btn" type="button">
                 Browse File
                </button>
               </div>
              </div>
              <div class="file-upload-list hidden">
               <div class="dropzone-previews">
               </div>
              </div>
             </form>
            </div>
           </div>
          </div>

          <div class="flex justify-end pt-2.5">
           <button class="kt-btn kt-btn-primary">Enregistrer la mission</button>
          </div>
         </div>
        </div>
        <div class="kt-card pb-2.5">
         <div class="kt-card-header" id="auth_email">
          <h3 class="kt-card-title">
           Budget & Financement
          </h3>
         </div>
         <div class="kt-card-content grid gap-5 pt-7.5">
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Montant estimé (FCFA)
            </label>
            <input class="kt-input" type="number" placeholder="Ex: 50000000" />
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Source de financement
            </label>
            <select class="kt-select" data-kt-select="true">
             <option>Budget National</option>
             <option>Banque Mondiale</option>
             <option>Union Européenne</option>
             <option>BAD</option>
            </select>
           </div>
          </div>
          <div class="flex justify-end">
           <button class="kt-btn kt-btn-primary">Enregistrer la mission</button>
          </div>
         </div>
        </div>
        <div class="kt-card pb-2.5">
         <div class="kt-card-header" id="auth_social_sign_in">
          <h3 class="kt-card-title">
           Calendrier Prévisionnel
          </h3>
         </div>
         <div class="kt-card-content grid gap-5 pt-7.5">
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Date prévue de publication de l'Avis
            </label>
            <div class="grow">
             <div class="kt-input">
              <i class="ki-filled ki-calendar"></i>
              <input class="grow" data-kt-date-picker="true" data-kt-date-picker-format="dd MMM yyyy" readonly="" type="text"/>
             </div>
            </div>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Date prévue d'attribution
            </label>
            <div class="grow">
             <div class="kt-input">
              <i class="ki-filled ki-calendar"></i>
              <input class="grow" data-kt-date-picker="true" data-kt-date-picker-format="dd MMM yyyy" readonly="" type="text"/>
             </div>
            </div>
           </div>
          </div>
          <div class="w-full">
           <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label flex items-center gap-1 max-w-56">
             Date prévue de signature du contrat
            </label>
            <div class="grow">
             <div class="kt-input">
              <i class="ki-filled ki-calendar"></i>
              <input class="grow" data-kt-date-picker="true" data-kt-date-picker-format="dd MMM yyyy" readonly="" type="text"/>
             </div>
            </div>
           </div>
          </div>
          <div class="flex justify-end">
           <button class="kt-btn kt-btn-primary">Enregistrer la mission</button>
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
