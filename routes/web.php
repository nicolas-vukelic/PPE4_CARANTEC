<?php

use App\Http\Controllers\ReservationController;
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

Route::get('/accueil',function(){
    return view('welcome');
});

Route::get('/programme',function(){
    return view('programme');
});

/*Route::get('/reservation',function(){
    return view('reservation');
});*/

Route::get('/actualite',function(){
    return view('actualite');
});

Route::get('/avis',function(){
    return view('avis');
});

Route::get('',function(){
    return view('welcome');
});



Route::get('',function(){
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/article1',function(){
    return view('article1');
});


Route::get('/article2',function(){
    return view('article2');
});

Route::get('/article3',function(){
    return view('article3');
});


Route::get('/article4',function(){
    return view('article4');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/avis',function()
{
    return view('avis');
})->middleware(['auth'])->name('avis');

Route::post('/avis',function(){
    $avis = new \App\Models\Avis();
    $avis->NOM=request('nom');
    $avis->PRENOM=request('prenom');
    $avis->NOTE=request('note');
    $avis->AVIS=request('avis');
    $avis->save();

    return "Nous avons reçu votre avis qui est : " . request('avis');
});

Route::get('/liste_avis',function(){
    return view('liste_avis');
});

Route::get('/liste_avis',['App\Http\Controllers\AvisController','affichage_avis']);

Route::get('/programme', ['App\Http\Controllers\EventsController','affichage_events']);
Route::get('/infos_events/{IDEVENT}',['App\Http\Controllers\EventsController','infos_events']);

//Route::get('/reservation/{IDPER}',['App\Http\Controllers\ReservationController','infos_reservations']);

Route::post('/reservation',[ReservationController::class,'infos_reservations']);

Route::get('/reservation',['App\Http\Controllers\ReservationController','index']);

require __DIR__.'/auth.php';





