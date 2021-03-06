<?php

use App\Http\Controllers\WebController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [WebController::class, 'obtenerPromociones']);


Route::get('/home', [WebController::class, 'obtenerPromo']);


Route::get('/about', function () {
    $template = 'layout.template-about';
    return \View::make('layout.master')
        ->with('template', $template);
});



Route::get('/computer', function () {
    $template = 'layout.template-computer';
    return \View::make('layout.master')
        ->with('template', $template);
});
Route::get('/laptop', function () {
    $template = 'layout.template-laptop';
    return \View::make('layout.master')
        ->with('template', $template);
});
Route::get('/product', function () {
    $template = 'layout.template-product';
    return \View::make('layout.master')
        ->with('template', $template);
});
Route::get('/contact', function () {
    $template = 'layout.template-contact';
    return \View::make('layout.master')
        ->with('template', $template);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/cms-admin', [WebController::class, 'obtenerPromociones']);
});

Route::post('promoGuardar', [WebController::class, 'GuardarPromoAdm']);
