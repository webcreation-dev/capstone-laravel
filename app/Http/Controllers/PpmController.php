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

    public function saveLot(Request $request)
    {
        $validated = $request->validate([
            'lot_id' => 'required|exists:ppm_lots,id',
            'tender_number' => 'nullable|string',
            'amount_type' => 'nullable|in:MF,DQE',
            'estimated_cost' => 'nullable|numeric',
            'procurement_method' => 'nullable|in:AOO,DRP,DC,ED',
            'qualification_type' => 'nullable|in:Pré-Qualification,Post-Qualification',
            'control_audit' => 'nullable|in:Préalable,à Postériori',
        ]);

        $lot = \App\Models\PpmLot::findOrFail($validated['lot_id']);
        $lot->update([
            'tender_number' => $validated['tender_number'],
            'amount_type' => $validated['amount_type'],
            'estimated_cost' => $validated['estimated_cost'],
            'procurement_method' => $validated['procurement_method'],
            'qualification_type' => $validated['qualification_type'],
            'control_audit' => $validated['control_audit'],
        ]);

        return response()->json(['success' => true, 'message' => 'Caractéristiques du lot enregistrées avec succès.']);
    }

    public function show($id)
    {
        $ppm = \App\Models\Ppm::with(['lines.lots.dates'])->findOrFail($id);
        
        return view('ppm-detail', [
            'ppm' => (new PpmResource($ppm))->resolve()
        ]);
    }

    public function getDateDetails($dateId)
    {
        $date = \App\Models\PpmLotDate::with(['comments' => function($q) {
            $q->orderBy('created_at', 'desc');
        }, 'documents'])->findOrFail($dateId);
        
        return response()->json([
            'success' => true,
            'comments' => $date->comments,
            'documents' => $date->documents,
        ]);
    }

    public function saveDate(Request $request)
    {
        $validated = $request->validate([
            'id' => 'nullable|exists:ppm_lot_dates,id',
            'ppm_lot_id' => 'required_without:id|exists:ppm_lots,id',
            'milestone_type' => 'required_without:id|string',
            'date_category' => 'required_without:id|string',
            'date_value' => 'required|date',
        ]);

        if (!empty($validated['id'])) {
            $date = \App\Models\PpmLotDate::findOrFail($validated['id']);
            $date->update(['date_value' => $validated['date_value']]);
        } else {
            $date = \App\Models\PpmLotDate::create([
                'ppm_lot_id' => $validated['ppm_lot_id'],
                'milestone_type' => $validated['milestone_type'],
                'date_category' => $validated['date_category'],
                'date_value' => $validated['date_value'],
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Date enregistrée avec succès.',
            'date_value' => $date->date_value,
            'date' => $date
        ]);
    }

    public function addComment(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $date = \App\Models\PpmLotDate::findOrFail($id);
        $comment = $date->comments()->create([
            'content' => $validated['content'],
            // 'user_id' => auth()->id() ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Commentaire ajouté avec succès.',
            'comment' => $comment
        ]);
    }

    public function uploadDocument(Request $request, $id)
    {
        $request->validate([
            'files.*' => 'required|file|max:10240' // 10MB
        ]);

        $date = \App\Models\PpmLotDate::findOrFail($id);
        
        $uploadedDocs = [];
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('ppm_documents', 'public');
                $doc = $date->documents()->create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'type' => $file->getClientOriginalExtension(),
                    'size' => $file->getSize(),
                    // 'user_id' => auth()->id() ?? null,
                ]);
                $uploadedDocs[] = $doc;
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Fichier(s) ajouté(s) avec succès.',
            'documents' => $uploadedDocs
        ]);
    }

    public function updateComment(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $comment = \App\Models\PpmLotDateComment::findOrFail($id);
        $comment->update(['content' => $validated['content']]);

        return response()->json([
            'success' => true,
            'message' => 'Commentaire modifié avec succès.',
            'comment' => $comment
        ]);
    }

    public function deleteComment($id)
    {
        $comment = \App\Models\PpmLotDateComment::findOrFail($id);
        $comment->delete();

        return response()->json([
            'success' => true,
            'message' => 'Commentaire supprimé.'
        ]);
    }

    public function deleteDocument($id)
    {
        $document = \App\Models\PpmLotDateDocument::findOrFail($id);
        if (\Storage::disk('public')->exists($document->path)) {
            \Storage::disk('public')->delete($document->path);
        }
        $document->delete();

        return response()->json([
            'success' => true,
            'message' => 'Document supprimé.'
        ]);
    }
}
