<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicationController;


/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/

// Registro
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');


// Inicio de sesión
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');


// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Rutas protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth.custom')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Publicaciones
    |--------------------------------------------------------------------------
    */

    // Ver todas las publicaciones
    Route::get('/publications', [PublicationController::class, 'index'])
        ->name('publications.index');


    // Formulario para crear publicación
    Route::get('/publications/create', [PublicationController::class, 'create'])
        ->name('publications.create');


    // Guardar publicación
    Route::post('/publications', [PublicationController::class, 'store'])
        ->name('publications.store');


    // Ver publicaciones del usuario actual
    Route::get('/my-publications', [PublicationController::class, 'mine'])
        ->name('publications.mine');

});