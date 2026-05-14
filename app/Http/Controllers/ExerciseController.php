<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //Exercices d'une lecon
    public function index($lecon_id) {
        $exercices = Exercise::where(lecon_id, $lecon_id)
                            ->orderBy('ordre')
                            ->with('questions')
                            ->get();

        return response()->json($exercices);
    }

    // Détail d'un exercice avec ses questions
    public function show($id) {
        $exercice = Exercise::with('questions')->findOrFail($id);

        return response()->json($exercice);
    }

    // Créer un exercice (admin)
    public function store(Request $request, $lecon_id) {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'ordre' => 'required|integer',
        ]);

        $exercice = Exercise::create([
            'lecon_id' => $lecon_id,
            'titre'   => $request->titre,
            'description' => $request->description,
            'ordre' => $request->ordre,
        ]);

        return response()->json([
            'message' => 'Exercice  créé avec succès',
            'exercise' => $exercice
        ]);
    }

    // Modifier un exercice (admin)
    public function update(Request $request, $id) {
        $exercise = Exercise::findOrFail($id);
        $exercise->update($request->all());

        return response()->json([
            'message' => 'Exercice mis à jour',
            'exercise'   => $exercise,
        ]);
    }

    //Supprimer un exercise (admin)
    public function destroy($id) {
        Exercise::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Exercice supprimé',
        ]);
    }
}
