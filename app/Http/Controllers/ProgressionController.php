<?php

namespace App\Http\Controllers;

use App\Models\Lecon;
use App\Models\Progression;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProgressionController extends Controller
{
    // Progression du user connecté
    public function index(Request $request) {
        $progressions = Progression::where('user_id', $request->user()->id)
                                ->with('lecon')
                                ->get();

        return response()->json($progressions);
    }

    // Mettre à jour ou créer une progression
    public function store(Request $request, $lecon_id) {
        $request->validate([
            'score'  => 'required|integer|min:0',
            'statut' => 'required|in:en_cours,termine',
        ]);

        $progression = Progression::updateOrCreate(
            [
                'user_id' => $request->user()->id,
                'lecon_id' => $lecon_id,
            ],
            [
                'score' => $request->score,
                'statut' => $request->statut,
            ]
        );

        // Débloquer la leçon suivante si terminée
       if($request->satut === 'termine') {

            $lecon = Lecon::findOrFail($lecon_id);
            $leconSuivante = Lecon::where('cours_id', $lecon->cours_id)
                                    ->where('ordre', $lecon->ordre + 1)
                                    ->first();

            if($leconSuivante) {
                $leconSuivante->update(['statut' => 'debloque']);
            }
       }

        return response()->json([
            'messge' => 'Progression mise à jour',
            'progression' => $progression,
        ]);
    }
}


