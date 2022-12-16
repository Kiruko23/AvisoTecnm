<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Middleware\ClientAuthMiddleware;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/avisos', 'App\Http\Controllers\AvisoController@showFilter')->name("aviso.index");
Route::get('/avisos/{id}', 'App\Http\Controllers\AvisoController@show')->name("aviso.show");


Route::middleware('auth')->group(function () {
    Route::get('/mycuenta/recordatorios', 'App\Http\Controllers\RecordatorioController@recordatorios')->name("mycuenta.recordatorio");
});

Route::get('/asistencia', 'App\Http\Controllers\AsistenciaController@index')->name("asistencia.index");
Route::get('/asistencia/delete', 'App\Http\Controllers\AsistenciaController@delete')->name("asistencia.delete");
Route::post('/asistencia/add/{id}', 'App\Http\Controllers\AsistenciaController@add')->name("asistencia.add");


Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/avisos', 'App\Http\Controllers\Admin\AdminAvisoController@index')->name("admin.aviso.index");
    Route::post('/admin/aviso/store', 'App\Http\Controllers\Admin\AdminAvisoController@store')->name("admin.aviso.store");
    Route::delete('/admin/avisos/{id}/delete', 'App\Http\Controllers\Admin\AdminAvisoController@delete')->name("admin.aviso.delete");
    Route::get('/admin/avisos/{id}/edit', 'App\Http\Controllers\Admin\AdminAvisoController@edit')->name("admin.aviso.edit");
    Route::put('/admin/avisos/{id}/update', 'App\Http\Controllers\Admin\AdminAvisoController@update')->name("admin.aviso.update");
});

Auth::routes();
