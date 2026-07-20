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
                    @forelse($ppmsData as $ppm)
                    <tr>
                      <td class="text-center">
                        <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true" type="checkbox"
                          value="{{ $ppm['id'] }}" />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <div
                            class="flex items-center justify-center rounded-full size-9 shrink-0 bg-gray-100 text-gray-600 font-semibold text-sm border border-gray-200">
                            {{ substr($ppm['dossier_name'], 0, 1) }}
                          </div>
                          <div class="flex flex-col">
                            <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                              {{ $ppm['dossier_name'] }}
                            </a>
                            <a class="text-sm text-secondary-foreground font-normal hover:text-primary" href="#">
                              {{ $ppm['reference'] }}
                            </a>
                          </div>
                        </div>
                      </td>
                      <td class="text-foreground font-normal">{{ $ppm['loan_grant_number'] }}</td>
                      <td class="text-foreground font-normal">{{ $ppm['country_executing_agency'] }}</td>
                      <td class="text-foreground font-normal">{{ $ppm['currency_unit'] }}</td>
                      <td>
                        @if($ppm['status'] === 'En cours')
                          <span class="kt-badge kt-badge-primary kt-badge-outline rounded-[30px]">
                            <span class="kt-badge-dot size-1.5"></span>{{ $ppm['status'] }}
                          </span>
                        @elseif($ppm['status'] === 'Retard')
                          <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                            <span class="kt-badge-dot size-1.5"></span>{{ $ppm['status'] }}
                          </span>
                        @else
                          <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                            <span class="size-1.5 rounded-full bg-green-500"></span>{{ $ppm['status'] }}
                          </span>
                        @endif
                      </td>
                      <td class="text-end">
                        <div class="flex items-center justify-end gap-3 text-muted-foreground">
                          <a class="hover:text-primary transition-colors" href="/ppms/{{ $ppm['id'] }}" title="View">
                            <i class="ki-filled ki-search-list text-lg"></i>
                          </a>
                          <a class="hover:text-primary transition-colors btn-edit-ppm" href="javascript:void(0)" data-kt-drawer-toggle="#create_ppm_drawer" data-ppm="{{ json_encode($ppm) }}" title="Modifier">
                            <i class="ki-filled ki-pencil text-lg"></i>
                          </a>
                          <a class="hover:text-danger transition-colors btn-delete-ppm" href="javascript:void(0)" data-id="{{ $ppm['id'] }}" title="Supprimer">
                            <i class="ki-filled ki-trash text-lg"></i>
                          </a>
                          <a class="hover:text-success transition-colors" href="#" title="Publier">
                            <i class="ki-filled ki-file-up text-lg"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" class="text-center py-5 text-muted-foreground">
                        Aucun projet PPM trouvé.
                      </td>
                    </tr>
                    @endforelse
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Délégation d'événement car le tableau (DataTables) peut recréer les éléments du DOM
        document.body.addEventListener('click', function(e) {
            
            // Clic sur le bouton Modifier
            const editBtn = e.target.closest('.btn-edit-ppm');
            if (editBtn) {
                try {
                    const ppmData = JSON.parse(editBtn.getAttribute('data-ppm'));
                    
                    // On met à jour le titre
                    const titleEl = document.getElementById('create_ppm_title');
                    if(titleEl) titleEl.innerText = 'Modifier le Projet PPM';
                    
                    // On pré-remplit les champs
                    if(document.getElementById('ppm_id')) document.getElementById('ppm_id').value = ppmData.id;
                    if(document.getElementById('ppm_country_executing_agency')) document.getElementById('ppm_country_executing_agency').value = ppmData.country_executing_agency || '';
                    if(document.getElementById('ppm_dossier_name')) document.getElementById('ppm_dossier_name').value = ppmData.dossier_name || '';
                    if(document.getElementById('ppm_loan_grant_number')) document.getElementById('ppm_loan_grant_number').value = ppmData.loan_grant_number || '';
                    if(document.getElementById('ppm_currency_unit')) document.getElementById('ppm_currency_unit').value = ppmData.currency_unit || '';
                } catch (err) {
                    console.error('Erreur lors du parsing JSON', err);
                }
                return;
            }

            // Clic sur le bouton "Nouveau Projet" principal
            const newBtn = e.target.closest('[data-kt-drawer-toggle="#create_ppm_drawer"]:not(.btn-edit-ppm)');
            if (newBtn) {
                // On remet le titre
                const titleEl = document.getElementById('create_ppm_title');
                if(titleEl) titleEl.innerText = 'Nouveau Projet PPM';
                
                // On vide les champs
                const formEl = document.getElementById('form_ppm');
                if(formEl) formEl.reset();
                if(document.getElementById('ppm_id')) document.getElementById('ppm_id').value = '';
            }

            // Clic sur le bouton "Supprimer"
            const deleteBtn = e.target.closest('.btn-delete-ppm');
            if (deleteBtn) {
                const id = deleteBtn.getAttribute('data-id');
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Cette action est irréversible et supprimera également les lots associés !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer !',
                    cancelButtonText: 'Annuler',
                    customClass: {
                        confirmButton: 'kt-btn kt-btn-danger',
                        cancelButton: 'kt-btn kt-btn-light'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/ppms/delete/' + id, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(res => {
                            if (res.success) {
                                Swal.fire({
                                    title: 'Supprimé !',
                                    text: 'Le projet a été supprimé avec succès.',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                        confirmButton: 'kt-btn kt-btn-primary'
                                    }
                                }).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire('Erreur', res.message || 'La suppression a échoué.', 'error');
                            }
                        })
                        .catch(err => {
                            console.error(err);
                            Swal.fire('Erreur', 'Une erreur système est survenue.', 'error');
                        });
                    }
                });
            }
        });
        // Sauvegarde du formulaire
        const saveBtn = document.getElementById('btn_save_ppm');
        if(saveBtn) {
            saveBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                const data = {
                    id: document.getElementById('ppm_id').value,
                    country_executing_agency: document.getElementById('ppm_country_executing_agency').value,
                    dossier_name: document.getElementById('ppm_dossier_name').value,
                    loan_grant_number: document.getElementById('ppm_loan_grant_number').value,
                    currency_unit: document.getElementById('ppm_currency_unit').value,
                    _token: '{{ csrf_token() }}'
                };
                
                // Optionnel : bouton en état de chargement
                const originalText = this.innerText;
                this.innerText = 'Patientez...';
                this.disabled = true;

                fetch('/ppms/save', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    if(result.success) {
                        Swal.fire({
                            title: 'Succès !',
                            text: result.message || 'Opération réussie.',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'kt-btn kt-btn-primary'
                            }
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'Erreur',
                            text: result.message || 'Validation échouée',
                            icon: 'error',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'kt-btn kt-btn-danger'
                            }
                        });
                        this.innerText = originalText;
                        this.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    Swal.fire({
                        title: 'Erreur système',
                        text: 'Une erreur est survenue lors de la requête.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'kt-btn kt-btn-danger'
                        }
                    });
                    this.innerText = originalText;
                    this.disabled = false;
                });
            });
        }
    });
  </script>
@endsection