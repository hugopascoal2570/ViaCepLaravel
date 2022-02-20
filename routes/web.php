<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuscaController;
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

Route::prefix('/')->group(function () {
    Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::post('login', [HomeController::class, 'loginAction']);
    Route::post('logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index']);
    Route::get('register', [HomeController::class, 'register']);
    Route::post('register', [HomeController::class, 'registerAction']);

    Route::get('busca', [BuscaController::class, 'busca'])->name('busca');
    Route::get('buscaCep', [BuscaController::class, 'BuscaCepAction'])->name('buscaCep');
    Route::get('resultado', [BuscaController::class, 'resultado'])->name('resultado');
});
