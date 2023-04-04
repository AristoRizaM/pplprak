<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\cpl_snDiktiController;

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

Route::get('/matriks', function () {
    return view('Matriks/data');
});
Route::get('profil', [ProfilController::class, 'data'])->name('index');;
Route::get('profil/add', [ProfilController::class, 'add']);
Route::post('profil/store', [ProfilController::class,'addProcess']);
Route::get('profil/edit/{id}', [ProfilController::class, 'edit']);
Route::patch('profil/{id}', [ProfilController::class, 'editProcess']);
Route::delete('profil/{id}', [ProfilController::class, 'delete']);

Route::get('/', [cpl_snDiktiController::class, 'data'])->name('index');;
Route::get('cpl_snDikti', [cpl_snDiktiController::class, 'data'])->name('index');;
Route::get('cpl_snDikti/add', [cpl_snDiktiController::class, 'add']);
Route::post('cpl_snDikti/store', [cpl_snDiktiController::class,'addProcess']);
Route::get('cpl_snDikti/edit/{id}', [cpl_snDiktiController::class, 'edit']);
Route::patch('cpl_snDikti/{id}', [cpl_snDiktiController::class, 'editProcess']);
Route::delete('cpl_snDikti/{id}', [cpl_snDiktiController::class, 'delete']);