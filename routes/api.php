<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LeconController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\ProgressionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ROUTE PUBLIQUE
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Liste des cours (publique)
Route::get('/cours', [CoursController::class, 'index']);
Route::get('/cours/{id}', [CoursController::class, 'show']);


// ================================
//ROUTE PROTEGEES
// ================================

Route::middleware('auth:sanctum')->group(function () {

    //Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    //Inscriptions
    Route::get('/inscriptions', [InscriptionController::class, 'index']);
    Route::post('/cours/{cours_id}/inscrire', [InscriptionController::class, 'store']);
    Route::delete('/cours/{cours_id}/desinscrire', [InscriptionController::class, 'destroy']);

    //Lecons
    Route::get('/cours/{cours_id}/lecons', [LeconController::class, 'index']);
    Route::get('lecons/{id}', [LeconController::class, 'show']);

    //Exercices
    Route::get('/lecons/{lecon_id}/exercises', [ExerciseController::class, 'index']);
    Route::get('exercises/{id}', [ExerciseController::class, 'show']);

    //Questions
    Route::get('/exercises/{exercise_id}/questions', [QuestionController::class, 'index']);

    //Reponses
    Route::post('/questions/{question_id}/repondre', [ReponseController::class, 'store']);

    //Progressions
    Route::get('/progressions',                    [ProgressionController::class, 'index']);
    Route::post('/lecons/{lecon_id}/progression',  [ProgressionController::class, 'store']);

    // ================================
    // ROUTES ADMIN
    // ================================

    Route::middleware(['auth:sanctum', 'isAdmin'])->prefix('admin')->group(function () {

        //cours
        Route::post('cours', [CoursController::class, 'store']);
        Route::put('/cours/{id}',     [CoursController::class, 'update']);
        Route::delete('/cours/{id}',  [CoursController::class, 'destroy']);

        // Leçons
        Route::post('/cours/{cours_id}/lecons',  [LeconController::class, 'store']);
        Route::put('/lecons/{id}',               [LeconController::class, 'update']);
        Route::delete('/lecons/{id}',            [LeconController::class, 'destroy']);

         // Exercices
        Route::post('/lecons/{lecon_id}/exercises', [ExerciseController::class, 'store']);
        Route::put('/exercises/{id}',               [ExerciseController::class, 'update']);
        Route::delete('/exercises/{id}',            [ExerciseController::class, 'destroy']);

        // Questions
        Route::post('/exercises/{exercise_id}/questions', [QuestionController::class, 'store']);
        Route::put('/questions/{id}',                     [QuestionController::class, 'update']);
        Route::delete('/questions/{id}',                  [QuestionController::class, 'destroy']);
    });

});
