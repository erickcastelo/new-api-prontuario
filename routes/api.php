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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});


Route::post('paciente', 'PacienteController@create');
Route::post('profissional-saude', 'ProfissionalSaudeController@create');

Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('pais', 'PaisController@index');
    Route::post('consulta', 'ConsultaController@create');
});
