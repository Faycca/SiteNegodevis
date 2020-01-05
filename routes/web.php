<?php
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
    return view('accueil');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tarifs', function () {
    return 'tarifs';
})->middleware('verified');

Route::get('/liste_devis', function () {
    return 'listdevis';
})->middleware('verified');

Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
