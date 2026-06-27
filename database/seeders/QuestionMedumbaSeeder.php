<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;


class QuestionMedumbaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // ============================================
        // MÉDUMBA - Leçon 11 : Salutations et Courtoisie
        // ============================================

        // Exercise 71 - QCM Niveau 1
        ['exercise_id' => 71, 'question' => 'Comment dit-on "Bonjour" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbɔ', 'options' => json_encode(['Mbɔ', 'Ɛsɛ', 'Nwɛ', 'Tɔ'])],
        ['exercise_id' => 71, 'question' => 'Que signifie "Ɛsɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Merci', 'options' => json_encode(['Bonjour', 'Merci', 'Au revoir', 'Bienvenue'])],
        ['exercise_id' => 71, 'question' => 'Comment dit-on "Au revoir" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nwɛ', 'options' => json_encode(['Mbɔ', 'Ɛsɛ', 'Nwɛ', 'Tɔ'])],
        ['exercise_id' => 71, 'question' => 'Que signifie "Tɔ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Merci', 'Pardon', 'Bienvenue', 'Bonsoir'])],
        ['exercise_id' => 71, 'question' => 'Comment dit-on "Pardon" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Pɔdɔ', 'options' => json_encode(['Pɔdɔ', 'Ɛsɛ', 'Mbɔ', 'Nwɛ'])],

        // Exercise 72 - Vrai/Faux Niveau 1
        ['exercise_id' => 72, 'question' => '"Mbɔ" signifie "Bonjour" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 72, 'question' => '"Ɛsɛ" signifie "Au revoir" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 72, 'question' => '"Nwɛ" signifie "Au revoir" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 72, 'question' => '"Tɔ" signifie "Bienvenue" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 72, 'question' => '"Pɔdɔ" signifie "Merci" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 73 - Traduction Niveau 1
        ['exercise_id' => 73, 'question' => 'Traduisez "Bonjour" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Mbɔ', 'options' => null],
        ['exercise_id' => 73, 'question' => 'Que signifie "Nwɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Au revoir', 'options' => null],
        ['exercise_id' => 73, 'question' => 'Traduisez "Merci" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛsɛ', 'options' => null],
        ['exercise_id' => 73, 'question' => 'Que signifie "Tɔ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bienvenue', 'options' => null],
        ['exercise_id' => 73, 'question' => 'Traduisez "Pardon" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Pɔdɔ', 'options' => null],

        // Exercise 74 - QCM Niveau 2
        ['exercise_id' => 74, 'question' => 'Comment dit-on "Comment vas-tu ?" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɔ tɔ nde ?', 'options' => json_encode(['Ɔ tɔ nde ?', 'Mbɔ', 'Ɛsɛ', 'Nwɛ'])],
        ['exercise_id' => 74, 'question' => 'Que signifie "Ma tɔ bia" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Je vais bien', 'options' => json_encode(['Je vais mal', 'Je vais bien', 'Comment vas-tu ?', 'Au revoir'])],
        ['exercise_id' => 74, 'question' => 'Comment dit-on "Merci beaucoup" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛsɛ pɛ', 'options' => json_encode(['Ɛsɛ pɛ', 'Mbɔ pɛ', 'Nwɛ pɛ', 'Tɔ pɛ'])],
        ['exercise_id' => 74, 'question' => 'Comment dit-on "Bonsoir" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbɔ ngɛ', 'options' => json_encode(['Mbɔ ngɛ', 'Mbɔ bɔ', 'Ɛsɛ', 'Nwɛ'])],
        ['exercise_id' => 74, 'question' => 'Que signifie "Ɔ tɔ nde ?" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Comment vas-tu ?', 'options' => json_encode(['Comment vas-tu ?', 'Bonjour', 'Au revoir', 'Merci'])],

        // Exercise 75 - Vrai/Faux Niveau 2
        ['exercise_id' => 75, 'question' => '"Ɔ tɔ nde ?" signifie "Comment vas-tu ?"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 75, 'question' => '"Ma tɔ bia" signifie "Je vais mal"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 75, 'question' => '"Ɛsɛ pɛ" signifie "Merci beaucoup"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 75, 'question' => '"Mbɔ ngɛ" signifie "Bonsoir" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 75, 'question' => '"Pɔdɔ" signifie "Bonjour" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 76 - Traduction Niveau 2
        ['exercise_id' => 76, 'question' => 'Traduisez "Comment vas-tu ?" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɔ tɔ nde ?', 'options' => null],
        ['exercise_id' => 76, 'question' => 'Que signifie "Ma tɔ bia" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Je vais bien', 'options' => null],
        ['exercise_id' => 76, 'question' => 'Traduisez "Merci beaucoup" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛsɛ pɛ', 'options' => null],
        ['exercise_id' => 76, 'question' => 'Que signifie "Mbɔ ngɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bonsoir', 'options' => null],
        ['exercise_id' => 76, 'question' => 'Traduisez "Bienvenue" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Tɔ', 'options' => null],

        // Exercise 77 - Révision Générale
        ['exercise_id' => 77, 'question' => 'Comment dit-on "Bonjour" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbɔ', 'options' => json_encode(['Mbɔ', 'Ɛsɛ', 'Nwɛ', 'Tɔ'])],
        ['exercise_id' => 77, 'question' => '"Ɛsɛ pɛ" signifie "Merci beaucoup"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 77, 'question' => 'Que signifie "Pɔdɔ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Pardon', 'options' => null],
        ['exercise_id' => 77, 'question' => 'Que signifie "Tɔ" ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Bonjour', 'Merci', 'Bienvenue', 'Au revoir'])],
        ['exercise_id' => 77, 'question' => 'Traduisez "Au revoir" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Nwɛ', 'options' => null],

        // ============================================
        // MÉDUMBA - Leçon 12 : La Famille et les Personnes
        // ============================================

        // Exercise 78 - QCM Niveau 1
        ['exercise_id' => 78, 'question' => 'Comment dit-on "Père" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Tɛ', 'options' => json_encode(['Tɛ', 'Nɛ', 'Mwɛ', 'Nda'])],
        ['exercise_id' => 78, 'question' => 'Comment dit-on "Mère" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nɛ', 'options' => json_encode(['Tɛ', 'Nɛ', 'Mwɛ', 'Nda'])],
        ['exercise_id' => 78, 'question' => 'Que signifie "Mwɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Enfant', 'options' => json_encode(['Père', 'Mère', 'Enfant', 'Maison'])],
        ['exercise_id' => 78, 'question' => 'Comment dit-on "Maison" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nda', 'options' => json_encode(['Tɛ', 'Nɛ', 'Mwɛ', 'Nda'])],
        ['exercise_id' => 78, 'question' => 'Que signifie "Bɛ be nda" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Famille', 'options' => json_encode(['Maison', 'Famille', 'Enfants', 'Parents'])],

        // Exercise 79 - Vrai/Faux Niveau 1
        ['exercise_id' => 79, 'question' => '"Tɛ" signifie "Père" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 79, 'question' => '"Nɛ" signifie "Grand-mère" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 79, 'question' => '"Mwɛ" signifie "Enfant" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 79, 'question' => '"Nda" signifie "Maison" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 79, 'question' => '"Bɛ be nda" signifie "Enfants"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 80 - Traduction Niveau 1
        ['exercise_id' => 80, 'question' => 'Traduisez "Père" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Tɛ', 'options' => null],
        ['exercise_id' => 80, 'question' => 'Que signifie "Nɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Mère', 'options' => null],
        ['exercise_id' => 80, 'question' => 'Traduisez "Enfant" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Mwɛ', 'options' => null],
        ['exercise_id' => 80, 'question' => 'Que signifie "Nda" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Maison', 'options' => null],
        ['exercise_id' => 80, 'question' => 'Traduisez "Famille" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Bɛ be nda', 'options' => null],

        // Exercise 81 - QCM Niveau 2
        ['exercise_id' => 81, 'question' => 'Comment dit-on "Grand-père" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Tɛ kulu', 'options' => json_encode(['Tɛ kulu', 'Nɛ kulu', 'Tɛ moke', 'Nɛ moke'])],
        ['exercise_id' => 81, 'question' => 'Comment dit-on "Grand-mère" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nɛ kulu', 'options' => json_encode(['Tɛ kulu', 'Nɛ kulu', 'Tɛ moke', 'Nɛ moke'])],
        ['exercise_id' => 81, 'question' => 'Que signifie "Tɛ moke" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 81, 'question' => 'Comment dit-on "Tante" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nɛ moke', 'options' => json_encode(['Tɛ moke', 'Nɛ moke', 'Tɛ kulu', 'Nɛ kulu'])],
        ['exercise_id' => 81, 'question' => 'Comment dit-on "Ami" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Moninga', 'options' => json_encode(['Moninga', 'Mwɛ', 'Tɛ', 'Nɛ'])],

        // Exercise 82 - Vrai/Faux Niveau 2
        ['exercise_id' => 82, 'question' => '"Tɛ kulu" signifie "Grand-père"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 82, 'question' => '"Nɛ moke" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 82, 'question' => '"Tɛ moke" signifie "Oncle"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 82, 'question' => '"Nɛ kulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 82, 'question' => '"Moninga" signifie "Ennemi" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 83 - Traduction Niveau 2
        ['exercise_id' => 83, 'question' => 'Traduisez "Grand-père" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Tɛ kulu', 'options' => null],
        ['exercise_id' => 83, 'question' => 'Que signifie "Nɛ kulu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Grand-mère', 'options' => null],
        ['exercise_id' => 83, 'question' => 'Traduisez "Oncle" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Tɛ moke', 'options' => null],
        ['exercise_id' => 83, 'question' => 'Que signifie "Nɛ moke" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Tante', 'options' => null],
        ['exercise_id' => 83, 'question' => 'Que signifie "Moninga" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Ami', 'options' => null],

        // Exercise 84 - Révision Générale
        ['exercise_id' => 84, 'question' => 'Comment dit-on "Père" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Tɛ', 'options' => json_encode(['Tɛ', 'Nɛ', 'Mwɛ', 'Nda'])],
        ['exercise_id' => 84, 'question' => '"Nɛ kulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 84, 'question' => 'Que signifie "Bɛ be nda" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Famille', 'options' => null],
        ['exercise_id' => 84, 'question' => 'Que signifie "Tɛ moke" ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 84, 'question' => 'Traduisez "Tante" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Nɛ moke', 'options' => null],

        // ============================================
        // MÉDUMBA - Leçon 13 : Vie Quotidienne et Objets
        // ============================================

        // Exercise 85 - QCM Niveau 1
        ['exercise_id' => 85, 'question' => 'Comment dit-on "Eau" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ndɔk', 'options' => json_encode(['Ndɔk', 'Nyama', 'Kpɔ', 'Mbɛ'])],
        ['exercise_id' => 85, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Viande', 'options' => json_encode(['Eau', 'Viande', 'Poisson', 'Feu'])],
        ['exercise_id' => 85, 'question' => 'Comment dit-on "Poisson" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Kpɔ', 'options' => json_encode(['Ndɔk', 'Nyama', 'Kpɔ', 'Mbɛ'])],
        ['exercise_id' => 85, 'question' => 'Que signifie "Mbɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Feu', 'options' => json_encode(['Eau', 'Viande', 'Poisson', 'Feu'])],
        ['exercise_id' => 85, 'question' => 'Comment dit-on "Nourriture" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Biɛ', 'options' => json_encode(['Biɛ', 'Ndɔk', 'Nyama', 'Kpɔ'])],

        // Exercise 86 - Vrai/Faux Niveau 1
        ['exercise_id' => 86, 'question' => '"Ndɔk" signifie "Eau" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 86, 'question' => '"Nyama" signifie "Poisson" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 86, 'question' => '"Kpɔ" signifie "Poisson" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 86, 'question' => '"Mbɛ" signifie "Feu" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 86, 'question' => '"Biɛ" signifie "Eau" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 87 - Traduction Niveau 1
        ['exercise_id' => 87, 'question' => 'Traduisez "Eau" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ndɔk', 'options' => null],
        ['exercise_id' => 87, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Viande', 'options' => null],
        ['exercise_id' => 87, 'question' => 'Traduisez "Poisson" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Kpɔ', 'options' => null],
        ['exercise_id' => 87, 'question' => 'Que signifie "Mbɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Feu', 'options' => null],
        ['exercise_id' => 87, 'question' => 'Traduisez "Nourriture" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Biɛ', 'options' => null],

        // Exercise 88 - QCM Niveau 2
        ['exercise_id' => 88, 'question' => 'Comment dit-on "Marché" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Sanjɛ', 'options' => json_encode(['Sanjɛ', 'Nda', 'Ndɔk', 'Nyama'])],
        ['exercise_id' => 88, 'question' => 'Que signifie "Biam" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Argent', 'options' => json_encode(['Marché', 'Argent', 'Vêtement', 'Route'])],
        ['exercise_id' => 88, 'question' => 'Comment dit-on "Vêtement" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Elamba', 'options' => json_encode(['Elamba', 'Biam', 'Sanjɛ', 'Ndɔk'])],
        ['exercise_id' => 88, 'question' => 'Que signifie "Mvɔg" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Village', 'options' => json_encode(['Maison', 'Village', 'Marché', 'Eau'])],
        ['exercise_id' => 88, 'question' => 'Comment dit-on "Route" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Njɛ', 'options' => json_encode(['Njɛ', 'Sanjɛ', 'Nda', 'Biam'])],

        // Exercise 89 - Vrai/Faux Niveau 2
        ['exercise_id' => 89, 'question' => '"Sanjɛ" signifie "Marché" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 89, 'question' => '"Biam" signifie "Vêtement" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 89, 'question' => '"Elamba" signifie "Vêtement" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 89, 'question' => '"Mvɔg" signifie "Village" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 89, 'question' => '"Njɛ" signifie "Rivière" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 90 - Traduction Niveau 2
        ['exercise_id' => 90, 'question' => 'Traduisez "Marché" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Sanjɛ', 'options' => null],
        ['exercise_id' => 90, 'question' => 'Que signifie "Biam" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Argent', 'options' => null],
        ['exercise_id' => 90, 'question' => 'Traduisez "Vêtement" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Elamba', 'options' => null],
        ['exercise_id' => 90, 'question' => 'Que signifie "Njɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Route', 'options' => null],
        ['exercise_id' => 90, 'question' => 'Traduisez "Village" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Mvɔg', 'options' => null],

        // Exercise 91 - Révision Générale
        ['exercise_id' => 91, 'question' => 'Comment dit-on "Eau" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ndɔk', 'options' => json_encode(['Ndɔk', 'Nyama', 'Kpɔ', 'Sanjɛ'])],
        ['exercise_id' => 91, 'question' => '"Elamba" signifie "Vêtement"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 91, 'question' => 'Que signifie "Sanjɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Marché', 'options' => null],
        ['exercise_id' => 91, 'question' => 'Que signifie "Kpɔ" ?', 'type' => 'qcm', 'reponse_correcte' => 'Poisson', 'options' => json_encode(['Eau', 'Viande', 'Poisson', 'Feu'])],
        ['exercise_id' => 91, 'question' => 'Traduisez "Argent" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Biam', 'options' => null],

        // ============================================
        // MÉDUMBA - Leçon 14 : Verbes d'Action
        // ============================================

        // Exercise 92 - QCM Niveau 1
        ['exercise_id' => 92, 'question' => 'Comment dit-on "Manger" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Diɛ', 'options' => json_encode(['Diɛ', 'Nuɛ', 'Lobɛ', 'Kwɛ'])],
        ['exercise_id' => 92, 'question' => 'Que signifie "Nuɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Boire', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Marcher'])],
        ['exercise_id' => 92, 'question' => 'Comment dit-on "Parler" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Lobɛ', 'options' => json_encode(['Diɛ', 'Nuɛ', 'Lobɛ', 'Kwɛ'])],
        ['exercise_id' => 92, 'question' => 'Que signifie "Kwɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Marcher', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Marcher'])],
        ['exercise_id' => 92, 'question' => 'Comment dit-on "Dormir" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Lɛlɛ', 'options' => json_encode(['Lɛlɛ', 'Diɛ', 'Nuɛ', 'Lobɛ'])],

        // Exercise 93 - Vrai/Faux Niveau 1
        ['exercise_id' => 93, 'question' => '"Diɛ" signifie "Manger" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 93, 'question' => '"Nuɛ" signifie "Manger" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 93, 'question' => '"Lobɛ" signifie "Parler" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 93, 'question' => '"Kwɛ" signifie "Marcher" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 93, 'question' => '"Lɛlɛ" signifie "Courir" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 94 - Traduction Niveau 1
        ['exercise_id' => 94, 'question' => 'Traduisez "Manger" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Diɛ', 'options' => null],
        ['exercise_id' => 94, 'question' => 'Que signifie "Nuɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Boire', 'options' => null],
        ['exercise_id' => 94, 'question' => 'Traduisez "Parler" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Lobɛ', 'options' => null],
        ['exercise_id' => 94, 'question' => 'Que signifie "Lɛlɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Dormir', 'options' => null],
        ['exercise_id' => 94, 'question' => 'Traduisez "Marcher" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Kwɛ', 'options' => null],

        // Exercise 95 - QCM Niveau 2
        ['exercise_id' => 95, 'question' => 'Comment dit-on "Travailler" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Bɛ mosapi', 'options' => json_encode(['Bɛ mosapi', 'Lobɛ', 'Kwɛ', 'Lɛlɛ'])],
        ['exercise_id' => 95, 'question' => 'Que signifie "Somɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Étudier', 'options' => json_encode(['Manger', 'Boire', 'Étudier', 'Dormir'])],
        ['exercise_id' => 95, 'question' => 'Comment dit-on "Voir" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Nɛ', 'options' => json_encode(['Nɛ', 'Diɛ', 'Nuɛ', 'Lɛlɛ'])],
        ['exercise_id' => 95, 'question' => 'Que signifie "Tikɛ" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Arrêter', 'options' => json_encode(['Partir', 'Arrêter', 'Courir', 'Venir'])],
        ['exercise_id' => 95, 'question' => 'Comment dit-on "Venir" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Wɛ', 'options' => json_encode(['Wɛ', 'Tikɛ', 'Nɛ', 'Somɛ'])],

        // Exercise 96 - Vrai/Faux Niveau 2
        ['exercise_id' => 96, 'question' => '"Somɛ" signifie "Étudier" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 96, 'question' => '"Nɛ" signifie "Entendre" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 96, 'question' => '"Tikɛ" signifie "Arrêter" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 96, 'question' => '"Wɛ" signifie "Venir" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 96, 'question' => '"Bɛ mosapi" signifie "Jouer" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 97 - Traduction Niveau 2
        ['exercise_id' => 97, 'question' => 'Traduisez "Étudier" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Somɛ', 'options' => null],
        ['exercise_id' => 97, 'question' => 'Que signifie "Nɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Voir', 'options' => null],
        ['exercise_id' => 97, 'question' => 'Traduisez "Arrêter" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Tikɛ', 'options' => null],
        ['exercise_id' => 97, 'question' => 'Que signifie "Wɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Venir', 'options' => null],
        ['exercise_id' => 97, 'question' => 'Traduisez "Travailler" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Bɛ mosapi', 'options' => null],

        // Exercise 98 - Révision Générale
        ['exercise_id' => 98, 'question' => 'Comment dit-on "Manger" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Diɛ', 'options' => json_encode(['Diɛ', 'Nuɛ', 'Lobɛ', 'Lɛlɛ'])],
        ['exercise_id' => 98, 'question' => '"Somɛ" signifie "Étudier"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 98, 'question' => 'Que signifie "Tikɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Arrêter', 'options' => null],
        ['exercise_id' => 98, 'question' => 'Que signifie "Wɛ" ?', 'type' => 'qcm', 'reponse_correcte' => 'Venir', 'options' => json_encode(['Partir', 'Venir', 'Courir', 'Arrêter'])],
        ['exercise_id' => 98, 'question' => 'Traduisez "Boire" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Nuɛ', 'options' => null],

        // ============================================
        // MÉDUMBA - Leçon 15 : Les Nombres
        // ============================================

        // Exercise 99 - QCM Niveau 1
        ['exercise_id' => 99, 'question' => 'Comment dit-on "Un" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛbɛ', 'options' => json_encode(['Ɛbɛ', 'Ɛba', 'Ɛla', 'Ɛnɛ'])],
        ['exercise_id' => 99, 'question' => 'Comment dit-on "Deux" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛba', 'options' => json_encode(['Ɛbɛ', 'Ɛba', 'Ɛla', 'Ɛnɛ'])],
        ['exercise_id' => 99, 'question' => 'Comment dit-on "Trois" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛla', 'options' => json_encode(['Ɛbɛ', 'Ɛba', 'Ɛla', 'Ɛnɛ'])],
        ['exercise_id' => 99, 'question' => 'Comment dit-on "Quatre" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛnɛ', 'options' => json_encode(['Ɛbɛ', 'Ɛba', 'Ɛla', 'Ɛnɛ'])],
        ['exercise_id' => 99, 'question' => 'Comment dit-on "Cinq" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛtan', 'options' => json_encode(['Ɛtan', 'Ɛsambe', 'Ɛsaa', 'Ɛwom'])],

        // Exercise 100 - Vrai/Faux Niveau 1
        ['exercise_id' => 100, 'question' => '"Ɛbɛ" signifie "Un" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 100, 'question' => '"Ɛba" signifie "Trois" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 100, 'question' => '"Ɛla" signifie "Trois" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 100, 'question' => '"Ɛnɛ" signifie "Cinq" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 100, 'question' => '"Ɛtan" signifie "Cinq" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 101 - Traduction Niveau 1
        ['exercise_id' => 101, 'question' => 'Traduisez "Un" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛbɛ', 'options' => null],
        ['exercise_id' => 101, 'question' => 'Que signifie "Ɛba" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Deux', 'options' => null],
        ['exercise_id' => 101, 'question' => 'Traduisez "Trois" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛla', 'options' => null],
        ['exercise_id' => 101, 'question' => 'Que signifie "Ɛnɛ" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Quatre', 'options' => null],
        ['exercise_id' => 101, 'question' => 'Traduisez "Cinq" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛtan', 'options' => null],

        // Exercise 102 - QCM Niveau 2
        ['exercise_id' => 102, 'question' => 'Comment dit-on "Six" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛsambe', 'options' => json_encode(['Ɛsambe', 'Ɛsaa', 'Ɛvom', 'Ɛvu'])],
        ['exercise_id' => 102, 'question' => 'Comment dit-on "Sept" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛsaa', 'options' => json_encode(['Ɛsambe', 'Ɛsaa', 'Ɛvom', 'Ɛvu'])],
        ['exercise_id' => 102, 'question' => 'Comment dit-on "Huit" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛvom', 'options' => json_encode(['Ɛsambe', 'Ɛsaa', 'Ɛvom', 'Ɛvu'])],
        ['exercise_id' => 102, 'question' => 'Comment dit-on "Neuf" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛvu', 'options' => json_encode(['Ɛsambe', 'Ɛsaa', 'Ɛvom', 'Ɛvu'])],
        ['exercise_id' => 102, 'question' => 'Comment dit-on "Dix" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛwom', 'options' => json_encode(['Ɛwom', 'Ɛbɛ', 'Ɛba', 'Ɛla'])],

        // Exercise 103 - Vrai/Faux Niveau 2
        ['exercise_id' => 103, 'question' => '"Ɛsambe" signifie "Six" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 103, 'question' => '"Ɛsaa" signifie "Huit" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 103, 'question' => '"Ɛvom" signifie "Huit" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 103, 'question' => '"Ɛwom" signifie "Dix" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 103, 'question' => '"Ɛvu" signifie "Sept" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 104 - Traduction Niveau 2
        ['exercise_id' => 104, 'question' => 'Traduisez "Six" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛsambe', 'options' => null],
        ['exercise_id' => 104, 'question' => 'Que signifie "Ɛsaa" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Sept', 'options' => null],
        ['exercise_id' => 104, 'question' => 'Traduisez "Huit" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛvom', 'options' => null],
        ['exercise_id' => 104, 'question' => 'Que signifie "Ɛvu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Neuf', 'options' => null],
        ['exercise_id' => 104, 'question' => 'Traduisez "Dix" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛwom', 'options' => null],

        // Exercise 105 - Révision Générale
        ['exercise_id' => 105, 'question' => 'Comment dit-on "Un" en Médumba ?', 'type' => 'qcm', 'reponse_correcte' => 'Ɛbɛ', 'options' => json_encode(['Ɛbɛ', 'Ɛba', 'Ɛla', 'Ɛwom'])],
        ['exercise_id' => 105, 'question' => '"Ɛwom" signifie "Dix" en Médumba', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 105, 'question' => 'Que signifie "Ɛtan" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Cinq', 'options' => null],
        ['exercise_id' => 105, 'question' => 'Que signifie "Ɛsambe" ?', 'type' => 'qcm', 'reponse_correcte' => 'Six', 'options' => json_encode(['Cinq', 'Six', 'Sept', 'Huit'])],
        ['exercise_id' => 105, 'question' => 'Traduisez "Neuf" en Médumba', 'type' => 'texte_libre', 'reponse_correcte' => 'Ɛvu', 'options' => null],


        ];

        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}
