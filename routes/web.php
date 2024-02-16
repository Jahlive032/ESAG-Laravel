<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IntroController;

use App\Http\Controllers\EtudiantController;


Route::get('/',[IntroController::class,'index']);

Route::get('/views',[IntroController::class,'index']);

Route::get('chaine',[IntroController::class,'chaine']);

Route::post('chaine',[IntroController::class,'calcChaine']);

Route::get('multiplication',[IntroController::class,'multiplication']);

Route::post('multiplication',[IntroController::class,'generateTable']);

// Création de la route vers la méthode index de la classe EtudiantController

Route::get('etudiant',[EtudiantController::class,'index']);

Route::get('ajout_etudiant',[EtudiantController::class,'ajout_etudiant']);

Route::post('enregistrer_etudiant',[EtudiantController::class,'enregistrer_etudiant']) -> name ('etudiant.enregistrer');


Route::get('/css/{app}', function($app) {
    return response()->file(public_path("css/$app"));
})->where('app', '.*');