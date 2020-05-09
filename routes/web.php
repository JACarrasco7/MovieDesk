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
    return view('welcome');
});

//LOGIN ADMIN

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin-login');

//LOGOUT ADMIN

Route::get('admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin-logout');

//ADMIN

Route::middleware('auth:admin')->prefix('admin')->namespace('admin')->group(function () {

    Route::get('/', 'PagesController@index')->name('admin-index');
    Route::get('/movies', 'PagesController@movies')->name('admin-movies');
    Route::get('/gender', 'PagesController@genders')->name('admin-genders');
    Route::get('/actors', 'PagesController@actors')->name('admin-actors');
    Route::get('/clients', 'PagesController@clients')->name('admin-clients');

    // PELICULA

    // Insertar pelicula
    Route::get('/movies/insert', 'MoviesController@create')->name('form-insert-movie');
    Route::post('/movies', 'MoviesController@store')->name('insert-movie');

    // Editar pelicula
    Route::get('/movies/{id}/edit', 'MoviesController@edit');
    Route::post('/movies/{id}/edit', 'MoviesController@update');

    // Activar pelicula
    Route::get('/movies/{id}/activate', 'MoviesController@activate');

    // Desactivar pelicula

    Route::get('/movies/{id}/desactivate', 'MoviesController@desactivate');

    // Eliminar pelicula
    Route::get('/movies/{id}/delete', 'MoviesController@destroy');

    // GENERO

    // Insertar genero
    Route::get('/genders/insert', 'MoviesController@create')->name('form-insert-gender');
    Route::post('/genders', 'MoviesController@store')->name('insert-gender'); 

    // Editar genero
    Route::get('/genders/{id}/edit', 'MoviesController@edit');
    Route::post('/genders/{id}/edit', 'MoviesController@update');

    // Eliminar genero
    Route::get('/genders/{id}/delete', 'MoviesController@destroy');

    // ACTOR

    // Insertar genero
    Route::get('/actors/insert', 'ActorsController@create')->name('form-insert-actor');
    Route::post('/actors', 'ActorsController@store')->name('insert-actor');
    // Editar genero
    Route::get('/actors/{id}/edit', 'ActorsController@edit');
    Route::post('/actors/{id}/edit', 'ActorsController@update');

    // Eliminar genero
    Route::get('/actors/{id}/delete', 'ActorsController@destroy');

});

//USER

Auth::routes();

Route::get('UserSalir', 'Auth\LoginController@userLogout')->name('user-logout');

Route::get('/', 'PagesUserController@index')->name('home');
