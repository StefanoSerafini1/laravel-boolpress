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

/*HOMEPAGE*/
Route::get('/', 'HomeController@index')->name('home');

/*ROTTE PUBLIC*/

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{slug}', 'PostController@show')->name('posts.show');

/*ROTTE PER LOGIN / REGISTRAZIONE*/

Auth::routes();

/*ROTTE PAGINE PER UTENTI LOGGATI*/

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.') //mi permette di aggiungere un pezzo avanti alla route
    ->middleware('auth')
    ->group(function() {
        //Home Admin
            Route::get('/', 'HomeController@index')->name('home');

        //Rotte CRUD per i Post
            Route::resource('posts', 'PostController');
    });
