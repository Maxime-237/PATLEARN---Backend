<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    // Cours auxquels le user est inscrit
    public function index(Request $request) {
        $inscription = Inscription::where('user_id', $request->user()->id)
                                    ->with('cours')
                                    ->get();

        return response()->json($inscription);
    }

     // S'inscrire à un cours
    public function store(Request $request, $cours_id) {
        // Vérifier si déjà inscrit

        $existe = Inscription::where('user_id', $request->user()->id)
                            ->where('cours_id', $cours_id)
                            ->first();
        if($existe) {
            return response()->json([
                'message' => 'Vous êtes déjà inscrit à ce cours',
            ], 409);
        }

        $inscription = Inscription::create([
            'user_id' => $request->user()->id,
            'cours_id' => $cours_id,
        ]);

        return response()->json([
            'message' => 'Inscription réussie',
            'inscription' => $inscription,
        ], 201);


    }

    // Se désinscrire d'un cours
        public function destroy(Request $request, $cours_id) {
            Inscription::where('user_id', $request->user()->id)
                        ->where('cours_id', $cours_id)
                        ->delete();

        return response()->json([
            'message' => 'Désinscription réussie',
        ]);
        }
}
