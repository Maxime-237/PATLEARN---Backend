<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
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

        


        // ============================================
        // EWONDO - Leçon 6 : Salutations et Courtoisie
        // ============================================

        // Exercise 36 - QCM Niveau 1
        ['exercise_id' => 36, 'question' => 'Comment dit-on "Bonjour" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo', 'options' => json_encode(['Mbolo', 'Akiba', 'Oyono', 'Wonja'])],
        ['exercise_id' => 36, 'question' => 'Que signifie "Akiba" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Merci', 'options' => json_encode(['Bonjour', 'Merci', 'Au revoir', 'Pardon'])],
        ['exercise_id' => 36, 'question' => 'Comment dit-on "Au revoir" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Oyono', 'options' => json_encode(['Mbolo', 'Akiba', 'Oyono', 'Wonja'])],
        ['exercise_id' => 36, 'question' => 'Que signifie "Wonja" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Merci', 'Pardon', 'Bienvenue', 'Bonsoir'])],
        ['exercise_id' => 36, 'question' => 'Comment dit-on "Pardon" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Bolimo', 'options' => json_encode(['Bolimo', 'Akiba', 'Mbolo', 'Oyono'])],

        // Exercise 37 - Vrai/Faux Niveau 1
        ['exercise_id' => 37, 'question' => '"Mbolo" signifie "Bonjour" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 37, 'question' => '"Akiba" signifie "Au revoir" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 37, 'question' => '"Oyono" signifie "Au revoir" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 37, 'question' => '"Wonja" signifie "Merci" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 37, 'question' => '"Bolimo" signifie "Pardon" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 38 - Traduction Niveau 1
        ['exercise_id' => 38, 'question' => 'Traduisez "Bonjour" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Mbolo', 'options' => null],
        ['exercise_id' => 38, 'question' => 'Que signifie "Oyono" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Au revoir', 'options' => null],
        ['exercise_id' => 38, 'question' => 'Traduisez "Merci" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Akiba', 'options' => null],
        ['exercise_id' => 38, 'question' => 'Que signifie "Wonja" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bienvenue', 'options' => null],
        ['exercise_id' => 38, 'question' => 'Traduisez "Pardon" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Bolimo', 'options' => null],

        // Exercise 39 - QCM Niveau 2
        ['exercise_id' => 39, 'question' => 'Comment dit-on "Comment vas-tu ?" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Bia nnem ?', 'options' => json_encode(['Bia nnem ?', 'Mbolo', 'Akiba', 'Oyono'])],
        ['exercise_id' => 39, 'question' => 'Que signifie "Ma nnem bia" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Je vais bien', 'options' => json_encode(['Je vais mal', 'Je vais bien', 'Comment vas-tu ?', 'Au revoir'])],
        ['exercise_id' => 39, 'question' => 'Comment dit-on "Merci beaucoup" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Akiba mingi', 'options' => json_encode(['Akiba mingi', 'Mbolo mingi', 'Oyono mingi', 'Wonja mingi'])],
        ['exercise_id' => 39, 'question' => 'Comment dit-on "Bonsoir" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo wo', 'options' => json_encode(['Mbolo wo', 'Mbolo bolo', 'Akiba', 'Oyono'])],
        ['exercise_id' => 39, 'question' => 'Que signifie "Bia nnem ?" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Comment vas-tu ?', 'options' => json_encode(['Comment vas-tu ?', 'Bonjour', 'Au revoir', 'Merci'])],

        // Exercise 40 - Vrai/Faux Niveau 2
        ['exercise_id' => 40, 'question' => '"Bia nnem ?" signifie "Comment vas-tu ?"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 40, 'question' => '"Ma nnem bia" signifie "Je vais mal"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 40, 'question' => '"Akiba mingi" signifie "Merci beaucoup"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 40, 'question' => '"Mbolo wo" signifie "Bonsoir" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 40, 'question' => '"Wonja" signifie "Merci" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 41 - Traduction Niveau 2
        ['exercise_id' => 41, 'question' => 'Traduisez "Comment vas-tu ?" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Bia nnem ?', 'options' => null],
        ['exercise_id' => 41, 'question' => 'Que signifie "Ma nnem bia" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Je vais bien', 'options' => null],
        ['exercise_id' => 41, 'question' => 'Traduisez "Merci beaucoup" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Akiba mingi', 'options' => null],
        ['exercise_id' => 41, 'question' => 'Que signifie "Mbolo wo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Bonsoir', 'options' => null],
        ['exercise_id' => 41, 'question' => 'Traduisez "Bienvenue" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Wonja', 'options' => null],

        // Exercise 42 - Révision Générale
        ['exercise_id' => 42, 'question' => 'Comment dit-on "Bonjour" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Mbolo', 'options' => json_encode(['Mbolo', 'Akiba', 'Oyono', 'Wonja'])],
        ['exercise_id' => 42, 'question' => '"Akiba mingi" signifie "Merci beaucoup"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 42, 'question' => 'Que signifie "Bolimo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Pardon', 'options' => null],
        ['exercise_id' => 42, 'question' => 'Que signifie "Wonja" ?', 'type' => 'qcm', 'reponse_correcte' => 'Bienvenue', 'options' => json_encode(['Bonjour', 'Merci', 'Bienvenue', 'Au revoir'])],
        ['exercise_id' => 42, 'question' => 'Traduisez "Au revoir" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Oyono', 'options' => null],

        // ============================================
        // EWONDO - Leçon 7 : La Famille et les Personnes
        // ============================================

        // Exercise 43 - QCM Niveau 1
        ['exercise_id' => 43, 'question' => 'Comment dit-on "Père" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Tara', 'options' => json_encode(['Tara', 'Nna', 'Mvin', 'Nda'])],
        ['exercise_id' => 43, 'question' => 'Comment dit-on "Mère" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Nna', 'options' => json_encode(['Tara', 'Nna', 'Mvin', 'Nda'])],
        ['exercise_id' => 43, 'question' => 'Que signifie "Mvin" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Enfant', 'options' => json_encode(['Père', 'Mère', 'Enfant', 'Maison'])],
        ['exercise_id' => 43, 'question' => 'Comment dit-on "Maison" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Nda', 'options' => json_encode(['Tara', 'Nna', 'Mvin', 'Nda'])],
        ['exercise_id' => 43, 'question' => 'Que signifie "Beti be nda" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Famille', 'options' => json_encode(['Maison', 'Famille', 'Enfants', 'Parents'])],

        // Exercise 44 - Vrai/Faux Niveau 1
        ['exercise_id' => 44, 'question' => '"Tara" signifie "Père" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 44, 'question' => '"Nna" signifie "Grand-mère" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 44, 'question' => '"Mvin" signifie "Enfant" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 44, 'question' => '"Nda" signifie "Maison" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 44, 'question' => '"Beti be nda" signifie "Enfants"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 45 - Traduction Niveau 1
        ['exercise_id' => 45, 'question' => 'Traduisez "Père" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Tara', 'options' => null],
        ['exercise_id' => 45, 'question' => 'Que signifie "Nna" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Mère', 'options' => null],
        ['exercise_id' => 45, 'question' => 'Traduisez "Enfant" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Mvin', 'options' => null],
        ['exercise_id' => 45, 'question' => 'Que signifie "Nda" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Maison', 'options' => null],
        ['exercise_id' => 45, 'question' => 'Traduisez "Famille" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Beti be nda', 'options' => null],

        // Exercise 46 - QCM Niveau 2
        ['exercise_id' => 46, 'question' => 'Comment dit-on "Grand-père" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Tara kulu', 'options' => json_encode(['Tara kulu', 'Nna kulu', 'Tara moke', 'Nna moke'])],
        ['exercise_id' => 46, 'question' => 'Comment dit-on "Grand-mère" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Nna kulu', 'options' => json_encode(['Tara kulu', 'Nna kulu', 'Tara moke', 'Nna moke'])],
        ['exercise_id' => 46, 'question' => 'Que signifie "Tara moke" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 46, 'question' => 'Comment dit-on "Tante" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Nna moke', 'options' => json_encode(['Tara moke', 'Nna moke', 'Tara kulu', 'Nna kulu'])],
        ['exercise_id' => 46, 'question' => 'Comment dit-on "Ami" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Moninga', 'options' => json_encode(['Moninga', 'Mvin', 'Tara', 'Nna'])],

        // Exercise 47 - Vrai/Faux Niveau 2
        ['exercise_id' => 47, 'question' => '"Tara kulu" signifie "Grand-père"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 47, 'question' => '"Nna moke" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 47, 'question' => '"Tara moke" signifie "Oncle"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 47, 'question' => '"Nna kulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 47, 'question' => '"Moninga" signifie "Ennemi" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 48 - Traduction Niveau 2
        ['exercise_id' => 48, 'question' => 'Traduisez "Grand-père" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Tara kulu', 'options' => null],
        ['exercise_id' => 48, 'question' => 'Que signifie "Nna kulu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Grand-mère', 'options' => null],
        ['exercise_id' => 48, 'question' => 'Traduisez "Oncle" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Tara moke', 'options' => null],
        ['exercise_id' => 48, 'question' => 'Que signifie "Nna moke" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Tante', 'options' => null],
        ['exercise_id' => 48, 'question' => 'Que signifie "Moninga" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Ami', 'options' => null],

        // Exercise 49 - Révision Générale
        ['exercise_id' => 49, 'question' => 'Comment dit-on "Père" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Tara', 'options' => json_encode(['Tara', 'Nna', 'Mvin', 'Nda'])],
        ['exercise_id' => 49, 'question' => '"Nna kulu" signifie "Grand-mère"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 49, 'question' => 'Que signifie "Beti be nda" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Famille', 'options' => null],
        ['exercise_id' => 49, 'question' => 'Que signifie "Tara moke" ?', 'type' => 'qcm', 'reponse_correcte' => 'Oncle', 'options' => json_encode(['Père', 'Grand-père', 'Oncle', 'Frère'])],
        ['exercise_id' => 49, 'question' => 'Traduisez "Tante" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Nna moke', 'options' => null],

        // ============================================
        // EWONDO - Leçon 8 : Vie Quotidienne et Objets
        // ============================================

        // Exercise 50 - QCM Niveau 1
        ['exercise_id' => 50, 'question' => 'Comment dit-on "Eau" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Ndok', 'options' => json_encode(['Ndok', 'Nyama', 'Kpwem', 'Ngon'])],
        ['exercise_id' => 50, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Viande', 'options' => json_encode(['Eau', 'Viande', 'Pain', 'Poisson'])],
        ['exercise_id' => 50, 'question' => 'Comment dit-on "Poisson" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Kpwem', 'options' => json_encode(['Ndok', 'Nyama', 'Kpwem', 'Ngon'])],
        ['exercise_id' => 50, 'question' => 'Que signifie "Ngon" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Fille', 'options' => json_encode(['Eau', 'Viande', 'Fille', 'Poisson'])],
        ['exercise_id' => 50, 'question' => 'Comment dit-on "Feu" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Owondo', 'options' => json_encode(['Owondo', 'Ndok', 'Nyama', 'Kpwem'])],

        // Exercise 51 - Vrai/Faux Niveau 1
        ['exercise_id' => 51, 'question' => '"Ndok" signifie "Eau" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 51, 'question' => '"Nyama" signifie "Poisson" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 51, 'question' => '"Kpwem" signifie "Poisson" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 51, 'question' => '"Ngon" signifie "Fille" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 51, 'question' => '"Owondo" signifie "Eau" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 52 - Traduction Niveau 1
        ['exercise_id' => 52, 'question' => 'Traduisez "Eau" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Ndok', 'options' => null],
        ['exercise_id' => 52, 'question' => 'Que signifie "Nyama" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Viande', 'options' => null],
        ['exercise_id' => 52, 'question' => 'Traduisez "Poisson" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Kpwem', 'options' => null],
        ['exercise_id' => 52, 'question' => 'Que signifie "Owondo" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Feu', 'options' => null],
        ['exercise_id' => 52, 'question' => 'Traduisez "Fille" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Ngon', 'options' => null],

        // Exercise 53 - QCM Niveau 2
        ['exercise_id' => 53, 'question' => 'Comment dit-on "Marché" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Sanje', 'options' => json_encode(['Sanje', 'Nda', 'Ndok', 'Nyama'])],
        ['exercise_id' => 53, 'question' => 'Que signifie "Bian" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Argent', 'options' => json_encode(['Marché', 'Argent', 'Vêtement', 'Route'])],
        ['exercise_id' => 53, 'question' => 'Comment dit-on "Vêtement" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Elamba', 'options' => json_encode(['Elamba', 'Bian', 'Sanje', 'Ndok'])],
        ['exercise_id' => 53, 'question' => 'Que signifie "Mvog" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Village', 'options' => json_encode(['Maison', 'Village', 'Marché', 'Eau'])],
        ['exercise_id' => 53, 'question' => 'Comment dit-on "Route" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Nja', 'options' => json_encode(['Nja', 'Sanje', 'Nda', 'Bian'])],

        // Exercise 54 - Vrai/Faux Niveau 2
        ['exercise_id' => 54, 'question' => '"Sanje" signifie "Marché" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 54, 'question' => '"Bian" signifie "Vêtement" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 54, 'question' => '"Elamba" signifie "Vêtement" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 54, 'question' => '"Mvog" signifie "Village" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 54, 'question' => '"Nja" signifie "Rivière" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 55 - Traduction Niveau 2
        ['exercise_id' => 55, 'question' => 'Traduisez "Marché" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Sanje', 'options' => null],
        ['exercise_id' => 55, 'question' => 'Que signifie "Bian" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Argent', 'options' => null],
        ['exercise_id' => 55, 'question' => 'Traduisez "Vêtement" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Elamba', 'options' => null],
        ['exercise_id' => 55, 'question' => 'Que signifie "Nja" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Route', 'options' => null],
        ['exercise_id' => 55, 'question' => 'Traduisez "Village" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Mvog', 'options' => null],

        // Exercise 56 - Révision Générale
        ['exercise_id' => 56, 'question' => 'Comment dit-on "Eau" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Ndok', 'options' => json_encode(['Ndok', 'Nyama', 'Kpwem', 'Sanje'])],
        ['exercise_id' => 56, 'question' => '"Elamba" signifie "Vêtement"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 56, 'question' => 'Que signifie "Sanje" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Marché', 'options' => null],
        ['exercise_id' => 56, 'question' => 'Que signifie "Kpwem" ?', 'type' => 'qcm', 'reponse_correcte' => 'Poisson', 'options' => json_encode(['Eau', 'Viande', 'Poisson', 'Feu'])],
        ['exercise_id' => 56, 'question' => 'Traduisez "Argent" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Bian', 'options' => null],

        // ============================================
        // EWONDO - Leçon 9 : Verbes d'Action
        // ============================================

        // Exercise 57 - QCM Niveau 1
        ['exercise_id' => 57, 'question' => 'Comment dit-on "Manger" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Di', 'options' => json_encode(['Di', 'Nu', 'Ke', 'Bia'])],
        ['exercise_id' => 57, 'question' => 'Que signifie "Nu" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Boire', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Marcher'])],
        ['exercise_id' => 57, 'question' => 'Comment dit-on "Parler" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Lob', 'options' => json_encode(['Di', 'Nu', 'Lob', 'Ke'])],
        ['exercise_id' => 57, 'question' => 'Que signifie "Ke" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Aller', 'options' => json_encode(['Manger', 'Boire', 'Parler', 'Aller'])],
        ['exercise_id' => 57, 'question' => 'Comment dit-on "Dormir" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Le', 'options' => json_encode(['Le', 'Di', 'Nu', 'Lob'])],

        // Exercise 58 - Vrai/Faux Niveau 1
        ['exercise_id' => 58, 'question' => '"Di" signifie "Manger" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 58, 'question' => '"Nu" signifie "Manger" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 58, 'question' => '"Lob" signifie "Parler" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 58, 'question' => '"Ke" signifie "Aller" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 58, 'question' => '"Le" signifie "Courir" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 59 - Traduction Niveau 1
        ['exercise_id' => 59, 'question' => 'Traduisez "Manger" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Di', 'options' => null],
        ['exercise_id' => 59, 'question' => 'Que signifie "Nu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Boire', 'options' => null],
        ['exercise_id' => 59, 'question' => 'Traduisez "Parler" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Lob', 'options' => null],
        ['exercise_id' => 59, 'question' => 'Que signifie "Le" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Dormir', 'options' => null],
        ['exercise_id' => 59, 'question' => 'Traduisez "Aller" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Ke', 'options' => null],

        // Exercise 60 - QCM Niveau 2
        ['exercise_id' => 60, 'question' => 'Comment dit-on "Travailler" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Bia mosapi', 'options' => json_encode(['Bia mosapi', 'Lob', 'Ke', 'Le'])],
        ['exercise_id' => 60, 'question' => 'Que signifie "Som" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Étudier', 'options' => json_encode(['Manger', 'Boire', 'Étudier', 'Dormir'])],
        ['exercise_id' => 60, 'question' => 'Comment dit-on "Voir" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Na', 'options' => json_encode(['Na', 'Di', 'Nu', 'Le'])],
        ['exercise_id' => 60, 'question' => 'Que signifie "Tik" en Français ?', 'type' => 'qcm', 'reponse_correcte' => 'Arrêter', 'options' => json_encode(['Partir', 'Arrêter', 'Courir', 'Venir'])],
        ['exercise_id' => 60, 'question' => 'Comment dit-on "Venir" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Za', 'options' => json_encode(['Za', 'Tik', 'Na', 'Som'])],

        // Exercise 61 - Vrai/Faux Niveau 2
        ['exercise_id' => 61, 'question' => '"Som" signifie "Étudier" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 61, 'question' => '"Na" signifie "Entendre" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 61, 'question' => '"Tik" signifie "Arrêter" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 61, 'question' => '"Za" signifie "Venir" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 61, 'question' => '"Bia mosapi" signifie "Jouer" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 62 - Traduction Niveau 2
        ['exercise_id' => 62, 'question' => 'Traduisez "Étudier" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Som', 'options' => null],
        ['exercise_id' => 62, 'question' => 'Que signifie "Na" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Voir', 'options' => null],
        ['exercise_id' => 62, 'question' => 'Traduisez "Arrêter" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Tik', 'options' => null],
        ['exercise_id' => 62, 'question' => 'Que signifie "Za" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Venir', 'options' => null],
        ['exercise_id' => 62, 'question' => 'Traduisez "Travailler" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Bia mosapi', 'options' => null],

        // Exercise 63 - Révision Générale
        ['exercise_id' => 63, 'question' => 'Comment dit-on "Manger" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Di', 'options' => json_encode(['Di', 'Nu', 'Lob', 'Le'])],
        ['exercise_id' => 63, 'question' => '"Som" signifie "Étudier"', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 63, 'question' => 'Que signifie "Tik" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Arrêter', 'options' => null],
        ['exercise_id' => 63, 'question' => 'Que signifie "Za" ?', 'type' => 'qcm', 'reponse_correcte' => 'Venir', 'options' => json_encode(['Partir', 'Venir', 'Courir', 'Arrêter'])],
        ['exercise_id' => 63, 'question' => 'Traduisez "Boire" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Nu', 'options' => null],

        // ============================================
        // EWONDO - Leçon 10 : Les Nombres
        // ============================================

        // Exercise 64 - QCM Niveau 1
        ['exercise_id' => 64, 'question' => 'Comment dit-on "Un" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Abe', 'options' => json_encode(['Abe', 'Eba', 'Ela', 'Ene'])],
        ['exercise_id' => 64, 'question' => 'Comment dit-on "Deux" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Eba', 'options' => json_encode(['Abe', 'Eba', 'Ela', 'Ene'])],
        ['exercise_id' => 64, 'question' => 'Comment dit-on "Trois" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Ela', 'options' => json_encode(['Abe', 'Eba', 'Ela', 'Ene'])],
        ['exercise_id' => 64, 'question' => 'Comment dit-on "Quatre" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Ene', 'options' => json_encode(['Abe', 'Eba', 'Ela', 'Ene'])],
        ['exercise_id' => 64, 'question' => 'Comment dit-on "Cinq" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Etuan', 'options' => json_encode(['Etuan', 'Esembe', 'Esaa', 'Awom'])],

        // Exercise 65 - Vrai/Faux Niveau 1
        ['exercise_id' => 65, 'question' => '"Abe" signifie "Un" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 65, 'question' => '"Eba" signifie "Trois" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 65, 'question' => '"Ela" signifie "Trois" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 65, 'question' => '"Ene" signifie "Cinq" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 65, 'question' => '"Etuan" signifie "Cinq" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 66 - Traduction Niveau 1
        ['exercise_id' => 66, 'question' => 'Traduisez "Un" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Abe', 'options' => null],
        ['exercise_id' => 66, 'question' => 'Que signifie "Eba" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Deux', 'options' => null],
        ['exercise_id' => 66, 'question' => 'Traduisez "Trois" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Ela', 'options' => null],
        ['exercise_id' => 66, 'question' => 'Que signifie "Ene" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Quatre', 'options' => null],
        ['exercise_id' => 66, 'question' => 'Traduisez "Cinq" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Etuan', 'options' => null],

        // Exercise 67 - QCM Niveau 2
        ['exercise_id' => 67, 'question' => 'Comment dit-on "Six" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Esembe', 'options' => json_encode(['Esembe', 'Esaa', 'Evom', 'Evu'])],
        ['exercise_id' => 67, 'question' => 'Comment dit-on "Sept" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Esaa', 'options' => json_encode(['Esembe', 'Esaa', 'Evom', 'Evu'])],
        ['exercise_id' => 67, 'question' => 'Comment dit-on "Huit" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Evom', 'options' => json_encode(['Esembe', 'Esaa', 'Evom', 'Evu'])],
        ['exercise_id' => 67, 'question' => 'Comment dit-on "Neuf" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Evu', 'options' => json_encode(['Esembe', 'Esaa', 'Evom', 'Evu'])],
        ['exercise_id' => 67, 'question' => 'Comment dit-on "Dix" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Awom', 'options' => json_encode(['Awom', 'Abe', 'Eba', 'Ela'])],

        // Exercise 68 - Vrai/Faux Niveau 2
        ['exercise_id' => 68, 'question' => '"Esembe" signifie "Six" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 68, 'question' => '"Esaa" signifie "Huit" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 68, 'question' => '"Evom" signifie "Huit" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 68, 'question' => '"Awom" signifie "Dix" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 68, 'question' => '"Evu" signifie "Sept" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'faux', 'options' => json_encode(['vrai', 'faux'])],

        // Exercise 69 - Traduction Niveau 2
        ['exercise_id' => 69, 'question' => 'Traduisez "Six" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Esembe', 'options' => null],
        ['exercise_id' => 69, 'question' => 'Que signifie "Esaa" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Sept', 'options' => null],
        ['exercise_id' => 69, 'question' => 'Traduisez "Huit" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Evom', 'options' => null],
        ['exercise_id' => 69, 'question' => 'Que signifie "Evu" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Neuf', 'options' => null],
        ['exercise_id' => 69, 'question' => 'Traduisez "Dix" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Awom', 'options' => null],

        // Exercise 70 - Révision Générale
        ['exercise_id' => 70, 'question' => 'Comment dit-on "Un" en Ewondo ?', 'type' => 'qcm', 'reponse_correcte' => 'Abe', 'options' => json_encode(['Abe', 'Eba', 'Ela', 'Awom'])],
        ['exercise_id' => 70, 'question' => '"Awom" signifie "Dix" en Ewondo', 'type' => 'vrai_faux', 'reponse_correcte' => 'vrai', 'options' => json_encode(['vrai', 'faux'])],
        ['exercise_id' => 70, 'question' => 'Que signifie "Etuan" en Français ?', 'type' => 'texte_libre', 'reponse_correcte' => 'Cinq', 'options' => null],
        ['exercise_id' => 70, 'question' => 'Que signifie "Esembe" ?', 'type' => 'qcm', 'reponse_correcte' => 'Six', 'options' => json_encode(['Cinq', 'Six', 'Sept', 'Huit'])],
        ['exercise_id' => 70, 'question' => 'Traduisez "Neuf" en Ewondo', 'type' => 'texte_libre', 'reponse_correcte' => 'Evu', 'options' => null],






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
