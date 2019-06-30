<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('pacientes', 'Api\PacienteController@index')->name('api/pacientes');

Route::put('pacientes/put', 'Api\PacienteController@put')->name('api/pacientes/put');

Route::delete('pacicentes/delete', 'Api\PacienteController@delete')->name('api/pacientes/delete');

Route::post('pacientes/post', 'Api\PacienteController@post')->name('api/pacientes/post');


Route::get('consultas', 'Api\ConsultaController@index')->name('api/consulta');

Route::put('consultas/put', 'Api\ConsultaController@put')->name('api/consultas/put');

Route::delete('consultas/delete', 'Api\ConsultaController@delete')->name('api/consultas/delete');

Route::post('consultas/post', 'Api\ConsultaController@post')->name('api/consultas/post');

Route::get('psicologos', 'Api/PsicologoController@index')->name('api/psicologos');

Route::put('psicologos/put', 'Api/PsicologoController@put')->name('api/psicologos/put');

Route::delete('pacicentes/delete', 'Api/PsicologoController@delete')->name('api/psicologos/delete');

Route::post('psicologos/post', 'Api/PsicologoController@post')->name('api/psicologos/post');