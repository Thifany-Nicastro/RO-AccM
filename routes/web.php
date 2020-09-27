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

Auth::routes();

Route::namespace('Web')->group(function () {
    // Route::middleware(['user'])->group(function () {
    Route::name('user.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::resource('/characters', 'CharacterController');
        Route::resource('/screenshots', 'ScreenshotController');
        Route::resource('/items', 'ItemController');
        Route::get('/carteira', 'CarteiraController@index')->name('carteira');
        Route::resource('/builds', 'BuildController');
        // Route::get('/configs', 'PersonagemController@index')->name('configs');
    });
    // });

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('index');
    });
});
