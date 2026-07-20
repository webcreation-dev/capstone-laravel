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

    public function saveLine(Request $request)
    {
        $validated = $request->validate([
            'ppm_id' => 'required|exists:ppms,id',
            'line_id' => 'nullable|exists:ppm_lines,id',
            'system_type' => 'required|string',
            'package_type' => 'required|string',
            'package_description' => 'required|string',
            'lots' => 'nullable|array',
            'lots.*.id' => 'nullable|exists:ppm_lots,id',
            'lots.*.name' => 'required_with:lots|string',
            'lots.*.description' => 'nullable|string',
        ]);

        if (empty($validated['line_id'])) {
            $line = \App\Models\PpmLine::create([
                'ppm_id' => $validated['ppm_id'],
                'system_type' => $validated['system_type'],
                'package_type' => $validated['package_type'],
                'package_description' => $validated['package_description'],
            ]);
        } else {
            $line = \App\Models\PpmLine::findOrFail($validated['line_id']);
            $line->update([
                'system_type' => $validated['system_type'],
                'package_type' => $validated['package_type'],
                'package_description' => $validated['package_description'],
            ]);
        }

        // Gestion des lots
        $submittedLotIds = [];
        if (!empty($validated['lots'])) {
            foreach ($validated['lots'] as $lotData) {
                if (empty($lotData['id'])) {
                    $lot = $line->lots()->create([
                        'name' => $lotData['name'],
                        'description' => $lotData['description'] ?? null,
                    ]);
                    $submittedLotIds[] = $lot->id;
                } else {
                    $lot = \App\Models\PpmLot::findOrFail($lotData['id']);
                    $lot->update([
                        'name' => $lotData['name'],
                        'description' => $lotData['description'] ?? null,
                    ]);
                    $submittedLotIds[] = $lot->id;
                }
            }
        }

        // Supprimer les lots qui ne sont plus dans la liste
        $line->lots()->whereNotIn('id', $submittedLotIds)->delete();

        return response()->json(['success' => true, 'message' => 'Ligne et lots enregistrés avec succès.']);
    }

    public function show($id)
    {
        $ppm = \App\Models\Ppm::with(['lines.lots.dates'])->findOrFail($id);
        
        return view('ppm-detail', [
            'ppm' => (new PpmResource($ppm))->resolve()
        ]);
    }
}
