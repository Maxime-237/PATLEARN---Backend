<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionEwondoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
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
        ];
    }
}
