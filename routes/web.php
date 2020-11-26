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


Route::get('/home', function () {

    $template = "layout.template-home";
    return \View::make('layout.master')
        ->with('template', $template);
});
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
