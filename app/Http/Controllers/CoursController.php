<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //Lister tous les cours
    public function index() {
        return response()->json(Cours::all());
    }

    //Detail d'un cours avec ses lecons
    public function show($id) {
        $cours = Cours::with('lecons')->findOrFail($id);
        return response()->json($cours);
    }

    //Creer un cours (admin)
    public function store(Request $request) {
        $request->validate([
            'nom' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $cours = Cours::create($request->all());

        return response()->json([
            'message' => 'Cours créé avec succès',
            'cours' => $cours,
        ], 201);

    }

    //Modifier un cours
    public function update(Request $request, $id) {

        $cours = Cours::findOrFail($id);
        $cours->update($request->all());

        return response()->json([
            'message' => 'Cours mis a jour',
            'cours'   => $cours,
        ]);
    }

    //Supprimer un cours
    public function destroy($id) {
        Cours::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Cours supprimé',
        ]);
    }
}
