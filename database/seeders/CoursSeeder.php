<?php

namespace Database\Seeders;

use App\Models\Cours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cours = [
            [
                'nom' => 'Duala',
                'description' => 'Apprenez le Duala, langue parlée dans la région du Littoral au Cameroun.',
            ],
             [
                'nom' => 'Ewondo',
                'description' => 'Apprenez le Ewondo, langue parlée dans la région du Centre au Cameroun.',
            ],
             [
                'nom' => 'Médumba',
                'description' => 'Apprenez le Ewondo, langue parlée dans la région de l\'Ouest du Cameroun.',
             ]
        ];
        foreach ($cours as $c) {
            Cours::create($c);
        }
    }
}

