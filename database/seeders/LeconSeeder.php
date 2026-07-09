<?php

namespace Database\Seeders;

use App\Models\Cours;
use App\Models\Lecon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $duala = Cours::where('nom', 'Duala')->first();
        $ewondo = Cours::where('nom', 'Ewondo')->first();
        $medumba = Cours::where('nom', 'Médumba')->first();

        $lecons = [

             // Leçons Duala (cours_id = 1)
            [
                'cours_id' => $duala->id,
                'titre'       => 'Salutations et Courtoisie',
                'description' => 'Apprenez les bases de l\'interaction sociale en Duala',
                'ordre'       => 1,
                'statut'      => 'debloque',
            ],
            [
                'cours_id' => $duala->id,
                'titre'       => 'La Famille et les Personnes',
                'description' => 'Apprenez les liens socaux fondamentaux en Duala',
                'ordre'       => 2,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $duala->id,
                'titre'       => 'Vie Quotidienne et Objets',
                'description' => 'Apprenez les termes indispensables du quotidien en Duala',
                'ordre'       => 3,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $duala->id,
                'titre'       => 'Verbes d\'Action',
                'description' => 'Apprenez à construire les premières phrases en Duala',
                'ordre'       => 4,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $duala->id,
                'titre'       => 'Les Nombres',
                'description' => 'Apprenez à compter en Duala',
                'ordre'       => 5,
                'statut'      => 'verrouille',
            ],

             // Leçons Ewondo (cours_id = 2)
            [
                'cours_id' => $ewondo->id,
                'titre'       => 'Salutations et Courtoisie',
                'description' => 'Apprenez les bases de l\'interaction sociale en Ewondo',
                'ordre'       => 1,
                'statut'      => 'debloque',
            ],
            [
                'cours_id' => $ewondo->id,
                'titre'       => 'La Famille et les Personnes',
                'description' => 'Apprenez les liens socaux fondamentaux en Ewondo',
                'ordre'       => 2,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $ewondo->id,
                'titre'       => 'Vie Quotidienne et Objets',
                'description' => 'Apprenez les termes indispensables du quotidien en Ewondo',
                'ordre'       => 3,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $ewondo->id,
                'titre'       => 'Verbes d\'Action',
                'description' => 'Apprenez à construire les premières phrases en Ewondo',
                'ordre'       => 4,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $ewondo->id,
                'titre'       => 'Les Nombres',
                'description' => 'Apprenez à compter en Ewondo',
                'ordre'       => 5,
                'statut'      => 'verrouille',
            ],

             // Leçons Medumba (cours_id = 1)
            [
                'cours_id' => $medumba->id,
                'titre'       => 'Salutations et Courtoisie',
                'description' => 'Apprenez les bases de l\'interaction sociale en Médumba',
                'ordre'       => 1,
                'statut'      => 'debloque',
            ],
            [
                'cours_id' => $medumba->id,
                'titre'       => 'La Famille et les Personnes',
                'description' => 'Apprenez les liens socaux fondamentaux en Médumba',
                'ordre'       => 2,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $medumba->id,
                'titre'       => 'Vie Quotidienne et Objets',
                'description' => 'Apprenez les termes indispensables du quotidien en Médumba',
                'ordre'       => 3,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $medumba->id,
                'titre'       => 'Verbes d\'Action',
                'description' => 'Apprenez à construire les premières phrases en Médumba',
                'ordre'       => 4,
                'statut'      => 'verrouille',
            ],
            [
                'cours_id' => $medumba->id,
                'titre'       => 'Les Nombres',
                'description' => 'Apprenez à compter en Médumba',
                'ordre'       => 5,
                'statut'      => 'verrouille',
            ]
        ];

        foreach ($lecons as $l) {
            Lecon::updateOrCreate(
                [
                    'cours_id' => $l['cours_id'],
                    'ordre' => $l['ordre'],
                ],
                [
                    'titre' => $l['titre'],
                    'description' => $l['description'],
                    'statut' => $l['statut'],
                ]
            );
        }
    }
}
