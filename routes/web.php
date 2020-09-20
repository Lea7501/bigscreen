<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Retourne le questionnaire en page d'index
Route::get('/', 'FrontController@questionnaire');

// Affiche le message de validation quand le questionnaire est rempli
Route::post('/validate_message', 'FrontController@traitement');

//Page de consultation des réponses par les utilisateurs
Route::get('/{link}', 'FrontController@show');

