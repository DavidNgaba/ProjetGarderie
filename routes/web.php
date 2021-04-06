<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Enfant\EnfantController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Enfant\AjoutEnfantController;
use App\Http\Controllers\Admin\AddEducatriceController;
use App\Http\Controllers\Admin\AddFormationsController;
use App\Http\Controllers\Admin\RegisterAdminController;
use App\Http\Controllers\Enfant\ListeEnfantsController;
use App\Http\Controllers\Educatrice\EducatriceController;
use App\Http\Controllers\Enfant\ModifierEnfantController;
use App\Http\Controllers\Admin\ListeEducatricesController;
use App\Http\Controllers\Educatrice\LoginEducatriceController;
use App\Http\Controllers\Enfant\ModifierDetailsEnfantController;
use App\Http\Controllers\Educatrice\ModifierEducatriceController;


//Route vers la vue de la page principale de l'admin 
Route::get('/admin', [AdminController::class, 'index'])->name('pageAdmin');

//Route vers la vue de la page principale de l'enfant
Route::get('/enfant/{enfant}', [EnfantController::class, 'index'])->name('pageEnfant');

//Route vers la vue de la liste des enfants
Route::get('/listeEnfants', [ListeEnfantsController::class, 'index'])->name('listenfants');

//Route vers la vue de la liste des educatrices
Route::get('/listeEducatrices', [ListeEducatricesController::class, 'index'])->name('listeducatrices');

//Route vers la vue de la page principale de l'educatrice apres authentification
Route::get('/educatrice/{educatrice?}', [EducatriceController::class, 'index'])->name('pageEducatrice');

//Route vers la vue de la page de creation de l'admin
Route::get('/registerAdmin', [RegisterAdminController::class, 'index'])->name('register');
Route::post('/registerAdmin', [RegisterAdminController::class, 'check']);

//Route vers la vue de la page d'authentification de l'admin
Route::get('/loginAdmin', [LoginAdminController::class, 'index'])->name('login');
Route::post('/loginAdmin', [LoginAdminController::class, 'check']);

//Route vers la vue de la page de creation de l'educatrice
Route::get('/ajouterEducatrice', [AddEducatriceController::class, 'index'])->name('registereducatrice');
Route::post('/ajouterEducatrice', [AddEducatriceController::class, 'check']);

//Route vers la vue de la page de modification des details de l'enfant
Route::get('/modifierEducatrice/{educatrice?}', [ModifierEducatriceController::class, 'index'])->name('modifiereducatrice');
Route::post('/modifierEducatrice/{educatrice?}', [ModifierEducatriceController::class, 'update']);

//Route vers la vue de la page d'authentification de l'admin
Route::get('/loginEducatrice', [LoginEducatriceController::class, 'index'])->name('logineducatrice');
Route::post('/loginEducatrice', [LoginEducatriceController::class, 'check']);

//Route vers la vue de la page de creation de l'enfant
Route::get('/ajouterEnfant', [AjoutEnfantController::class, 'index'])->name('ajouterenfant');
Route::post('/ajouterEnfant', [AjoutEnfantController::class, 'check']);

//Route vers la vue de la page de modification des details de l'enfant
Route::get('/modifierEnfant/{enfant?}', [ModifierEnfantController::class, 'index'])->name('modifierenfant');
Route::post('/modifierEnfant/{enfant?}', [ModifierEnfantController::class, 'update']);

//Route vers la vue de la page de modification des details des tuteurs/recuperateurs l'enfant
Route::get('/modifierDetailsTuteur/{tuteur?}/enfant/{enfant?}', [ModifierDetailsEnfantController::class, 'tuteur'])->name('modifierDetailsTuteur');
Route::post('/modifierDetailsTuteur/{tuteur?}/enfant/{enfant?}', [ModifierDetailsEnfantController::class, 'updateTuteur']);
Route::post('/ajouterDetailsTuteur/{enfant?}', [ModifierDetailsEnfantController::class, 'addTuteur'])->name('ajouterDetailsTuteur');

Route::get('/ajouterDetailsRecuperateur/{enfant?}', [ModifierDetailsEnfantController::class, 'recuperateur'])->name('modifierDetailsRecuperateur');
Route::post('/ajouterDetailsRecuperateur/{enfant?}', [ModifierDetailsEnfantController::class, 'addRecuperateur']);

//Route vers la vue de deconnection
Route::post('/logout', [LogoutController::class, 'check'])->name('logout');


//Route vers la vue de la page d'acceuil
Route::get('/', function () {
    return view('principale.app');
})->name('acceuil');
