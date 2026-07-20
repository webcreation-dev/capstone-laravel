<?php

namespace App\Http\Controllers;

use App\Repositories\PpmRepository;
use App\Http\Resources\PpmResource;
use Illuminate\Http\Request;

class PpmController extends Controller
{
    protected $ppmRepository;

    public function __construct(PpmRepository $ppmRepository)
    {
        $this->ppmRepository = $ppmRepository;
    }

    public function index()
    {
        $ppms = $this->ppmRepository->getAllWithRelations();
        
        // On passe les données formatées par la ressource à la vue
        return view('ppm-list', [
            'ppmsData' => PpmResource::collection($ppms)->resolve()
        ]);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'id' => 'nullable|exists:ppms,id',
            'dossier_name' => 'required|string',
            'loan_grant_number' => 'required|string',
            'country_executing_agency' => 'required|string',
            'currency_unit' => 'required|string',
        ]);

        if (empty($validated['id'])) {
            // Création
            $validated['reference'] = 'PPM-' . date('Y') . '-' . strtoupper(uniqid());
            \App\Models\Ppm::create($validated);
            $message = 'PPM créé avec succès.';
        } else {
            // Modification
            $ppm = \App\Models\Ppm::findOrFail($validated['id']);
            $ppm->update($validated);
            $message = 'PPM mis à jour avec succès.';
        }

        return response()->json(['success' => true, 'message' => $message]);
    }

    public function delete($id)
    {
        $ppm = \App\Models\Ppm::findOrFail($id);
        
        // La suppression en cascade supprimera automatiquement les lignes, lots et dates 
        // si la migration a été configurée avec cascadeOnDelete()
        $ppm->delete();

        return response()->json(['success' => true, 'message' => 'PPM supprimé avec succès.']);
    }

    public function show($id)
    {
        $ppm = \App\Models\Ppm::with(['lines.lots.dates'])->findOrFail($id);
        
        return view('ppm-detail', [
            'ppm' => (new PpmResource($ppm))->resolve()
        ]);
    }
}
