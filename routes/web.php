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
        Route::get('/personagens', 'PersonagemController@index')->name('personagens');
        Route::get('/album', 'ScreenshotController@index')->name('album');
        Route::get('/inventario', 'InventarioController@index')->name('inventario');
        Route::get('/carteira', 'CarteiraController@index')->name('carteira');
        Route::get('/builds', 'BuildController@index')->name('builds');
        // Route::get('/configs', 'PersonagemController@index')->name('configs');
    });
    // });

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('index');
    });
});
