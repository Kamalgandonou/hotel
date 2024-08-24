<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminController::class,'home']);

Route::middleware([
    'auth:sanctum',
    'guest',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[AdminController::class,'index'])->name('home');

Route::get('/create_chambre',[AdminController::class,'create_chambre'])->name('create_chambre');

Route::post('/ajout_chambre',[AdminController::class,'ajout_chambre'])->name('ajout_chambre');

Route::get('/voir_chambre',[AdminController::class,'voir_chambre'])->name('voir_chambre');

Route::delete('/chambre_supprimer/{NoChambre}',[AdminController::class,'chambre_supprimer'])->name('chambre_supprimer');

Route::get('/chambre_modifier/{NoChambre}',[AdminController::class,'chambre_modifier'])->name('chambre_modifier');

Route::post('/changer_chambre/{NoChambre}',[AdminController::class,'changer_chambre'])->name('changer_chambre');
