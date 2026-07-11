<?php

namespace Database\Seeders;

use App\Models\Cours;
use App\Models\Mot;
use Illuminate\Database\Seeder;

class MotSeeder extends Seeder
{
    public function run(): void
    {
        $duala   = Cours::where('nom', 'Duala')->first();
        $ewondo  = Cours::where('nom', 'Ewondo')->first();
        $medumba = Cours::where('nom', 'Médumba')->first();

        $mots = [
            // Duala
            ['cours_id' => $duala->id, 'mot' => 'Mbolo',  'traduction' => 'Bonjour',   'ordre' => 1],
            ['cours_id' => $duala->id, 'mot' => 'Sango',  'traduction' => 'Merci',     'ordre' => 2],
            ['cours_id' => $duala->id, 'mot' => 'Tooka',  'traduction' => 'Au revoir', 'ordre' => 3],
            ['cours_id' => $duala->id, 'mot' => 'Bolimo', 'traduction' => 'Pardon',    'ordre' => 4],
            ['cours_id' => $duala->id, 'mot' => 'Wonja',  'traduction' => 'Bienvenue', 'ordre' => 5],

            // Ewondo
            ['cours_id' => $ewondo->id, 'mot' => 'Mbolo',  'traduction' => 'Bonjour',   'ordre' => 1],
            ['cours_id' => $ewondo->id, 'mot' => 'Akiba',  'traduction' => 'Merci',     'ordre' => 2],
            ['cours_id' => $ewondo->id, 'mot' => 'Oyono',  'traduction' => 'Au revoir', 'ordre' => 3],
            ['cours_id' => $ewondo->id, 'mot' => 'Bolimo', 'traduction' => 'Pardon',    'ordre' => 4],
            ['cours_id' => $ewondo->id, 'mot' => 'Wonja',  'traduction' => 'Bienvenue', 'ordre' => 5],

            // Médumba
            ['cours_id' => $medumba->id, 'mot' => 'Mbɔ', 'traduction' => 'Bonjour',   'ordre' => 1],
            ['cours_id' => $medumba->id, 'mot' => 'Ɛsɛ', 'traduction' => 'Merci',     'ordre' => 2],
            ['cours_id' => $medumba->id, 'mot' => 'Nwɛ', 'traduction' => 'Au revoir', 'ordre' => 3],
            ['cours_id' => $medumba->id, 'mot' => 'Pɔdɔ', 'traduction' => 'Pardon',    'ordre' => 4],
            ['cours_id' => $medumba->id, 'mot' => 'Tɔ',  'traduction' => 'Bienvenue', 'ordre' => 5],
        ];

        foreach ($mots as $m) {
            Mot::create($m);
        }
    }
}
