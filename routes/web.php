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

Route::get('pacientes', 'PacienteController@index')->name('pacientes');
Route::post('pacientes/create', 'PacienteController@create')->name('pacientes/crete');
Route::post('pacientes/edit/{id}', 'PacienteController@edit')->name('pacientes/edit');
Route::post('pacientes/destroy/{id}', 'PacienteController@destroy')->name('pacientes/destroy');

Route::get('psicologos', 'PsicologoController@index')->name('psicologos');
Route::post('psicologos/create', 'PsicologoController@create')->name('psicologos/create');
Route::post('psicologos/edit/{id}', 'PsicologoController@edit')->name('psicologos/edit');
Route::post('psicologos/destroy/{id}', 'PsicologoController@destroy')->name('psicologos/destroy');

Route::get('consultas/{id}', 'ConsultaController@index')->name('consultas');
Route::get('consultas/create', 'ConsultaController@create')->name('consultas/create');
Route::get('consultas/edit/{id}', 'ConsultaController@edit')->name('consultas/edit');
Route::get('consultas/destroy/{id}', 'ConsultaController@destroy')->name('consultas/destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
