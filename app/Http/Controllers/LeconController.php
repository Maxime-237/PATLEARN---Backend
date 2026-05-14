<?php

namespace App\Http\Controllers;

use App\Models\Lecon;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class LeconController extends Controller
{
    //Lecons d'un cours
    public function index($cours_id) {
        $lecons = Lecon::where('cours_id', $cours_id)
            ->orderBy('ordre')
            ->get();

        return response()->json($lecons);
    }

    //Detail d'une lecon avec ses exercises
    public function show($id) {
        $lecon = Lecon::with('exercises')->findOrFail($id);
        return Response()->json($lecon);
    }

    //Creer une lecon (admin)
    public function store(Request $request, $cours_id) {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'ordre' => 'required|integer',
            'statut' => 'in:verrouille, debloque',
        ]);

        $lecon = Lecon::create([
            'cours_id' => $cours_id,
            'titre' => $request->titre,
            'description' => $request->description,
            'ordre'  => $request->ordre,
            'statut' => $request->statut ?? 'verrouille',
        ]);

        return response()->json([
            'message' => 'Lecon créée avec succès',
            'lecon' => $lecon,
        ], 201);
    }

    //Modifier une lecon
    public function update(Request $request, $id) {
        $lecon = Lecon::findOrFail($id);
        $lecon->update($request->all());

        return response()->json([
            'message' => 'Leçon mise à jour',
            'lecon'   => $lecon,
        ]);
    }

    //Supprimer une lecon (admin)
   public function destroy($id)
    {
        Lecon::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Leçon supprimée',
        ]);
    }
}
