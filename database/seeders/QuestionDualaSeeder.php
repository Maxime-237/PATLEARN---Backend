<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;


class QuestionDualaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // ============================================
        // DUALA - Leçon 1 : Salutations et Courtoisie
        // ============================================

        // Exercise 1 - QCM Niveau 1
        ['exercise_id' => 1, 'question' => 'Comment dit-on "Bonjour" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo', 'options' => json_encode(['Mbolo', 'Ndolo', 'Bato', 'Wouri'])],
        ['exercise_id' => 1, 'question' => 'Que signifie "Sango" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Merci', 'options' => json_encode(['Bonjour', 'Merci', 'Au revoir', 'Pardon'])],
        ['exercise_id' => 1, 'question' => 'Comment dit-on "Au revoir" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tooka', 'options' => json_encode(['Tooka', 'Mbolo', 'Wonja', 'Bolimo'])],
        ['exercise_id' => 1, 'question' => 'Que signifie "Wonja" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Merci', 'Pardon', 'Bienvenue', 'Bonsoir'])],
        ['exercise_id' => 1, 'question' => 'Comment dit-on "Pardon" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Bolimo', 'options' => json_encode(['Bolimo', 'Sango', 'Mbolo', 'Tooka'])],

        // Exercise 2 - Vrai/Faux Niveau 1
        ['exercise_id' => 2, 'question' => '"Mbolo" signifie "Bonjour" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 2, 'question' => '"Sango" signifie "Au revoir" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 2, 'question' => '"Tooka" signifie "Au revoir" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 2, 'question' => '"Wonja" signifie "Merci" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 2, 'question' => '"Bolimo" signifie "Pardon" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 3 - Traduction Niveau 1
        ['exercise_id' => 3, 'question' => 'Traduisez "Bonjour" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mbolo', 'options' => null],
        ['exercise_id' => 3, 'question' => 'Que signifie "Tooka" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Au revoir', 'options' => null],
        ['exercise_id' => 3, 'question' => 'Traduisez "Merci" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Sango', 'options' => null],
        ['exercise_id' => 3, 'question' => 'Que signifie "Wonja" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bienvenue', 'options' => null],
        ['exercise_id' => 3, 'question' => 'Traduisez "Pardon" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Bolimo', 'options' => null],

        // Exercise 4 - QCM Niveau 2
        ['exercise_id' => 4, 'question' => 'Comment répondre à "Mbolo" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo bolo', 'options' => json_encode(['Mbolo bolo', 'Sango', 'Tooka', 'Wonja'])],
        ['exercise_id' => 4, 'question' => 'Comment dit-on "Comment vas-tu ?" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'O wela nde ?', 'options' => json_encode(['O wela nde ?', 'Mbolo', 'Sango mingi', 'Tooka'])],
        ['exercise_id' => 4, 'question' => 'Que signifie "Sango mingi" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Merci beaucoup', 'options' => json_encode(['Bonjour', 'Merci beaucoup', 'Au revoir', 'Bonsoir'])],
        ['exercise_id' => 4, 'question' => 'Comment dit-on "Bonsoir" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo wo', 'options' => json_encode(['Mbolo wo', 'Mbolo bolo', 'Sango', 'Tooka'])],
        ['exercise_id' => 4, 'question' => 'Que signifie "O wela nde ?" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Comment vas-tu ?', 'options' => json_encode(['Comment vas-tu ?', 'Bonjour', 'Au revoir', 'Merci'])],

        // Exercise 5 - Vrai/Faux Niveau 2
        ['exercise_id' => 5, 'question' => '"Mbolo bolo" est la réponse à "Mbolo"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 5, 'question' => '"Sango mingi" signifie "Bonjour"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 5, 'question' => '"Mbolo wo" signifie "Bonsoir"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 5, 'question' => '"O wela nde ?" signifie "Comment vas-tu ?"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 5, 'question' => '"Tooka" signifie "Bonjour" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 6 - Traduction Niveau 2
        ['exercise_id' => 6, 'question' => 'Traduisez "Comment vas-tu ?" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'O wela nde ?', 'options' => null],
        ['exercise_id' => 6, 'question' => 'Que signifie "Mbolo bolo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bonjour (réponse)', 'options' => null],
        ['exercise_id' => 6, 'question' => 'Traduisez "Merci beaucoup" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Sango mingi', 'options' => null],
        ['exercise_id' => 6, 'question' => 'Que signifie "Mbolo wo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bonsoir', 'options' => null],
        ['exercise_id' => 6, 'question' => 'Traduisez "Bienvenue" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Wonja', 'options' => null],

        // Exercise 7 - Révision Générale
        ['exercise_id' => 7, 'question' => 'Comment dit-on "Bonjour" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo', 'options' => json_encode(['Mbolo', 'Tooka', 'Sango', 'Bolimo'])],
        ['exercise_id' => 7, 'question' => '"Sango mingi" signifie "Merci beaucoup"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 7, 'question' => 'Que signifie "Bolimo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Pardon', 'options' => null],
        ['exercise_id' => 7, 'question' => 'Que signifie "Wonja" ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Bonjour', 'Merci', 'Bienvenue', 'Au revoir'])],
        ['exercise_id' => 7, 'question' => 'Traduisez "Au revoir" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tooka', 'options' => null],

        // ============================================
        // DUALA - Leçon 2 : La Famille et les Personnes
        // ============================================

        // Exercise 8 - QCM Niveau 1
        ['exercise_id' => 8, 'question' => 'Comment dit-on "Père" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tata', 'options' => json_encode(['Tata', 'Mama', 'Mwan', 'Ndabo'])],
        ['exercise_id' => 8, 'question' => 'Comment dit-on "Mère" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mama', 'options' => json_encode(['Tata', 'Mama', 'Mwan', 'Nde'])],
        ['exercise_id' => 8, 'question' => 'Que signifie "Mwan" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Enfant', 'options' => json_encode(['Père', 'Mère', 'Enfant', 'Frère'])],
        ['exercise_id' => 8, 'question' => 'Comment dit-on "Frère" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Nde mwan', 'options' => json_encode(['Nde mwan', 'Tata', 'Mama', 'Ndabo'])],
        ['exercise_id' => 8, 'question' => 'Que signifie "Bato ba ndabo" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Famille', 'options' => json_encode(['Maison', 'Famille', 'Enfants', 'Parents'])],

        // Exercise 9 - Vrai/Faux Niveau 1
        ['exercise_id' => 9, 'question' => '"Tata" signifie "Père" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 9, 'question' => '"Mama" signifie "Grand-mère" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 9, 'question' => '"Mwan" signifie "Enfant" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 9, 'question' => '"Bato ba ndabo" signifie "Famille"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 9, 'question' => '"Nde mwan" signifie "Sœur" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 10 - Traduction Niveau 1
        ['exercise_id' => 10, 'question' => 'Traduisez "Père" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tata', 'options' => null],
        ['exercise_id' => 10, 'question' => 'Que signifie "Mama" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Mère', 'options' => null],
        ['exercise_id' => 10, 'question' => 'Traduisez "Enfant" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mwan', 'options' => null],
        ['exercise_id' => 10, 'question' => 'Que signifie "Nde mwan" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Frère', 'options' => null],
        ['exercise_id' => 10, 'question' => 'Traduisez "Famille" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Bato ba ndabo', 'options' => null],

        // Exercise 11 - QCM Niveau 2
        ['exercise_id' => 11, 'question' => 'Comment dit-on "Grand-père" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tata mukulu', 'options' => json_encode(['Tata mukulu', 'Mama mukulu', 'Tata moke', 'Mama moke'])],
        ['exercise_id' => 11, 'question' => 'Comment dit-on "Grand-mère" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mama mukulu', 'options' => json_encode(['Tata mukulu', 'Mama mukulu', 'Tata moke', 'Mama moke'])],
        ['exercise_id' => 11, 'question' => 'Que signifie "Tata moke" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 11, 'question' => 'Comment dit-on "Tante" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mama moke', 'options' => json_encode(['Tata moke', 'Mama moke', 'Tata mukulu', 'Mama mukulu'])],
        ['exercise_id' => 11, 'question' => 'Que signifie "Ndabo" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Maison', 'options' => json_encode(['Famille', 'Enfant', 'Maison', 'Père'])],

        // Exercise 12 - Vrai/Faux Niveau 2
        ['exercise_id' => 12, 'question' => '"Tata mukulu" signifie "Grand-père"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 12, 'question' => '"Mama moke" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 12, 'question' => '"Tata moke" signifie "Oncle"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 12, 'question' => '"Mama mukulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 12, 'question' => '"Ndabo" signifie "Famille" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 13 - Traduction Niveau 2
        ['exercise_id' => 13, 'question' => 'Traduisez "Grand-père" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tata mukulu', 'options' => null],
        ['exercise_id' => 13, 'question' => 'Que signifie "Mama mukulu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Grand-mère', 'options' => null],
        ['exercise_id' => 13, 'question' => 'Traduisez "Oncle" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tata moke', 'options' => null],
        ['exercise_id' => 13, 'question' => 'Que signifie "Mama moke" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Tante', 'options' => null],
        ['exercise_id' => 13, 'question' => 'Traduisez "Maison" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Ndabo', 'options' => null],

        // Exercise 14 - Révision Générale
        ['exercise_id' => 14, 'question' => 'Comment dit-on "Père" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tata', 'options' => json_encode(['Tata', 'Mama', 'Mwan', 'Ndabo'])],
        ['exercise_id' => 14, 'question' => '"Mama mukulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 14, 'question' => 'Que signifie "Bato ba ndabo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Famille', 'options' => null],
        ['exercise_id' => 14, 'question' => 'Que signifie "Tata moke" ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 14, 'question' => 'Traduisez "Tante" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mama moke', 'options' => null],

        // ============================================
        // DUALA - Leçon 3 : Vie Quotidienne et Objets
        // ============================================

        // Exercise 15 - QCM Niveau 1
        ['exercise_id' => 15, 'question' => 'Comment dit-on "Eau" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mba', 'options' => json_encode(['Mba', 'Nyama', 'Mbanga', 'Diba'])],
        ['exercise_id' => 15, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Viande', 'options' => json_encode(['Eau', 'Viande', 'Pain', 'Poisson'])],
        ['exercise_id' => 15, 'question' => 'Comment dit-on "Poisson" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Diba', 'options' => json_encode(['Mba', 'Nyama', 'Mbanga', 'Diba'])],
        ['exercise_id' => 15, 'question' => 'Que signifie "Mbanga" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Noix de palme', 'options' => json_encode(['Eau', 'Viande', 'Noix de palme', 'Poisson'])],
        ['exercise_id' => 15, 'question' => 'Comment dit-on "Feu" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Moto', 'options' => json_encode(['Moto', 'Mba', 'Nyama', 'Diba'])],

        // Exercise 16 - Vrai/Faux Niveau 1
        ['exercise_id' => 16, 'question' => '"Mba" signifie "Eau" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 16, 'question' => '"Nyama" signifie "Poisson" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 16, 'question' => '"Diba" signifie "Poisson" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 16, 'question' => '"Mbanga" signifie "Noix de palme"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 16, 'question' => '"Moto" signifie "Eau" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 17 - Traduction Niveau 1
        ['exercise_id' => 17, 'question' => 'Traduisez "Eau" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mba', 'options' => null],
        ['exercise_id' => 17, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Viande', 'options' => null],
        ['exercise_id' => 17, 'question' => 'Traduisez "Poisson" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Diba', 'options' => null],
        ['exercise_id' => 17, 'question' => 'Que signifie "Moto" en Duala ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Feu', 'options' => null],
        ['exercise_id' => 17, 'question' => 'Traduisez "Noix de palme" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mbanga', 'options' => null],

        // Exercise 18 - QCM Niveau 2
        ['exercise_id' => 18, 'question' => 'Comment dit-on "Marché" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Sanje', 'options' => json_encode(['Sanje', 'Ndabo', 'Mba', 'Nyama'])],
        ['exercise_id' => 18, 'question' => 'Que signifie "Bwam" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Argent', 'options' => json_encode(['Marché', 'Argent', 'Vêtement', 'Chaussure'])],
        ['exercise_id' => 18, 'question' => 'Comment dit-on "Vêtement" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Elamba', 'options' => json_encode(['Elamba', 'Bwam', 'Sanje', 'Mba'])],
        ['exercise_id' => 18, 'question' => 'Que signifie "Mboa" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Village', 'options' => json_encode(['Maison', 'Village', 'Marché', 'Eau'])],
        ['exercise_id' => 18, 'question' => 'Comment dit-on "Route" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Njea', 'options' => json_encode(['Njea', 'Sanje', 'Ndabo', 'Bwam'])],

        // Exercise 19 - Vrai/Faux Niveau 2
        ['exercise_id' => 19, 'question' => '"Sanje" signifie "Marché" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 19, 'question' => '"Bwam" signifie "Vêtement" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 19, 'question' => '"Elamba" signifie "Vêtement" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 19, 'question' => '"Mboa" signifie "Village" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 19, 'question' => '"Njea" signifie "Rivière" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 20 - Traduction Niveau 2
        ['exercise_id' => 20, 'question' => 'Traduisez "Marché" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Sanje', 'options' => null],
        ['exercise_id' => 20, 'question' => 'Que signifie "Bwam" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Argent', 'options' => null],
        ['exercise_id' => 20, 'question' => 'Traduisez "Vêtement" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Elamba', 'options' => null],
        ['exercise_id' => 20, 'question' => 'Que signifie "Njea" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Route', 'options' => null],
        ['exercise_id' => 20, 'question' => 'Traduisez "Village" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mboa', 'options' => null],

        // Exercise 21 - Révision Générale
        ['exercise_id' => 21, 'question' => 'Comment dit-on "Eau" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mba', 'options' => json_encode(['Mba', 'Nyama', 'Diba', 'Sanje'])],
        ['exercise_id' => 21, 'question' => '"Elamba" signifie "Vêtement"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 21, 'question' => 'Que signifie "Sanje" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Marché', 'options' => null],
        ['exercise_id' => 21, 'question' => 'Que signifie "Diba" ?', 'type' => 'qcm', 'reponse_correcte' => 'Poisson', 'options' => json_encode(['Eau', 'Viande', 'Poisson', 'Feu'])],
        ['exercise_id' => 21, 'question' => 'Traduisez "Argent" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Bwam', 'options' => null],

        // ============================================
        // DUALA - Leçon 4 : Verbes d'Action
        // ============================================

        // Exercise 22 - QCM Niveau 1
        ['exercise_id' => 22, 'question' => 'Comment dit-on "Manger" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Dia', 'options' => json_encode(['Dia', 'Nua', 'Loba', 'Kwela'])],
        ['exercise_id' => 22, 'question' => 'Que signifie "Nua" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Boire', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Marcher'])],
        ['exercise_id' => 22, 'question' => 'Comment dit-on "Parler" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Loba', 'options' => json_encode(['Dia', 'Nua', 'Loba', 'Kwela'])],
        ['exercise_id' => 22, 'question' => 'Que signifie "Kwela" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Marcher', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Marcher'])],
        ['exercise_id' => 22, 'question' => 'Comment dit-on "Dormir" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Lela', 'options' => json_encode(['Lela', 'Dia', 'Nua', 'Loba'])],

        // Exercise 23 - Vrai/Faux Niveau 1
        ['exercise_id' => 23, 'question' => '"Dia" signifie "Manger" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 23, 'question' => '"Nua" signifie "Manger" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 23, 'question' => '"Loba" signifie "Parler" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 23, 'question' => '"Kwela" signifie "Marcher" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 23, 'question' => '"Lela" signifie "Courir" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 24 - Traduction Niveau 1
        ['exercise_id' => 24, 'question' => 'Traduisez "Manger" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Dia', 'options' => null],
        ['exercise_id' => 24, 'question' => 'Que signifie "Nua" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Boire', 'options' => null],
        ['exercise_id' => 24, 'question' => 'Traduisez "Parler" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Loba', 'options' => null],
        ['exercise_id' => 24, 'question' => 'Que signifie "Lela" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Dormir', 'options' => null],
        ['exercise_id' => 24, 'question' => 'Traduisez "Marcher" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Kwela', 'options' => null],

        // Exercise 25 - QCM Niveau 2
        ['exercise_id' => 25, 'question' => 'Comment dit-on "Travailler" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Buka mosapi', 'options' => json_encode(['Buka mosapi', 'Loba', 'Kwela', 'Lela'])],
        ['exercise_id' => 25, 'question' => 'Que signifie "Soma" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Étudier', 'options' => json_encode(['Manger', 'Boire', 'Étudier', 'Dormir'])],
        ['exercise_id' => 25, 'question' => 'Comment dit-on "Voir" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mona', 'options' => json_encode(['Mona', 'Dia', 'Nua', 'Lela'])],
        ['exercise_id' => 25, 'question' => 'Que signifie "Tika" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Arrêter', 'options' => json_encode(['Partir', 'Arrêter', 'Courir', 'Venir'])],
        ['exercise_id' => 25, 'question' => 'Comment dit-on "Venir" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Ela', 'options' => json_encode(['Ela', 'Tika', 'Mona', 'Soma'])],

        // Exercise 26 - Vrai/Faux Niveau 2
        ['exercise_id' => 26, 'question' => '"Soma" signifie "Étudier" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 26, 'question' => '"Mona" signifie "Entendre" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 26, 'question' => '"Tika" signifie "Arrêter" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 26, 'question' => '"Ela" signifie "Venir" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 26, 'question' => '"Buka mosapi" signifie "Jouer" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 27 - Traduction Niveau 2
        ['exercise_id' => 27, 'question' => 'Traduisez "Étudier" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Soma', 'options' => null],
        ['exercise_id' => 27, 'question' => 'Que signifie "Mona" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Voir', 'options' => null],
        ['exercise_id' => 27, 'question' => 'Traduisez "Arrêter" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tika', 'options' => null],
        ['exercise_id' => 27, 'question' => 'Que signifie "Ela" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Venir', 'options' => null],
        ['exercise_id' => 27, 'question' => 'Traduisez "Travailler" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Buka mosapi', 'options' => null],

        // Exercise 28 - Révision Générale
        ['exercise_id' => 28, 'question' => 'Comment dit-on "Manger" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Dia', 'options' => json_encode(['Dia', 'Nua', 'Loba', 'Lela'])],
        ['exercise_id' => 28, 'question' => '"Soma" signifie "Étudier"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 28, 'question' => 'Que signifie "Tika" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Arrêter', 'options' => null],
        ['exercise_id' => 28, 'question' => 'Que signifie "Ela" ?', 'type' => 'qcm', 'reponse_correcte' => 'Venir', 'options' => json_encode(['Partir', 'Venir', 'Courir', 'Arrêter'])],
        ['exercise_id' => 28, 'question' => 'Traduisez "Boire" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Nua', 'options' => null],

        // ============================================
        // DUALA - Leçon 5 : Les Nombres
        // ============================================

        // Exercise 29 - QCM Niveau 1
        ['exercise_id' => 29, 'question' => 'Comment dit-on "Un" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mboa', 'options' => json_encode(['Mboa', 'Beba', 'Lalo', 'Bone'])],
        ['exercise_id' => 29, 'question' => 'Comment dit-on "Deux" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Beba', 'options' => json_encode(['Mboa', 'Beba', 'Lalo', 'Bone'])],
        ['exercise_id' => 29, 'question' => 'Comment dit-on "Trois" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Lalo', 'options' => json_encode(['Mboa', 'Beba', 'Lalo', 'Bone'])],
        ['exercise_id' => 29, 'question' => 'Comment dit-on "Quatre" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Bone', 'options' => json_encode(['Mboa', 'Beba', 'Lalo', 'Bone'])],
        ['exercise_id' => 29, 'question' => 'Comment dit-on "Cinq" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tan', 'options' => json_encode(['Tan', 'Sambanu', 'Sambuadi', 'Tamba'])],

        // Exercise 30 - Vrai/Faux Niveau 1
        ['exercise_id' => 30, 'question' => '"Mboa" signifie "Un" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 30, 'question' => '"Beba" signifie "Trois" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 30, 'question' => '"Lalo" signifie "Trois" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 30, 'question' => '"Bone" signifie "Cinq" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 30, 'question' => '"Tan" signifie "Cinq" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 31 - Traduction Niveau 1
        ['exercise_id' => 31, 'question' => 'Traduisez "Un" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Mboa', 'options' => null],
        ['exercise_id' => 31, 'question' => 'Que signifie "Beba" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Deux', 'options' => null],
        ['exercise_id' => 31, 'question' => 'Traduisez "Trois" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Lalo', 'options' => null],
        ['exercise_id' => 31, 'question' => 'Que signifie "Bone" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Quatre', 'options' => null],
        ['exercise_id' => 31, 'question' => 'Traduisez "Cinq" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tan', 'options' => null],

        // Exercise 32 - QCM Niveau 2
        ['exercise_id' => 32, 'question' => 'Comment dit-on "Six" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Sambanu', 'options' => json_encode(['Sambanu', 'Sambuadi', 'Nwam', 'Libwa'])],
        ['exercise_id' => 32, 'question' => 'Comment dit-on "Sept" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Sambuadi', 'options' => json_encode(['Sambanu', 'Sambuadi', 'Nwam', 'Libwa'])],
        ['exercise_id' => 32, 'question' => 'Comment dit-on "Huit" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Nwam', 'options' => json_encode(['Sambanu', 'Sambuadi', 'Nwam', 'Libwa'])],
        ['exercise_id' => 32, 'question' => 'Comment dit-on "Neuf" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Libwa', 'options' => json_encode(['Sambanu', 'Sambuadi', 'Nwam', 'Libwa'])],
        ['exercise_id' => 32, 'question' => 'Comment dit-on "Dix" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Tamba', 'options' => json_encode(['Tamba', 'Mboa', 'Beba', 'Lalo'])],

        // Exercise 33 - Vrai/Faux Niveau 2
        ['exercise_id' => 33, 'question' => '"Sambanu" signifie "Six" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 33, 'question' => '"Sambuadi" signifie "Huit" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 33, 'question' => '"Nwam" signifie "Huit" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 33, 'question' => '"Tamba" signifie "Dix" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 33, 'question' => '"Libwa" signifie "Sept" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 34 - Traduction Niveau 2
        ['exercise_id' => 34, 'question' => 'Traduisez "Six" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Sambanu', 'options' => null],
        ['exercise_id' => 34, 'question' => 'Que signifie "Sambuadi" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Sept', 'options' => null],
        ['exercise_id' => 34, 'question' => 'Traduisez "Huit" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Nwam', 'options' => null],
        ['exercise_id' => 34, 'question' => 'Que signifie "Libwa" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Neuf', 'options' => null],
        ['exercise_id' => 34, 'question' => 'Traduisez "Dix" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Tamba', 'options' => null],

        // Exercise 35 - Révision Générale
        ['exercise_id' => 35, 'question' => 'Comment dit-on "Un" en Duala ?', 'type' => 'qcm', 'reponse_correcte' => 'Mboa', 'options' => json_encode(['Mboa', 'Beba', 'Lalo', 'Tamba'])],
        ['exercise_id' => 35, 'question' => '"Tamba" signifie "Dix" en Duala', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 35, 'question' => 'Que signifie "Tan" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Cinq', 'options' => null],
        ['exercise_id' => 35, 'question' => 'Que signifie "Sambanu" ?', 'type' => 'qcm', 'reponse_correcte' => 'Six', 'options' => json_encode(['Cinq', 'Six', 'Sept', 'Huit'])],
        ['exercise_id' => 35, 'question' => 'Traduisez "Neuf" en Duala', 'type' => 'texte_libre', 'reponse_correcte' => 'Libwa', 'options' => null],
        ];

        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}
