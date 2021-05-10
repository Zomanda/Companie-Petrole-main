<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GisementController;
use App\Http\Controllers\MarcheInternationalController;



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

Route::get('/', function (){
    return view('index');
});

/***************COMPANIE**************************/


/**************GISEMENT***************************/
Route::view('/Gisement/Ajout', 'Gisement.ajoutGisement');

Route::post('/creation/creationAjax',
[GisementController::class, 'store'])->name('Gisement.store');

Route::get('/Gisement', [GisementController::class, 'index'])->name('Gisement.voirGisement'); function () 
{ 
    return view('/Gisement');
};

Route::post('/Gisement/Ajout/creationAjax',
[GisementController::class, 'store'])->name('gisements.store');



//Modification
ROUTE::get('/gisements/{gisement}/', // stream = url de la page
[GisementController::class, 'show'])->name('gisements.show'); //ajouter la route

ROUTE::patch('/gisements/{gisement}/modifier', // stream = url de la page
[GisementController::class, 'update'])->name('gisements.update'); //ajouter la route

ROUTE::get('/gisements/{gisement}/modifier', // stream = url de la page
[GisementController::class, 'edit'])->name('gisements.edit'); //ajouter la route


//Suppression
Route::delete('/gisements/{id}',
[GisementController::class, 'destroy'])->name('gisements.destroy');




/**************MARCHE INTERNATIONAL***************************/
Route::view('/MarcheInternational/Ajout', 'MarcheInternational.ajoutMarche');

Route::post('/creation/creationAjax',
[MarcheInternationalController::class, 'store'])->name('MarcheInternational.store');

Route::get('/MarcheInternational', [MarcheInternationalController::class, 'index'])->name('MarcheInternational.voirMarche'); function () 
{ 
    return view('/MarcheInternational');
};

Route::post('/MarcheInternational/Ajout/creationAjax',
[MarcheInternationalController::class, 'store'])->name('MarcheInternational.store');



//Modification
ROUTE::get('/marches/{marche}/', // stream = url de la page
[MarcheInternationalController::class, 'show'])->name('marches.show'); //ajouter la route

ROUTE::patch('/marches/{marche}/modifier', // stream = url de la page
[MarcheInternationalController::class, 'update'])->name('marches.update'); //ajouter la route

ROUTE::get('/marches/{marche}/modifier', // stream = url de la page
[MarcheInternationalController::class, 'edit'])->name('marches.edit'); //ajouter la route


//Suppression
Route::delete('/marches/{id}',
[MarcheInternationalController::class, 'destroy'])->name('marches.destroy');