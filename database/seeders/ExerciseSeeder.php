<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Lecon;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $titres = [
            'QCM - Niveau 1',
            'Vrai ou Faux - Niveau 1',
            'Traduction - Niveau 1',
            'QCM - Niveau 2',
            'Vrai ou Faux - Niveau 2',
            'Traduction - Niveau 2',
            'Révision Générale',
        ];

        $lecons = Lecon::orderBy('cours_id')->orderBy('ordre')->get();

        foreach ($lecons as $lecon) {
            foreach ($titres as $index => $titre) {
                $ordre = $index + 1;

                Exercise::updateOrCreate(
                    [
                        'lecon_id' => $lecon->id,
                        'ordre' => $ordre,
                    ],
                    [
                        'titre' => $titre,
                        'description' => $titre . ' - Leçon ' . $lecon->id,
                    ]
                );
            }
        }
    }
}
