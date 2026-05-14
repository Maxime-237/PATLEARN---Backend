<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //Question d'un exercice
    public function index($exercise_id)
    {
        $questions = Question::where('exercise_id', $exercise_id)->get();

        return response()->json($questions);
    }

    // Créer une question (admin)
    public function store(Request $request, $exercise_id)
    {
        $request->validate([
            'question' => 'required|string',
            'type' => 'required|in:qcm,vrai_faux,texte_libre',
            'reponse_correcte' => 'required|string',
            'options' => 'nullable|array',
        ]);

        $question = Question::create([
            'exercise_id'      => $exercise_id,
            'question'         => $request->question,
            'type'             => $request->type,
            'reponse_correcte' => $request->reponse_correcte,
            'options'          => $request->options,
        ]);

        return response()->json([
            'message' => 'Question créée avec succès',
            'question' => $question,
        ]);

    }

    // Modifier une question (admin)
    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return response()->json([
            'message'  => 'Question mise à jour',
            'question' => $question,
        ]);
    }

    // Supprimer une question (admin)
    public function destroy($id)
    {
        Question::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Question supprimée',
        ]);
    }
}
