<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use Illuminate\Http\Request;

class MotController extends Controller
{
    //Mots de prononciation d'un cours
    public function index($cours_id)
    {
        $mots = Mot::where('cours_id', $cours_id)->orderBy('ordre')->get();

        return response()->json($mots);
    }

    //Creer un mot (admin)
    public function store(Request $request, $cours_id)
    {
        $request->validate([
            'mot' => 'required|string',
            'traduction' => 'required|string',
            'ordre' => 'required|integer',
            'audio_url' => 'nullable|string',
        ]);

        $mot = Mot::create([
            'cours_id' => $cours_id,
            'mot' => $request->mot,
            'traduction' => $request->traduction,
            'ordre' => $request->ordre,
            'audio_url' => $request->audio_url,
        ]);

        return response()->json([
            'message' => 'Mot créé avec succès',
            'mot' => $mot,
        ], 201);
    }

    //Modifier un mot (admin)
    public function update(Request $request, $id)
    {
        $mot = Mot::findOrFail($id);
        $mot->update($request->only(['mot', 'traduction', 'ordre', 'audio_url']));

        return response()->json([
            'message' => 'Mot mis à jour',
            'mot' => $mot,
        ]);
    }

    //Supprimer un mot (admin)
    public function destroy($id)
    {
        Mot::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Mot supprimé',
        ]);
    }
}
