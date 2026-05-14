<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;


class ReponseController extends Controller
{
    public function store(Request $request, $question_id) {
        $request->validate([
            'user_answer' => 'required|string',
        ]);

        $question = Question::findOrFail($question_id);

        //Vérifier si la réponse est correcte
        $statut = strtolower(trim($request->user_answer)) === strtolower(trim($question->reponse_correcte)) ? 'correct' : 'incorrect';

        $reponse = Reponse::create([
            'user_id' => $request->user()->id,
            'question_id' => $question_id,
            'user_answer' => $request->user_answer,
            'statut' => $statut,
        ]);

        return response()->json([
            'message' => 'Réponse enregistrée',
            'statut' => $statut,
            'reponse_correcte' => $question->reponse_correcte,
            'reponse' => $reponse,
        ]);
    }
}
