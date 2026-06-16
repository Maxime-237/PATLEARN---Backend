<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [];

        // 15 leçons × 7 exercices = 105 exercices
        for ($lecon_id = 1; $lecon_id <= 15; $lecon_id++) {
            $titres = [
                'QCM - Niveau 1',
                'Vrai ou Faux - Niveau 1',
                'Traduction - Niveau 1',
                'QCM - Niveau 2',
                'Vrai ou Faux - Niveau 2',
                'Traduction - Niveau 2',
                'Révision Générale',
            ];

            foreach ($titres as $ordre => $titre) {
                $exercises[] = [
                    'lecon_id'    => $lecon_id,
                    'titre'       => $titre,
                    'description' => $titre . ' - Leçon ' . $lecon_id,
                    'ordre'       => $ordre + 1,
                ];
            }
        }

        foreach ($exercises as $e) {
            Exercise::create($e);
        }
    }
}
